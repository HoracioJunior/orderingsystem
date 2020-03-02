<?php


namespace models;


class Avaliar
{
    private $id_avaliar, $qtdEstrelas,$comentario, $fk_id_produto,$fk_id_usuario;


    public function getIdAvaliar()
    {
        return $this->id_avaliar;
    }


    public function setIdAvaliar($id_avaliar)
    {
        $this->id_avaliar = $id_avaliar;
    }


    public function getQtdEstrelas()
    {
        return $this->qtdEstrelas;
    }


    public function setQtdEstrelas(float $qtdEstrelas)
    {
        $this->qtdEstrelas = (float)$qtdEstrelas;
    }


    public function getComentario()
    {
        return $this->comentario;
    }


    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }


    public function getFkIdProduto()
    {
        return $this->fk_id_produto;
    }


    public function setFkIdProduto($fk_id_produto)
    {
        $this->fk_id_produto = $fk_id_produto;
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