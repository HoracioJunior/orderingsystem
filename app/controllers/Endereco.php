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

        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
}