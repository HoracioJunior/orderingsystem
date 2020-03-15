<?php


namespace controllers;

use models\Conexao;
use models\Usuario as UsuarioM;


class Usuario
{

    public static function iniciar_sessao(string $email, string $senha, $ipadd)
    {
        $con = new Conexao();

        $res = $con->select("SELECT * FROM tb_usuarios 
                            WHERE email_usuario = :email 
                            AND usuario_status ='activo' 
                            AND fk_id_nivel_acesso = 1 OR fk_id_nivel_acesso = 2", array
            ("email" => $email)
        );
        if (count($res) > 0) {

            if (password_verify($senha, $res[0]["senha_usuario"])) {
                $_SESSION["usuario"] = $res[0];
                $id = $_SESSION["usuario"]["id_usuario"];
                $sessionId = mt_rand();
                $con->query("insert into tb_logs (ipaddress,fk_id_usuario) VALUES (:ip, :id)", array(
                    ":ip" => $ipadd,
                    ":id" => $id,
                ));
                header("Location: /admin");
            } else {
                $msg = "Email ou senha do usuario forncedo estão errado";
                Usuario::setLoginErro($msg);
                header("Location: /admin/login");
                exit();

            }
        } else {
            $msg = "Email ou senha do usuario forncedo estão errado";
            Usuario::setLoginErro($msg);
            header("Location: /admin/login");
            exit();
        }
    }

    public static function logout()
    {
        $_SESSION["usuario"] = NULL;
    }

    public function cadastrar_usuario(UsuarioM $usuario)
    {
        $emails = Usuario::getEmail();
        if (in_array($usuario->getEmailUsuario(), $emails)) {
            $msg = "O email que forneceste já está sendo usado com outro usuario";
            Usuario::setExiste($msg);
            header("Location: /cadastrar-usuario");
            exit();
        } else {
            $con = new Conexao();
            $con->query("INSERT INTO tb_usuarios(nome_usuario, apelido_usuario, email_usuario, senha_usuario, celular_usuario, fk_id_nivel_acesso) VALUES(:nome_usuario, :apelido_usuario, :email_usuario, :senha_usuario, :celular_usuario, :fk_id_nivel_acesso) ",
                array(
                    ":nome_usuario" => $usuario->getNomeUsuario(),
                    ":apelido_usuario" => $usuario->getApelidoUsuario(),
                    ":email_usuario" => $usuario->getEmailUsuario(),
                    ":senha_usuario" => $usuario->getSenhaUsuario(),
                    ":celular_usuario" => $usuario->getCelularUsuario(),
                    ":fk_id_nivel_acesso" => $usuario->getNivelAcesso()
                )
            );
        }
    }

    public static function getEmail()
    {
        $conn = new Conexao();
        $result = $conn->select("SELECT tb_usuarios.email_usuario FROM tb_usuarios");

        $emails = [];
        foreach ($result as $data) {
            foreach ($data as $index => $email) {

                array_push($emails, $email);
            }
        }
        return $emails;
    }

    public function updatePerfil(UsuarioM $usuario)
    {
        $con = new Conexao();
        $con->query("Update tb_usuarios set nome_usuario = :nome,apelido_usuario=:apelido, email_usuario=:email, celular_usuario=:celular where id_usuario=:id",
            array(
                ":id" => $usuario->getIdUsuario(),
                ":nome" => $usuario->getNomeUsuario(),
                ":apelido" => $usuario->getApelidoUsuario(),
                ":email" => $usuario->getEmailUsuario(),
                ":celular" => $usuario->getCelularUsuario()
            )
        );
        Usuario::logout();
    }

    public static function listNiveis()
    {
        $con = new Conexao();
        return $con->select("select * from tb_nivel_acesso");
    }

    public static function ListarUsuarios()
    {
        $con = new Conexao();
        return $con->select("select * from tb_usuarios");
    }

