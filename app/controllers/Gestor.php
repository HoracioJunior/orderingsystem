<?php


namespace controllers;


use models\Conexao;

class Gestor extends Usuario
{
    public static function iniciar_sessao(string $email, string $senha, $ipadd)
    {
        $con = new Conexao();

        $res = $con->select("SELECT * FROM tb_usuarios 
                            WHERE email_usuario = :email 
                            AND usuario_status ='activo' 
                            AND fk_id_nivel_acesso = 2", array
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
                header("Location: /gestor");
            } else {
                $msg = "Email ou senha do usuario forncedo estão errado";
                Usuario::setLoginErro($msg);
                header("Location: /gestor/login");
                exit();

            }
        } else {
            $msg = "Email ou senha do usuario forncedo estão errado";
            Usuario::setLoginErro($msg);
            header("Location: /gestor/login");
            exit();
        }
    }




}