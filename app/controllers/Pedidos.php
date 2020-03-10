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
            $id=$conn->getLastId();
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


}