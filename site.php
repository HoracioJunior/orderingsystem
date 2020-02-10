<?php
use models\pages\Page;
$app->get('/', function() {


    $page = new Page();
    $page->setTpl("index");

});

$app->get('/menu', function() {
    $page = new Page();
    $page->setTpl("menu");

});
$app->get('/carrinho', function() {
    $page = new Page();
    $page->setTpl("carrinho");

});
$app->get('/menu', function() {
    $page = new Page();
    $page->setTpl("menu");

});