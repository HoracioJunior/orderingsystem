<?php


namespace controllers;
use models\Avaliar as AvaliarM;
use models\Conexao;

class Avaliar
{

    public function avaliar(AvaliarM $avaliar)
    {
        $conn = new Conexao();
        $conn->query("INSERT INTO tb_rating(qtd_estrelas,comentario,fk_id_produto) values (:qtd,:comentario,id_produto)",array(
            "qtd"=>$avaliar->getQtdEstrelas(),
            ":comentario"=>$avaliar->getComentario(),
            ":id_produto"=>$avaliar->getFkIdProduto()
        ));
    }
}