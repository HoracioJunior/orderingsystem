<?php


namespace models\pages;
use Rain\Tpl;

class Page
{
    private $tpl;
    private $options = [];
    private $defaults = [
        "header"=>true,
        "footer"=>true,
        "data"=>[]
    ];

    public function __construct($opts = array(), $tpl_dir="/app/views/")
    {

        $this->options = array_merge($this->defaults, $opts);

        $config = array(
            "base_url"      => null,
            "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'].$tpl_dir,
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT']."/app/views-cache/",
            "debug"         => false
        );

        Tpl::configure( $config );

        $this->tpl = new Tpl();

        if ($this->options['data']) $this->setData($this->options['data']);

        if ($this->options['header'] === true)
        {
            if(isset($_SESSION["usuario"])){
                $dados = $_SESSION["usuario"];
                $this->tpl->assign("dados",$dados);
            }
            $this->tpl->draw("header", false);
        }

    }

    public function __destruct()
    {

        if ($this->options['footer'] === true) $this->tpl->draw("footer", false);

    }

    private function setData($data = array())
    {

        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }

    }


    public function setTpl($tplname, $data = array(), $returnHTML = false)
    {

        $this->setData($data);

        return $this->tpl->draw($tplname, $returnHTML);

    }

}