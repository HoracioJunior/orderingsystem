<?php


namespace models;


class Depoimento
{
 private $id_depoimento,
    $depomento,$fk_usuario;

    public function getIdDepoimento()
    {
        return $this->id_depoimento;
    }

    public function setIdDepoimento($id_depoimento)
    {
        $this->id_depoimento = $id_depoimento;
    }

    public function getDepomento()
    {
        return $this->depomento;
    }


    public function setDepomento($depomento)
    {
        $this->depomento = $depomento;
    }


    public function getFkUsuario()
    {
        return $this->fk_usuario;
    }

    public function setFkUsuario($fk_usuario)
    {
        $this->fk_usuario = $fk_usuario;
    }


}