<?php


namespace controllers;
use models\Carrinho as CarrinhoM;
use models\Conexao;

class Carrinho
{

    public function  save(CarrinhoM $carrinho)
    {
        $conn = new Conexao();
        $conn->query("INSERT INTO tb_carrinho(id_session) VALUES (:id_session)", array(
            ":id_session" => $carrinho->getIdSession()
        ));
    }








    /*const SESSION = "carrinho";

    public static function getFromSession()
    {
        $cart = new Carrinho();
        if(isset($_SESSION[Carrinho::SESSION]) && (int)$_SESSION[Carrinho::SESSION]['id_carrinho'] > 0){
            $cart->get((int)$_SESSION[Carrinho::SESSION]['id_carrinho']);
        } else{
            $cart->getFromSessionId();
            $dados =["id_session"=>session_id()];
            $cart->save();
        }
        return $cart;
    }
    public function getFromSessionId(){
        $conn = new Conexao();
        $result= $conn->select("SELECT * FROM tb_carrinho WHERE id_session = :id_session", array(
            ":id_session"=>session_id()
        ));
        if(count($result)>0){
            return $result;
        }

    }
    public function get(int $id_carrinho){
        $conn = new Conexao();
       $result= $conn->select("SELECT * FROM tb_carrinho WHERE id_carrinho = :id", array(
         ":id"=>$id_carrinho
       ));
        if(count($result)>0){
            return $result;
        }
    }
    public function  save()
    {
        $c = new CarrinhoM();
       $cart= $c->getIdSession();
        $conn = new Conexao();
        $conn->query("INSERT INTO tb_carrinho(id_session) VALUES (:id_session)", array(
            ":id_session" => $cart
        ));
    }*/
}