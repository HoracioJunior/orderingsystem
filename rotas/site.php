<?php
use models\pages\Page;
use controllers\Usuario as UsuarioC;
use models\Usuario as UsuarioM;
use controllers\Produto as ProdutoC;
use models\Depoimento as DepoimentoM;
use controllers\Depoimento as DepoimentoC;
$app->get('/', function() {
    $page = new Page();
    $produto = ProdutoC::listProduto();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $page->setTpl("index",array(
        "produto"=>$produto,
        "depoimento"=>$testemunhos
    ));

});
$app->get('/login', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("login");

});
$app->get('/pagina', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("denied");

});
$app->post('/login', function() {
    UsuarioC::iniciar_sessao($_POST["username"], $_POST["userpass"]);
    header("Location: /");
    exit;
});

$app->get('/logout', function() {
    UsuarioC::logout();
    header("Location: /login");
    exit();
});

$app->get('/menu', function() {
    $page = new Page();
    $produto = ProdutoC::listProduto();
    $page->setTpl("menu", array(
        "produto"=>$produto
    ));

});
$app->get('/carrinho', function() {
    $page = new Page();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $page->setTpl("carrinho",array(
        "depoimento"=>$testemunhos
    ));

});
$app->get('/menu', function() {
    $page = new Page();
    $page->setTpl("menu");

});
$app->get('/contacto', function() {
    $page = new Page();
    $page->setTpl("contacto");

});
$app->get('/depoimentos', function() {
    UsuarioC::verficarSessao(3);
    $page = new Page();
    $dados = $_SESSION["usuario"];
    $testemunhos = DepoimentoC::listarDepoimentos();
    $page->setTpl("depoimentos", array(
        "dados"=>$dados,
        "depoimento"=>$testemunhos
    ));

});
$app->post('/depoimentos', function() {
    UsuarioC::verficarSessao(3);
    $depoimentoM= new DepoimentoM();
    $depoimentoM->setFkUsuario($_POST["id_usuario"]);
    $depoimentoM->setDepomento($_POST["depoimento"]);

    $dc = new DepoimentoC();
    $dc->salvar($depoimentoM);
    //header("location: /depoimentos");
    //exit();
});