<?php


namespace controllers;


use models\Conexao;

class Cliente extends Usuario
{
    public static function iniciar_sessao(string $email, string $senha, $ipadd)
    {
        $con = new Conexao();

        $res = $con->select("SELECT * FROM tb_usuarios WHERE email_usuario = :email AND usuario_status ='activo' and fk_id_nivel_acesso = 3", array
            ("email" => $email)
        );
        if (count($res) > 0) {

            if (password_verify($senha, $res[0]["senha_usuario"])) {
                $_SESSION["usuario"] = $res[0];
                $id = $_SESSION["usuario"]["id_usuario"];
                $sessionId = mt_rand();
                $con->query("insert into tb_logs (ipaddress,fk_id_usuario) VALUES (:ip, :id)", array(
                    ":ip" => $ipadd,
                    ":id" => $id
                ));
                header("Location: /admin");
            } else {
                $msg = "Email ou senha do usuario forncedo estão errado";
                Usuario::setLoginErro($msg);
                header("Location: /login");
                exit();

            }
        } else {
            $msg = "Email ou senha do usuario forncedo estão errado";
            Usuario::setLoginErro($msg);
            header("Location: /login");
            exit();
        }
    }

    public static function setLoginErro($msg)
    {
        parent::setLoginErro($msg); // TODO: Change the autogenerated stub
    }

    public static function getLoginErro()
    {
        return parent::getLoginErro(); // TODO: Change the autogenerated stub
    }

    public static function clearLoginErro()
    {
        parent::clearLoginErro(); // TODO: Change the autogenerated stub
    }

}