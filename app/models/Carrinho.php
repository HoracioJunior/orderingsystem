<?php


namespace models;


class Carrinho
{
    private $id_carrinho, $id_session, $fk_id_usuario;


    public function __construct()
    {
        $this->id_session = session_id();
        $this->fk_id_usuario =NULL;
    }


    public function getIdCarrinho()
    {
        return $this->id_carrinho;
    }


    public function setIdCarrinho($id_carrinho)
    {
        $this->id_carrinho = $id_carrinho;
    }


    public function getIdSession()
    {
        return $this->id_session;
    }


    public function setIdSession($id_session)
    {
        $this->id_session = $id_session;
    }

    public function getFkIdUsuario()
    {
        return $this->fk_id_usuario;
    }


    public function setFkIdUsuario($fk_id_usuario)
    {
        $this->fk_id_usuario = $fk_id_usuario;
    }


}