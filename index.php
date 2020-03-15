<?php
session_start();
require_once "libs/autoload.php";

use Slim\Slim;

$app = new Slim();
$app->config('debug', true);

$app->notFound(function () use ($app) {
    $app->render("404.html");
});


    require_once("./rotas/site.php");
    require_once("./rotas/funcoes.php");
    require_once("./rotas/cliente.php");
    require_once("./rotas/checkout.php");
    require_once("./rotas/administrador.php");
    require_once("./rotas/gestor.php");
    require_once("./rotas/produto.php");


$app->run();








