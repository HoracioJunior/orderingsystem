<?php


namespace models\pages;


class PageGestor extends Page
{
    public function __construct($opts = array(), $tpl_dir = "/app/views/gestor/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}