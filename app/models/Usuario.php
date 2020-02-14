<?php


namespace models;


class Usuario
{
private $id_usuario,
$nome_usuario,
$apelido_usuario,
$email_usuario,
$senha_usuario,
$celular_usuario,
$usuario_status,
$nivel_acesso,
$senha_antiga;


    public function getIdUsuario()
    {
        return $this->id_usuario;
    }


    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }


    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }


    public function setNomeUsuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }


    public function getApelidoUsuario()
    {
        return $this->apelido_usuario;
    }


    public function setApelidoUsuario($apelido_usuario)
    {
        $this->apelido_usuario = $apelido_usuario;
    }


    public function getEmailUsuario()
    {
        return $this->email_usuario;
    }


    public function setEmailUsuario($email_usuario)
    {
        $this->email_usuario = $email_usuario;
    }

    public function getSenhaUsuario()
    {
        return $this->senha_usuario;
    }


    public function setSenhaUsuario($senha_usuario)
    {
        $this->senha_usuario = password_hash($senha_usuario, PASSWORD_DEFAULT);
    }


    public function getCelularUsuario()
    {
        return $this->celular_usuario;
    }


    public function setCelularUsuario($celular_usuario)
    {
        $this->celular_usuario = $celular_usuario;
    }



    public function getUsuarioStatus()
    {
        return $this->usuario_status;
    }


    public function setUsuarioStatus($usuario_status)
    {
        $this->usuario_status = $usuario_status;
    }


    public function getNivelAcesso()
    {
        return $this->nivel_acesso;
    }


    public function setNivelAcesso( $nivel_acesso)
    {
        $this->nivel_acesso = $nivel_acesso;
    }


    public function getSenhaAntiga()
    {
        return $this->senha_antiga;
    }


    public function setSenhaAntiga($senha_antiga)
    {
        $this->senha_antiga = password_hash($senha_antiga, PASSWORD_DEFAULT);
    }

}