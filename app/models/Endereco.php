<?php


namespace models;


class Endereco
{
    private $id_endereco, $endereco,$data_cadastro, $fk_id_usuario;


    public function getIdEndereco()
    {
        return $this->id_endereco;
    }


    public function setIdEndereco($id_endereco)
    {
        $this->id_endereco = $id_endereco;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }


    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
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