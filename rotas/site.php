<?php
use models\pages\Page;
use controllers\Usuario as UsuarioC;
use models\Usuario as UsuarioM;
use controllers\Produto as ProdutoC;
use models\Depoimento as DepoimentoM;
use controllers\Depoimento as DepoimentoC;
Use controllers\Cliente;

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
    $page->setTpl("login", array(
        "erroLogin"=>Cliente::getLoginErro()
    ));

});
$app->get('/pagina', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("denied");

});
$app->post('/login', function() {
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    $ipaddress= get_client_ip();

        Cliente::iniciar_sessao($_POST["username"], $_POST["userpass"],$ipaddress);
        var_dump(  Cliente::iniciar_sessao($_POST["username"], $_POST["userpass"],$ipaddress));
    header("Location: /");
    exit;
});

$app->get('/logout', function() {
    UsuarioC::logout();
    exit();
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
$app->get('/cadastrar-usuario', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("cadastrar", array(
            "emailError" =>UsuarioC::getExiste()
    ));
});

$app->post('/cadastrar-usuario', function() {
    $userM = new UsuarioM();

    /*if(!isset($_POST["nome_usuario"]) || $_POST["nome_usuario"] =''){
        UsuarioC::setErrorRegister("Preencha o campo nome do usuario");
        header("Location: /login");
        exit();
    }*/
    $userM ->setNomeUsuario($_POST["nome_usuario"]);
    $userM ->setApelidoUsuario($_POST["apelido_usuario"]);
    $userM ->setEmailUsuario($_POST["email_usuario"]);
    $userM ->setSenhaUsuario($_POST["senha_usuario"]);
    $userM -> setCelularUsuario($_POST["celular_usuario"]);
    $userM ->setNivelAcesso($_POST["fk_nivel_acesso"]);
    $UserC = new UsuarioC();
    $UserC->cadastrar_usuario($userM);
    header("Location: /login");
    exit();

});

$app->get('/recuperar-senha', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("recuperar-senha");

});
$app->get('/token-check', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("token-check");

});