<?php


namespace controllers;

use models\Conexao;
use models\Detalhes;
use models\Pedidos as PedidosM;

class Pedidos
{
    const ABERTO = "aberto";
    const PAGO = "pago";

    public function adicionar(PedidosM $pedido, Detalhes $modelo)
    {
        try {
            $conn = new Conexao();

            $conn->query("INSERT INTO tb_pedido(fk_id_carrinho, fk_id_usuario, total_pedido,status_pedido) VALUES (:cartProdutos,:id_usuario,:total,:status)",
                array(
                    ":cartProdutos" => $pedido->getFkIdCarrinho(),
                    ":id_usuario" => $pedido->getFkIdUsuario(),
                    ":total" => $pedido->getTotal(),
                    ":status" => $pedido->getStatus()
                ));
            $id = $conn->getLastId();
            $conn->query("INSERT INTO 
            tb_detalhespedido(nome_usuario, celular, 
                      celular_alternativo, endereco, 
                      observacao, tipo_pagamento, fk_id_pedido) 
                      VALUES (:nome,:celular, :alternativo,:endereco,:observacao,:tipoPagamento,:fk_pedido)",
                array(
                    ":nome" => $modelo->getNomeUsuario(),
                    ":celular" => $modelo->getContactoUsuario(),
                    ":alternativo" => $modelo->getContactoAtl(),
                    ":endereco" => $modelo->getEndereco(),
                    ":observacao" => $modelo->getObservacao(),
                    ":tipoPagamento" => $modelo->getTipoPagamento(),
                    ":fk_pedido" => $id,
                ));

        } catch (\PDOException $exception) {
            echo "ERRO: " . $exception->getMessage() . "\n";
            echo "LINHA: " . $exception->getLine() . "\n";
        }
    }

    public function listarPedidos($id_usuario)
    {
        try {
            $conn = new Conexao();
            $result = $conn->select("
            SELECT c.id_produto,COUNT(*) as qtd, c.nome_produto, c.preco_produto,a.id_pedidos, a.total_pedido, a.data_pedido,a.status_pedido
            from tb_pedido a INNER JOIN tb_carrinhoprodutos b ON b.fk_id_carrinho = a.fk_id_carrinho INNER JOIN tb_produto c 
            ON c.id_produto = b.fk_id_produto 
            WHERE a.fk_id_usuario = :id_usuario GROUP BY a.id_pedidos, a.total_pedido,a.data_pedido 
            ", array(
                ":id_usuario"=>$id_usuario
            ));
            return $result;
        }catch (\PDOException $exception){
            echo "ERRO: " . $exception->getMessage() . "\n";
            echo "LINHA: " . $exception->getLine() . "\n";
        }
    }
    public function novosPedidos()
    {
        $status = (string)"pago";
        try {
            $conn = new Conexao();
            $result = $conn->select("SELECT * FROM tb_pedido a INNER JOIN tb_usuarios b ON b.id_usuario = a.fk_id_usuario WHERE a.status_pedido = :status ",
                array(
                ":status"=>$status
                    ));
            return $result;
        }catch (\PDOException $exception){
            echo "ERRO: " . $exception->getMessage() . "\n";
            echo "LINHA: " . $exception->getLine() . "\n";
        }
    }

    public function detalhesPedido($id_pedido)
    {
        try {
            $conn = new Conexao();
            $result = $conn->select("
            SELECT b.total_pedido,b.data_pedido,a.nome_usuario,a.celular,a.celular_alternativo,a.endereco, 
                   a.observacao,a.tipo_pagamento from tb_detalhespedido a INNER JOIN 
                    tb_pedido b ON b.id_pedidos = a.fk_id_pedido where fk_id_pedido= :id_pedido 
            ", array(
                ":id_pedido"=>$id_pedido
            ));
            return $result;
        }catch (\PDOException $exception){
            echo "ERRO: " . $exception->getMessage() . "\n";
            echo "LINHA: " . $exception->getLine() . "\n";
        }
    }
    /*
     *SELECT c.id_produto COUNT(*) as qtd, c.nome_produto, c.preco_produto from tb_pedido a
INNER JOIN tb_carrinhoprodutos b ON b.fk_id_carrinho = a.fk_id_carrinho
INNER JOIN tb_produto c ON c.id_produto = b.fk_id_produto
WHERE a.fk_id_usuario = 2
GROUP BY c.id_produto


    SELECT b.total_pedido,b.data_pedido,a.nome_usuario,a.celular,a.celular_alternativo,a.endereco, a.observacao,a.tipo_pagamento from tb_detalhespedido a INNER JOIN tb_pedido b ON b.id_pedidos = a.fk_id_pedido where fk_id_pedido=2
     * */
}