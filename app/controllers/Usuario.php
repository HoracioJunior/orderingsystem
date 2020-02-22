<?php


namespace controllers;

use models\Conexao;
use models\Usuario as UsuarioM;
use Rain\Tpl;


class Usuario
{



    public static function iniciar_sessao(string $email, string $senha, $ipadd){
        $con = new Conexao();

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
            }else{
                $msg = "Email ou senha do usuario forncedo estão errado";
                Usuario::setLoginErro($msg);
                header("Location: /admin/login");
                exit();

            }
        } else{
            $msg = "Email ou senha do usuario forncedo estão errado";
            Usuario::setLoginErro($msg);
            header("Location: /admin/login");
            exit();
        }
    }
    public static function logout()
    {

        $_SESSION["usuario"]=NULL;


    }
    public static function getUserFromSession(){
        $user = new Usuario();
        if(isset( $_SESSION["usuario"]) &&  (int)$_SESSION["usuario"]['id_usuario']>0){
            $user-> $_SESSION["usuario"];
        }
        return $user;
    }
    public static function checkLogin(){
        if (!isset( $_SESSION["usuario"]) || !$_SESSION["usuario"] || !(int)$_SESSION["usuario"]['id_usuario']>0){
            return false;//Usuario nao logado
        }else{
            return true;
        }
    }
    public  function cadastrar_usuario(UsuarioM $usuario){
        $emails = Usuario::getEmail();
        if(in_array($usuario->getEmailUsuario(),$emails)){
            $msg = "O email que forneceste já está sendo usado com outro usuario";
            Usuario::setExiste($msg);
            header("Location: /cadastrar-usuario");
            exit();
        }else{
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


    }
    public static function getEmail(){
        $conn = new Conexao();
        $result = $conn ->select("SELECT tb_usuarios.email_usuario FROM tb_usuarios");

        $emails = [];
        foreach ($result as $data)
        {
            foreach ($data as $index => $email){

                array_push($emails,$email);
            }
        }
        return $emails;
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
    //Seccao de erros
    public static function setExiste($msg)
    {

        $_SESSION["emailError"] = $msg;

    }
    public static function getExiste()
    {

        $msg = (isset($_SESSION["emailError"]) && $_SESSION["emailError"]) ? $_SESSION["emailError"] : '';

        Usuario::clearExiste();

        return $msg;

    }

    public static function clearExiste()
    {

        $_SESSION["emailError"] = NULL;

    }
//Loginerror
    public static function setLoginErro($msg)
    {

        $_SESSION["loginErro"] = $msg;

    }
    public static function getLoginErro()
    {

        $msg = (isset($_SESSION["loginErro"]) && $_SESSION["loginErro"]) ? $_SESSION["loginErro"] : '';

        Usuario::clearLoginErro();

        return $msg;

    }

    public static function clearLoginErro()
    {

        $_SESSION["loginErro"] = NULL;

    }
// Fim seccao de erros
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


}