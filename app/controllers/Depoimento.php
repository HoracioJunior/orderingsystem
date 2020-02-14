<?php


namespace controllers;
use models\Depoimento as DepoimentoM;
use models\Conexao;

class Depoimento
{
    public function salvar(DepoimentoM $depoimento)
    {
        $con = new Conexao();
        $con->query("INSERT INTO tb_testemunho(mensagem_testemunho,fk_id_usuario) VALUES(:depoimento,:fk_id)", array(
            ":depoimento"=>$depoimento->getDepomento(),
            ":fk_id"=>$depoimento->getFkUsuario()
        ));

    }
    public static function listarDepoimentos()
    {
        $con = new Conexao();
        return $con->select("SELECT tb_usuarios.nome_usuario, tb_testemunho.mensagem_testemunho, tb_testemunho.data FROM tb_testemunho INNER JOIN tb_usuarios ON tb_usuarios.id_usuario=tb_testemunho.fk_id_usuario");
    }
}