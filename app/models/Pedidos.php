<?php


namespace models;


class Pedidos
{
    private $id_pedido,$fk_id_usuario,$fk_id_carrinhoProdutos, $total;



    public function getIdPedido()
    {
        return $this->id_pedido;
    }



    public function setIdPedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }



    public function getFkIdUsuario()
    {
        return $this->fk_id_usuario;
    }



    public function setFkIdUsuario($fk_id_usuario)
    {
        $this->fk_id_usuario = $fk_id_usuario;
    }



    public function getFkIdCarrinhoProdutos()
    {
        return $this->fk_id_carrinhoProdutos;
    }



    public function setFkIdCarrinhoProdutos($fk_id_carrinhoProdutos)
    {
        $this->fk_id_carrinhoProdutos = $fk_id_carrinhoProdutos;
    }



    public function getTotal()
    {
        return $this->total;
    }


    public function setTotal($total)
    {
        $this->total = $total;
    }


}