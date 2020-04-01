<?php
use models\pages\Page;
use models\Deliver as DeliverM;
use controllers\Deliver as DeliverC;



$app->get('/cadastrar-deliver', function () {
    $page = new Page();
    $page->setTpl("cadastrar-deliver");

});
$app->get('/cadastrar-deliver/confirmacao', function () {
    $page = new Page();
    $page->setTpl("confirmacao");

});

$app->post('/cadastrar-deliver', function () {
    $alvara = $_FILES["alvara_empresa"];
    $modelDeliver = new DeliverM();

    $modelDeliver ->setNomeEmpresa($_POST["nome_empresa"]);
    $modelDeliver ->setEnderecoEmpresa($_POST["endereco_empresa"]);
    $modelDeliver ->setEmailEmpresa($_POST["email_empresa"]);
    $modelDeliver ->setContactoEmpresa($_POST["contacto_empresa"]);
    $modelDeliver ->setContactoAlt($_POST["contacto_alt"]);
    $modelDeliver ->setAlvaraEmpresa($alvara);
 //Acesso
    $modelDeliver ->setEmailAcesso($_POST["acesso_email"]);
    $modelDeliver ->setSenhaAcesso($_POST["acesso_senha"]);
    $ctrlDeliver= new DeliverC();
    $ctrlDeliver->cadastrar($modelDeliver);

});
