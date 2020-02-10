<?php


namespace controllers;
use models\Conexao;
use models\Produto as ProdutoM;

class Produto
{
    public function cadastrar_produto(ProdutoM $pro)
    {
        $con= new Conexao();
        $con->query("insert into tb_produto(nome_produto,descricao_produto, preco_produto,fk_id_produto_ctg) values(:nome,:descricao,:preco,:categoria)", array(
            ":nome"=>$pro->getNomeProduto(),
            ":descricao"=>$pro->getDescricaoProduto(),
            ":preco"=>$pro->getPrecoProduto(),
            ":categoria"=>$pro->getFkIdProdutoCtg(),
        ));
    }
    public static function  listProduto(){
        $con= new Conexao();
        return $con ->select("SELECT * FROM tb_produto");
    }

}