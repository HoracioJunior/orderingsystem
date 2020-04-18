<?php


namespace controllers;


use models\Conexao;

class Helper
{


    public function stutus()
    {
        try {
            $con = new Conexao();
            $result = $con->select("select * from tb_manutencao");
            return $result[0]["status"];

        } catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
    public function updateStutus(int $status)
    {
        try {
            $con = new Conexao();
             $con->query("UPDATE tb_manutencao SET status = :status WHERE id_manutencao= 1", array(
                ":status"=>$status
            ));

        } catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public  function AllUsers()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_usuario) as total FROM tb_usuarios");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
    public  function Clientes()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_usuario) as total FROM tb_usuarios where fk_id_nivel_acesso = 3");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function usersOnline()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_usuario) as total FROM tb_usuarios");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function delivers()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_deliver) as total FROM tb_deliver");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function acess()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_logs) as total FROM tb_logs");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
    public function newOrders()
    {
        $conn = new Conexao();
        try {
            $result = $conn->select("SELECT COUNT(id_pedidos) as total FROM tb_pedido where status_pedido = 'pago'");
            return $result;
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

}