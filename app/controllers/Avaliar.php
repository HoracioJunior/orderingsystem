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
        public function rating($id){
        $conn = new Conexao();
        $resultado = $conn ->select("SELECT fk_id_produto,COUNT(fk_id_produto) as qtd, FORMAT( AVG(qtd_estrelas),1) as media FROM tb_rating INNER JOIN tb_produto on tb_produto.id_produto = tb_rating.fk_id_produto WHERE fk_id_produto=:id GROUP BY fk_id_produto",
            array(":id"=>$id)
        );
        return $resultado;
    }
}