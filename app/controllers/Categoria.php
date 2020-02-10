<?php


namespace controllers;
use models\Categoria as CategoriaM;
use models\Conexao;

class Categoria
{
    public function cadastrar_categoria(CategoriaM $categoria){
        $conn= new Conexao();
         $conn ->query("INSERT INTO tb_produto_ctg (nome_categoria) VALUES (:nome)", array(
            ":nome"=>$categoria->getNomeCategoria()
        ));
    }
    public static function  selectCategorias(){
        $conn = new Conexao();
        return $conn ->select("SELECT * FROM tb_produto_ctg");
    }
    public static function  selectCategoriasById(int $id){
        $conn = new Conexao();
        return $conn ->select("SELECT * FROM tb_produto_ctg where id_produto_ctg = :id", array(
            ":id"=>$id
        ));
    }
    public function update(CategoriaM $categoria){
       $conn = new Conexao();
       $conn ->select("Update tb_produto_ctg set nome_categoria = :nome where id_produto_ctg = :id", array(
           ":nome"=>$categoria->getNomeCategoria(),
           "id"=>$categoria->getIdCategoria()
       ));

    }
     public static function deleteById(int $id){
        $conn = new Conexao();
        $conn->query("delete from tb_produto_ctg where id_produto_ctg = :id",array(
            ":id"=>$id
        ));
     }
}