    public static function statusBloquear(int $id)
    {
        $con = new Conexao();
        $con->query("UPDATE tb_usuarios set usuario_status='inativo' where id_usuario = :id", array(
            ":id" => $id
        ));
        $sucesso = "operacao efectuada com sucesso";
        Usuario::setFeedback($sucesso);
    }

    public static function statusDesbloquear(int $id)
    {
        $con = new Conexao();
        $con->query("UPDATE tb_usuarios set usuario_status='activo' where id_usuario = :id", array(
            ":id" => $id
        ));
        $sucesso = "operacao efectuada com sucesso";
        Usuario::setFeedback($sucesso);
    }

    public static function eliminar(UsuarioM $usuario)
    {
        $con = new Conexao();
        $con->query("UPDATE tb_usuarios set usuario_status='inativo' where id_usuario = :id", array(
            ":id" => $usuario->getIdUsuario()
        ));
    }

    public static function changeSenha(UsuarioM $usuario, string $senhaAntiga)
    {
        $con = new Conexao();
        $result = $con->select("select * from tb_usuarios where id_usuario = :id", array(
            ":id" => $usuario->getIdUsuario()
        ));
        if (count($result > 0)) {
            if (password_verify($senhaAntiga, $result[0]["senha_usuario"])) {
                $con->query("UPDATE tb_usuarios set senha_usuario=:senha where id_usuario = :id", array(
                    ":id" => $usuario->getIdUsuario(),
                    ":senha" => $usuario->getSenhaUsuario()
                ));
                $sucesso = "Troca de senha efectuada com sucesso";
                Usuario::setFeedback($sucesso);
            } else {
                $sucesso = "Nao foi possivel trocar a senha";
                Usuario::setErrorFeedback($sucesso);
            }
        } else {
            $sucesso = "Nao foi possivel trocar a senha";
            Usuario::setErrorFeedback($sucesso);
        }


    }

    public static function countUsers()
    {
        $conn = new Conexao();
        $result = $conn->select("SELECT COUNT(id_usuario) as total FROM `tb_usuarios` ");
        return $result[0];
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
        if (isset($_SESSION["usuario"]) and $_SESSION["usuario"] != null and $_SESSION["usuario"] != 0) {
            if ($tipoUsuario == 1 and $_SESSION["usuario"]["fk_id_nivel_acesso"] != 1) {
                header("Location: /pagina");
                exit();
            } elseif ($tipoUsuario == 2 and $_SESSION["usuario"]["fk_id_nivel_acesso"] != 2) {
                header("Location: /pagina");
                exit();
            } elseif ($tipoUsuario == 3 and $_SESSION["usuario"]["fk_id_nivel_acesso"] != 3) {
                header("Location: /pagina");
                exit();
            }
        } else {
            if ($tipoUsuario == 1  ) {
                header("Location: /admin/login");
                exit();
            } elseif ($tipoUsuario == 2) {
                header("Location: /gestor/login");
                exit();
            }elseif ($tipoUsuario == 3) {
            header("Location: /login");
                exit();
            }
        }
    }

    public static function setFeedback($msg)
    {
        $_SESSION["feedbacks"] = $msg;
    }

    public static function getFeedback()
    {
        $msg = (isset($_SESSION["feedbacks"]) && $_SESSION["feedbacks"]) ? $_SESSION["feedbacks"] : '';
        Usuario::clearFeedback();
        return $msg;
    }

    public static function clearFeedback()
    {
        $_SESSION["feedbacks"] = NULL;
    }

    public static function setErrorFeedback($msg)
    {
        $_SESSION["Errorfeedbacks"] = $msg;
    }

    public static function getErrorFeedback()
    {
        $msg = (isset($_SESSION["Errorfeedbacks"]) && $_SESSION["Errorfeedbacks"]) ? $_SESSION["Errorfeedbacks"] : '';
        Usuario::clearErrorFeedback();
        return $msg;
    }

    public static function clearErrorFeedback()
    {
        $_SESSION["Errorfeedbacks"] = NULL;
    }
}