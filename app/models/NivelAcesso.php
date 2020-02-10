<?php


namespace models;


class NivelAcesso
{
    private $id_nivel, $nome_nivel;

    public function getIdNivel()
    {
        return $this->id_nivel;
    }

    public function setIdNivel($id_nivel)
    {
        $this->id_nivel = $id_nivel;

        switch ($id_nivel) {
            case 1:
                $this->setNomeNivel("Administrador");
                break;
            case 2:
                $this->setNomeNivel("Gestor");
                break;
            case 3:
                $this->setNomeNivel("Cliente");
                break;
        }
    }

    public function getNomeNivel()
    {
        return $this->nome_nivel;
    }

    private function setNomeNivel($nome_nivel)
    {
        $this->nome_nivel = $nome_nivel;
    }


}