<?php
use controllers\Carrinho;
use models\Conexao;
 function formatarPreco($preco)
{
   return number_format($preco,2,",", ".");
}
function cartQtd(){
     $conn = new Conexao();
    try {
        $sql = "SELECT COUNT(`fk_id_carrinho`) as cart FROM `tb_carrinhoprodutos` WHERE  fk_id_carrinho=:carrinhoId";
        $params = array(
            ":carrinhoId"=>$_SESSION[Carrinho::SESSION]["carrinhoId"]
        );
        return  $conn->select($sql, $params);
    }catch (\PDOException $e){
        echo "ERRO: ".$e->getMessage()."\n";
        echo "LINHA: ".$e->getLine()."\n";
    }
}