<?php


namespace controllers;

use models\Conexao;
use models\Usuario as UsuarioM;
use Rain\Tpl;


class Usuario
{
    const ERROR_REGISTER = "UsuarioErrorRegister";
    const ERROR = "UsuarioError";

    public static function iniciar_sessao(string $email, string $senha, $ipadd){
        $con = new Conexao();
        $tpl = new Tpl();

        $res = $con->select("SELECT * FROM tb_usuarios WHERE email_usuario = :email AND usuario_status ='activo'", array
            ("email"=>$email)
            );
        if(count($res)>0){

            if(password_verify($senha,$res[0]["senha_usuario"]))
            {
                $_SESSION["usuario"] = $res[0];
                $id = $_SESSION["usuario"]["id_usuario"];
                $sessionId = mt_rand();
                $con->query("insert into tb_logs (ipaddress,fk_id_usuario, sessionId) VALUES (:ip, :id, :sessao)", array(
                    ":ip"=>$ipadd,
                    ":id"=>$id,
                    ":sessao"=>$sessionId
                ));
                header("Location: /admin");
            }   else{

                $_SESSION["erroLogin"] = "tramado222";


                header("Location: /admin/login");
            }
        } else{
            header("Location: /admin/login");
        }
    }
    public static function logout()
    {
        /*$id = $_SESSION["usuario"]["id_usuario"];
        $con = new Conexao();
        $result= $con->select("select tb_logs.sessionId from tb_logs where fk_id_usuario=$id");
        return $result;

        $sessionId =$result[0]["sessionId"];
        var_dump($sessionId);
        exit();

        $con->query("update tb_logs set fim_sessao=now() where sessionId = :session ", array(
            ":session"=>$sessionId
        ));*/
        //session_unset( $_SESSION["usuario"]);
        //session_destroy();
        $_SESSION["usuario"]=NULL;


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
    public  function updatePerfil(UsuarioM $usuario)
    {
        $con = new Conexao();

        $con->query("Update tb_usuarios set nome_usuario = :nome,apelido_usuario=:apelido, email_usuario=:email, celular_usuario=:celular where id_usuario=:id",
            array(
                ":id"=>$usuario->getIdUsuario(),
                ":nome"=>$usuario->getNomeUsuario(),
                ":apelido"=>$usuario->getApelidoUsuario(),
                ":email"=>$usuario->getEmailUsuario(),
                ":celular"=>$usuario->getCelularUsuario()
            )
        );
            Usuario::logout();
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
    public static function eliminar(UsuarioM $usuario)
    {
        $con = new Conexao();
        $con ->query("UPDATE tb_usuarios set usuario_status='inativo' where id_usuario = :id", array(
            ":id"=>$usuario->getIdUsuario()
        ));

    }
    public static function statusDesbloquear(int $id)
    {
        $con = new Conexao();
        $con ->query("UPDATE tb_usuarios set usuario_status='activo' where id_usuario = :id", array(
            ":id"=>$id
        ));

    }
    public static function changeSenha(UsuarioM $usuario, string $senhaAntiga)
    {

        $con = new Conexao();
       $result= $con->select("select * from tb_usuarios where id_usuario = :id", array(
            ":id"=>$usuario->getIdUsuario()
        ));
        if (count($result>0)){
            if(password_verify($senhaAntiga,$result[0]["senha_usuario"])){
                $con ->query("UPDATE tb_usuarios set senha_usuario=:senha where id_usuario = :id", array(
                    ":id"=>$usuario->getIdUsuario(),
                    ":senha"=>$usuario->getSenhaUsuario()
                ));

            }else{
                echo"errado";
            }
        }


    }

    public static function verficarSessao(int $tipoUsuario)
    {
        if(isset($_SESSION["usuario"]) and $_SESSION["usuario"] != null and $_SESSION["usuario"]!=0 ){
                if($tipoUsuario == 1 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=1){
                    header("Location: /pagina");
                    exit();
                } elseif($tipoUsuario == 2 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=2){
                    header("Location: /pagina");
                    exit();
                } elseif($tipoUsuario == 3 and $_SESSION["usuario"]["fk_id_nivel_acesso"]!=3){
                    header("Location: /pagina");
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
//ERROS
    public static function setErrorRegister($msg)
    {

        $_SESSION[Usuario::ERROR_REGISTER] = $msg;

    }

    public static function getErrorRegister()
    {

        $msg = (isset($_SESSION[Usuario::ERROR_REGISTER]) && $_SESSION[Usuario::ERROR_REGISTER]) ? $_SESSION[Usuario::ERROR_REGISTER] : '';

        Usuario::clearErrorRegister();

        return $msg;

    }

    public static function clearErrorRegister()
    {

        $_SESSION[Usuario::ERROR_REGISTER] = NULL;

    }

    //login

    public static function setError($msg)
    {

        $_SESSION[Usuario::ERROR] = $msg;

    }

    public static function getError()
    {

        $msg = (isset($_SESSION[Usuario::ERROR]) && $_SESSION[Usuario::ERROR]) ? $_SESSION[Usuario::ERROR] : '';

        Usuario::clearError();

        return $msg;

    }

    public static function clearError()
    {

        $_SESSION[Usuario::ERROR] = NULL;

    }
}