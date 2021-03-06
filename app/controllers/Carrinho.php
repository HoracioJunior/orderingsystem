<?php


namespace controllers;
use http\Client\Request;
use http\Client\Response;
use models\Carrinho as CarrinhoM;
use models\Conexao;

class Carrinho
{
private $conn;
const SESSION = "Carrinho";

public function __construct()
{
    $this->conn = new Conexao();
}

    public function createCart()
{
    if(isset($_SESSION[Carrinho::SESSION])){
        if($_SESSION[Carrinho::SESSION]["usuarioId"] == null and isset($_SESSION["usuario"]) and $_SESSION["usuario"]["id_usuario"]>0){
            $_SESSION[Carrinho::SESSION]["usuarioId"] = $_SESSION["usuario"]["id_usuario"];
            try {
                $sql = "UPDATE tb_carrinho SET fk_id_usuario = :usuarioId where id_carrinho = :carrinhoId";
                $params = array(
                    ":usuarioId"=>$_SESSION[Carrinho::SESSION]["usuarioId"],
                    ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
                );
                return $this->conn->query($sql, $params);
            }catch (\PDOException $e){
                echo "ERRO: ".$e->getMessage()."\n";
                echo "LINHA: ".$e->getLine()."\n";
            }
        }
    }else{
        $carrinhoM = new CarrinhoM();
        if(isset($_SESSION["usuario"]) and $_SESSION["usuario"]["id_usuario"]>0){
            $carrinhoM->setFkIdUsuario($_SESSION["usuario"]["id_usuario"]);
        }

        $_SESSION[Carrinho::SESSION] = array
        (
            "sessionId"=>$carrinhoM->getIdSession(),
            "usuarioId"=>$carrinhoM->getFkIdUsuario(),
            "carrinhoId"=>$carrinhoM->getIdCarrinho()
        );
    $sql = "INSERT INTO tb_carrinho(id_session,fk_id_usuario) VALUES (:sessionId, :usuarioId)";
        $params = array(
            ":sessionId"=>$carrinhoM->getIdSession(),
            ":usuarioId"=>$carrinhoM->getFkIdUsuario()
        );
        $result = $this->conn->query($sql, $params);
        $_SESSION[Carrinho::SESSION]["carrinhoId"] =$this->conn->getLastId();
        return $result;

    }

}

public function addProduct(int $idProduto){
    try {
        $this->createCart();
        $result = $this->getPruduct($idProduto);

        if (count($result) < 1)
        {
            $sql = "INSERT INTO tb_CarrinhoProdutos(fk_id_produto,fk_id_carrinho) VALUES(:produtoId,:id_carrinho)";
            $params = array(
                ":produtoId"=>$idProduto,
                ":id_carrinho"=> $_SESSION[Carrinho::SESSION]["carrinhoId"]
            );
            $this->conn->query($sql, $params);
        }else{
            $sql = "INSERT INTO tb_CarrinhoProdutos(fk_id_produto,fk_id_carrinho) VALUES(:produtoId,:id_carrinho)";
            $params = array(
                ":produtoId"=>$idProduto,
                ":id_carrinho"=> $_SESSION[Carrinho::SESSION]["carrinhoId"]
            );
            $this->conn->query($sql, $params);
        }

    }catch (\PDOException $e){
        echo "ERRO: ".$e->getMessage()."\n";
        echo "LINHA: ".$e->getLine()."\n";
    }

}

public  function getPruduct(int $idProduto)
{
    try {

        $sql = " SELECT * FROM tb_CarrinhoProdutos where fk_id_produto = :produtoId";
        $params = array(
            ":produtoId"=>$idProduto
        );
        return  $this->conn->select($sql, $params);
    }catch (\PDOException $e){
        echo "ERRO: ".$e->getMessage()."\n";
        echo "LINHA: ".$e->getLine()."\n";
    }
}

public function listCart()
{
    try {
        $this->createCart();
        $sql = "SELECT b.id_produto, b.nome_produto, b.preco_produto, b.img_item, COUNT(*) as quantidade, SUM(b.preco_produto) as vlTotal
                    FROM tb_CarrinhoProdutos a INNER JOIN tb_produto b
                    ON b.id_produto = a.fk_id_produto
                    WHERE a.fk_id_carrinho =:carrinhoId GROUP BY b.id_produto, b.nome_produto, b.preco_produto, b.img_item";
        $params = array(
            ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
        );
        return  $this->conn->select($sql, $params);
    }catch (\PDOException $e){
        echo "ERRO: ".$e->getMessage()."\n";
        echo "LINHA: ".$e->getLine()."\n";
    }
}
 public  function countCart(){
     try {
         $con = new Conexao();
         $result = $con->select("SELECT COUNT(id_CarrinhoProdutos) as cart FROM `tb_carrinhoprodutos` WHERE  fk_id_carrinho=:carrinhoId", array(
             ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
         ));
         return  $result[0];
     }catch (\PDOException $e){
         echo "ERRO: ".$e->getMessage()."\n";
         echo "LINHA: ".$e->getLine()."\n";
     }
 }

    public  function subTotal(){
        try {;
            $sql = "SELECT SUM(preco_produto) as Subtotal from tb_produto a 
                    INNER JOIN  tb_carrinhoprodutos b ON a.id_produto = b.fk_id_produto
                    WHERE b.fk_id_carrinho=:carrinhoId";
            $params = array(
                ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
            );
            return  $this->conn->select($sql, $params);
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function  deleteSingle($idProduto){
    $conn = new Conexao();
        try {
           $conn->query("Delete from tb_carrinhoprodutos where fk_id_produto=:idProduto and fk_id_carrinho=:carrinhoId LIMIT 1",array(
               ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"],
               ":idProduto"=>$idProduto
           ));
            header("location: /carrinho");
            exit();
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
    public function  deleteAll($idProduto){
        $conn = new Conexao();
        try {
            $conn->query("Delete from tb_carrinhoprodutos where fk_id_produto=:idProduto and fk_id_carrinho=:carrinhoId",array(
                ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"],
                ":idProduto"=>$idProduto
            ));
            header("location: /carrinho");
            exit();
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
    public  function getIdCart()
    {
        try {

            $sql = " SELECT * FROM tb_CarrinhoProdutos where fk_id_carrinho = :id_carrinho";
            $params = array(
                ":id_carrinho"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
            );
            return  $this->conn->select($sql, $params);
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    /*public function addTest(Request $request, Response $response) : Response{
        if ($request->getHeader('X-Requested-With') === 'XMLHttpRequest') {
            return $response;
        } else {
            return $response->withRedirect($request->getHeader('Referer'));
        }
    }*/

}