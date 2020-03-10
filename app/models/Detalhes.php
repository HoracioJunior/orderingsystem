<?php


namespace models;


class Detalhes
{
    private $nome_usuario, $contacto_usuario,
        $contactoAtl, $endereco,
        $fk_pedido, $observacao, $tipo_pagamento;


    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }

    public function setNomeUsuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }


    public function getContactoUsuario()
    {
        return $this->contacto_usuario;
    }

    public function setContactoUsuario($contacto_usuario)
    {
        $this->contacto_usuario = $contacto_usuario;
    }


    public function getContactoAtl()
    {
        return $this->contactoAtl;
    }


    public function setContactoAtl($contactoAtl)
    {
        $this->contactoAtl = $contactoAtl;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    public function getFkPedido()
    {
        return $this->fk_pedido;
    }


    public function setFkPedido($fk_pedido)
    {
        $this->fk_pedido = $fk_pedido;
    }


    public function getObservacao()
    {
        return $this->observacao;
    }


    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }


    public function getTipoPagamento()
    {
        return $this->tipo_pagamento;
    }


    public function setTipoPagamento($tipo_pagamento)
    {
        $this->tipo_pagamento = $tipo_pagamento;
    }

}