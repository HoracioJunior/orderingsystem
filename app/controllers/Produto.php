<?php


namespace controllers;
use models\Conexao;
use models\Produto as ProdutoM;

class Produto
{
    public function cadastrar_produto(ProdutoM $pro)
    {

        $pastaTemporaria = $pro->getImgItem()["tmp_name"];
        $permitido = array("jpg","png","gif","jpeg");
        $extensao =strtolower(pathinfo($pro->getImgItem()["name"],PATHINFO_EXTENSION));
        $directorio = "app/uploads/";
        $newName= uniqid().".$extensao";

        if(in_array($extensao,$permitido)){

            move_uploaded_file($pastaTemporaria,$directorio.$newName);
            $con= new Conexao();
            $con->query("insert into tb_produto(nome_produto,descricao_produto, preco_produto,img_item,fk_id_produto_ctg) values(:nome,:descricao,:preco,:img,:categoria)", array(
                ":nome"=>$pro->getNomeProduto(),
                ":img"=>$newName,
                ":descricao"=>$pro->getDescricaoProduto(),
                ":preco"=>$pro->getPrecoProduto(),
                ":categoria"=>$pro->getFkIdProdutoCtg(),
            ));
            $sucesso = "o item foi adicionada com sucesso";
            Produto::setSucesso($sucesso);

        }else{
            echo "tas fudido";
        }
    }
    public static function  listProduto(){
        $con= new Conexao();
        return $con ->select("SELECT * FROM tb_produto");
    }
    public static function  selectProdutoById(int $id){
        $conn = new Conexao();
        return $conn ->select("SELECT * FROM tb_produto where id_produto = :id", array(
            ":id"=>$id
        ));
    }

    public static function deleteById(int $id){
        $conn = new Conexao();
        $conn->query("delete from tb_produto where id_produto = :id",array(
            ":id"=>$id
        ));
        $sucesso = "operacao efectuada com sucesso";
        Produto::setSucesso($sucesso);
    }

    public function update_produto(ProdutoM $pro)
    {

        $pastaTemporaria = $pro->getImgItem()["tmp_name"];
        $permitido = array("jpg","png","gif","jpeg");
        $extensao =strtolower(pathinfo($pro->getImgItem()["name"],PATHINFO_EXTENSION));
        $directorio = "app/uploads/";
        $newName= uniqid().".$extensao";

        if(in_array($extensao,$permitido)){

            move_uploaded_file($pastaTemporaria,$directorio.$newName);
            $con= new Conexao();
            $con->query("UPDATE tb_produto SET nome_produto=:nome,descricao_produto=:descricao, preco_produto=:preco,img_item=:img,fk_id_produto_ctg=:categoria WHERE id_produto =:id",
                array(
                ":nome"=>$pro->getNomeProduto(),
                ":img"=>$newName,
                ":descricao"=>$pro->getDescricaoProduto(),
                ":preco"=>$pro->getPrecoProduto(),
                ":categoria"=>$pro->getFkIdProdutoCtg(),
                    ":id"=>$pro->getIdProduto()
            ));
        }else{
            echo "tas fudido";
        }
    }

    public static function rating($id){
        $conn = new Conexao();
        $resultado = $conn ->select("SELECT fk_id_produto,COUNT(fk_id_produto) as qtd, 
                                    FORMAT( AVG(qtd_estrelas),1) as media 
                                    FROM tb_rating where fk_id_produto =:id  GROUP BY fk_id_produto",
            array(":id"=>$id)
        );
        return $resultado;
    }
    public function  paginacao($page=1,$itensPerPage =6){
        $con= new Conexao();
        $start = ($page-1)* $itensPerPage;

        $result= $con ->select("SELECT * FROM `tb_produto` LIMIT $start,$itensPerPage ");
        $contador = $con->select("SELECT COUNT(*) as nrTotal FROM `tb_produto`");

        return[
            "produtos"=>$result,
            "total"=>(int)$contador[0]["nrTotal"],
            "paginas"=>ceil($contador[0]["nrTotal"]/$itensPerPage)
        ];
    }
    public static function setSucesso($msg)
    {

        $_SESSION["sucessoProduto"] = $msg;

    }

    public static function getSucesso()
    {

        $msg = (isset($_SESSION["sucessoProduto"]) && $_SESSION["sucessoProduto"]) ? $_SESSION["sucessoProduto"] : '';

        Produto::clearSucesso();

        return $msg;

    }

    public static function clearSucesso()
    {

        $_SESSION["sucessoProduto"] = NULL;

    }
}