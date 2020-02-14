<?php
namespace models\pages;

class PageCliente extends Page
{
    public function __construct($opts = array(), $tpl_dir = "/app/views/cliente/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}