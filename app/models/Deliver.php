<?php


namespace models;


class Deliver
{
    private $id_empresa,
            $nome_empresa,
            $endereco_empresa,
            $email_empresa,
            $contacto_empresa,
            $contacto_alt,
            $alvara_empresa,
            $email_acesso,
            $senha_acesso,
            $fk_deliver_empresa;


    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }


    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }


    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }


    public function setNomeEmpresa($nome_empresa)
    {
        $this->nome_empresa = $nome_empresa;
    }


    public function getEnderecoEmpresa()
    {
        return $this->endereco_empresa;
    }


    public function setEnderecoEmpresa($endereco_empresa)
    {
        $this->endereco_empresa = $endereco_empresa;
    }


    public function getEmailEmpresa()
    {
        return $this->email_empresa;
    }


    public function setEmailEmpresa($email_empresa)
    {
        $this->email_empresa = $email_empresa;
    }


    public function getContactoEmpresa()
    {
        return $this->contacto_empresa;
    }



    public function setContactoEmpresa($contacto_empresa)
    {
        $this->contacto_empresa = $contacto_empresa;
    }

    public function getContactoAlt()
    {
        return $this->contacto_alt;
    }

    public function setContactoAlt($contacto_alt)
    {
        $this->contacto_alt = $contacto_alt;
    }


    public function getAlvaraEmpresa()
    {
        return $this->alvara_empresa;
    }


    public function setAlvaraEmpresa($alvara_empresa)
    {
        $this->alvara_empresa = $alvara_empresa;
    }


    public function getEmailAcesso()
    {
        return $this->email_acesso;
    }


    public function setEmailAcesso($email_acesso)
    {
        $this->email_acesso = $email_acesso;
    }


    public function getSenhaAcesso()
    {
        return $this->senha_acesso;
    }


    public function setSenhaAcesso($senha_acesso)
    {
        $this->senha_acesso = password_hash($senha_acesso, PASSWORD_DEFAULT);
    }


    public function getFkDeliverEmpresa()
    {
        return $this->fk_deliver_empresa;
    }


    public function setFkDeliverEmpresa($fk_deliver_empresa)
    {
        $this->fk_deliver_empresa = $fk_deliver_empresa;
    }


}