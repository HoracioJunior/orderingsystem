<?php


namespace controllers;
use models\Categoria as CategoriaM;
use models\Conexao;

class Categoria
{
    const SUCCESS = "Sucesss";

    public function cadastrar_categoria(CategoriaM $categoria){
        $categorias = Categoria::getNome();

        if (in_array($categoria->getNomeCategoria(), $categorias))
        {
            $erro = "A Categoria que tentou adicionar ja existe. Não foi possivel Adicionar!";
            Categoria::setExiste($erro);
            header("Location: /admin/menu/categorias");
            exit();

        }  else{
            $conn = new Conexao();
            $conn->query("INSERT INTO tb_produto_ctg (nome_categoria) VALUES (:nome)", array(
                ":nome" => $categoria->getNomeCategoria()
            ));
            $sucesso = "A Categoria foi adicionada com sucesso";
            Categoria::setSucesso($sucesso);
            header("Location: /admin/menu/categorias");
            exit();
        }

    }
    public static function  getNome(){
        $conn = new Conexao();
      $result = $conn ->select("SELECT tb_produto_ctg.nome_categoria FROM tb_produto_ctg");

      $categorias = [];
        foreach ($result as $data)
        {
            foreach ($data as $index => $categoria){

                array_push($categorias,$categoria);
            }
        }

      return $categorias;

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
           ":id"=>$categoria->getIdCategoria()
       ));

    }
     public static function deleteById(int $id){
        $conn = new Conexao();
        $conn->query("delete from tb_produto_ctg where id_produto_ctg = :id",array(
            ":id"=>$id
        ));

     }

    public static function setSucesso($msg)
    {

        $_SESSION["sucesso"] = $msg;

    }

    public static function getSucesso()
    {

        $msg = (isset($_SESSION["sucesso"]) && $_SESSION["sucesso"]) ? $_SESSION["sucesso"] : '';

        Categoria::clearSucesso();

        return $msg;

    }

    public static function clearSucesso()
    {

        $_SESSION["sucesso"] = NULL;

    }
//Errroooooooo==========================================================
    public static function setExiste($msg)
    {

        $_SESSION["existe"] = $msg;

    }
    public static function getExiste()
    {

        $msg = (isset($_SESSION["existe"]) && $_SESSION["existe"]) ? $_SESSION["existe"] : '';

        Categoria::clearExiste();

        return $msg;

    }

    public static function clearExiste()
    {

        $_SESSION["existe"] = NULL;

    }
}