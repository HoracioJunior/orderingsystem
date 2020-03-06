<?php


namespace controllers;
use models\Avaliar as AvaliarM;
use models\Conexao;

class Avaliar
{

    public function avaliar(AvaliarM $avaliar)
    {
        try {
            $conn = new Conexao();
            $conn->query("INSERT INTO tb_rating(qtd_estrelas,comentario,fk_id_produto,fk_id_usuario) values(:qtd,:comentario,:id_produto,:id_usuario)", array(
                "qtd" => $avaliar->getQtdEstrelas(),
                ":comentario" => $avaliar->getComentario(),
                ":id_produto" => $avaliar->getFkIdProduto(),
                ":id_usuario" => $avaliar->getFkIdUsuario()
            ));
        }catch (\PDOException $e){
            echo "ERRO: ".$e->getMessage()."\n";
            echo "LINHA: ".$e->getLine()."\n";
        }
    }
}