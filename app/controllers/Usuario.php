<?php


namespace controllers;

use models\Conexao;
use models\Usuario as UsuarioM;

class Usuario
{
    public static function iniciar_sessao(string $email, string $senha){
        $con = new Conexao();

        $res = $con->select("SELECT * FROM tb_usuarios WHERE email_usuario = :email", array
            ("email"=>$email)
            );
        if(count($res)>0){

            if(password_verify($senha,$res[0]["senha_usuario"]))
            {
                $_SESSION["usuario"] = $res[0];
                header("Location: /admin");
            }   else{
                header("Location: /admin/login");
            }
        } else{
            header("Location: /admin/login");
        }
    }
    public static function logout()
    {
        session_unset( $_SESSION["usuario"]);

    }
    public  function cadastrar_usuario(UsuarioM $usuario){
        $con = new Conexao();

        $con->query("INSERT INTO tb_usuarios(nome_usuario, apelido_usuario, email_usuario, senha_usuario, celular_usuario, fk_id_nivel_acesso) VALUES(:nome_usuario, :apelido_usuario, :email_usuario, :senha_usuario, :celular_usuario, :fk_id_nivel_acesso) ",
            array(
                ":nome_usuario"=>$usuario->getNomeUsuario(),
                ":apelido_usuario"=>$usuario->getApelidoUsuario(),
                ":email_usuario"=>$usuario->getEmailUsuario(),
                ":senha_usuario"=>$usuario->getSenhaUsuario(),
                ":celular_usuario"=>$usuario->getCelularUsuario(),
                ":fk_id_nivel_acesso"=>$usuario->getNivelAcesso()
            )
        );


    }
    public static  function listNiveis()
    {
        $con = new Conexao();
        return $con->select("select * from tb_nivel_acesso");
    }
    public static  function ListarUsuarios()
    {
        $con = new Conexao();
        return $con->select("select * from tb_usuarios");
    }
    public function update(UsuarioM $usuario)
    {
        $con = new Conexao();
    }
    public static function statusBloquear(int $id)
    {
        $con = new Conexao();
        $con ->query("UPDATE tb_usuarios set usuario_status='inativo' where id_usuario = :id", array(
            ":id"=>$id
        ));

    }
    public static function statusDesbloquear(int $id)
    {
        $con = new Conexao();
        $con ->query("UPDATE tb_usuarios set usuario_status='activo' where id_usuario = :id", array(
            ":id"=>$id
        ));

    }

    public static function verficarSessao(int $tipoUsuario){
        if(isset($_SESSION["usuario"]) and $_SESSION["usuario"] != null and $_SESSION["usuario"]!=0 ){
                if($tipoUsuario == 1 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=1){
                    header("Location: /");
                    exit();
                } elseif($tipoUsuario == 2 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=2){
                    header("Location: /");
                    exit();
                } elseif($tipoUsuario == 3 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=3){
                    header("Location: /");
                    exit();
                }
        }else{
            if($tipoUsuario==1 or $tipoUsuario == 2 ){
                header("Location: /admin/login");
                exit();
            } elseif ($tipoUsuario == 3){
                header("Location: /login");
                exit();
            }
        }
    }
}