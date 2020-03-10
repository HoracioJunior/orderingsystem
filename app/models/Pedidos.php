<?php


namespace models;


class Pedidos
{
    private $id_pedido,$fk_id_usuario,$fk_id_carrinho, $total,$status;



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



    public function getFkIdCarrinho()
    {
        return $this->fk_id_carrinho;
    }



    public function setFkIdCarrinho($fk_id_carrinho)
    {
        $this->fk_id_carrinho =(int)$fk_id_carrinho;
    }



    public function getTotal()
    {
        return $this->total;
    }


    public function setTotal($total)
    {
        $this->total = (float)$total;
    }

    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status =(string)$status;
    }


}