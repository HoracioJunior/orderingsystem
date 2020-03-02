<?php


namespace controllers;
use models\Conexao;
use models\Endereco as EnderecoM;

class Endereco
{
    public function insert(EnderecoM $endereco)
    {
        $conn = new Conexao();
        try {
    $conn->query("INSERT INTO tb_enderecos(endereco, fk_id_usuario) VALUES(:endereco,:id_usuario)", array(
        ":endereco"=>$endereco->getEndereco(),
        ":id_usuario"=>$endereco->getFkIdUsuario()
    ));
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function update($idEndereço)
    {
        $conn = new Conexao();
        try {

        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function delete($idEndereço)
    {
        $conn = new Conexao();
        try {

        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }

    public function listar($idUsuario)
    {
        $conn = new Conexao();
        try {
           $result= $conn->select("SELECT * FROM tb_enderecos WHERE fk_id_usuario=:id_usuario", array(
               ":id_usuario"=>$idUsuario
            ));
           return $result[0]["endereco"];
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
}