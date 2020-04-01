<?php


namespace controllers;
use models\Conexao;
use models\Deliver as DeliverM;

class Deliver
{
    public  function cadastrar(DeliverM $deliver)
    {
       $conn = new Conexao();
        try {
            $pastaTemporaria = $deliver->getAlvaraEmpresa()["tmp_name"];
            $permitido = array("jpg","png","pdf","doc");
            $extensao =strtolower(pathinfo($deliver->getAlvaraEmpresa()["name"],PATHINFO_EXTENSION));
            $directorio = "app/uploads/alvara/";
            $newName= uniqid().".$extensao";
            if(in_array($extensao,$permitido)){
                move_uploaded_file($pastaTemporaria,$directorio.$newName);
                $conn->query("INSERT INTO tb_deliver(nome_empresa, endereco_empresa, email_empresa, contacto_empresa, contacto_alt, alvara_empresa) 
                    VALUES (:nome,:endereco,:email,:contacto,:contacto_alt,:alvara)",array(
                    ":nome"=>$deliver->getNomeEmpresa(),
                    ":endereco"=>$deliver->getEnderecoEmpresa(),
                    ":email"=>$deliver->getEmailEmpresa(),
                    ":contacto"=>$deliver->getContactoEmpresa(),
                    ":contacto_alt"=>$deliver->getContactoAlt(),
                    ":alvara"=>$newName
                ));
                $email = $deliver->getEmailAcesso();
                $senha= $deliver->getSenhaAcesso();
                $fk_empresa=$conn->getLastId();
                Deliver::cadastroAcesso($email,$senha,$fk_empresa);
                header("Location: /cadastro-deliver/confirmacao");
            }else{
                $erro="Nao foi possivela Efectuar o Cadastro!Tente Novamente";
                Deliver::setErro($erro);
            }

        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public  static  function cadastroAcesso($email,$senha,$fk_empresa)
    {
        try {
            $conn = new Conexao();
            $conn->query("INSERT INTO tb_deliveracess(email_acesso, senha_acesso, fk_deliver_empresa) 
                        VALUES(:email,:senha,:fk)",array(
                            ":email"=>$email,
                            ":senha"=>$senha,
                            ":fk"=>$fk_empresa
            ));
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public static function setErro($msg)
    {

        $_SESSION["erroProduto"] = $msg;

    }

    public static function getErro()
    {

        $msg = (isset($_SESSION["erroProduto"]) && $_SESSION["erroProduto"]) ? $_SESSION["erroProduto"] : '';

        Produto::clearErro();

        return $msg;

    }

    public static function clearErro()
    {

        $_SESSION["erroProduto"] = NULL;

    }
}