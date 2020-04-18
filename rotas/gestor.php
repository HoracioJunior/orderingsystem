<?php
use models\pages\PageGestor;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use controllers\Pedidos as PedidoC;
use models\Pedidos as PedidosM;
use  controllers\Gestor;
use controllers\Helper;
use Rain\Tpl;


$app->get('/gestor/login', function() {
    $pageGestor = new PageGestor([
        "header" => false,
        "footer" => false]);
    $pageGestor->setTpl("login",array(
        "erroLogin" => UsuarioC::getLoginErro()
    ));
});
$app->post('/gestor/login', function() {
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
    Gestor::iniciar_sessao($_POST["username"], $_POST["userpass"],$ipaddress);
    header("Location: /gestor");
    exit;
});

$app->get('/gestor/logout', function() {
    UsuarioC::logout();
    header("Location: /gestor/login");
    exit();
});

$app->get('/gestor', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $pedido = new PedidoC();
    $helper = new Helper();
    $pageGestor->setTpl("index",array(
        "usuario"=>$opt= $_SESSION["usuario"],
        "pedido"=>$pedido->novosPedidos(),
        "clientes"=>$helper->Clientes(),
        "orders"=>$helper->newOrders()
    ));
});

$app->get('/gestor/minha-conta', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("perfil", array(
        "dados"=>$dados,
        "feedbacks"=>UsuarioC::getFeedback(),
        "errorfeedbacks"=>UsuarioC::getErrorFeedback()
    ));
});
$app->post('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(2);
    $UsuarioM = new UsuarioM();
    $UsuarioM->setNomeUsuario($_POST["nome_usuario"]);
    $UsuarioM->setApelidoUsuario($_POST["apelido_usuario"]);
    $UsuarioM->setEmailUsuario($_POST["email_usuario"]);
    $UsuarioM->setCelularUsuario($_POST["celular_usuario"]);
    $UsuarioM->setIdUsuario($_POST["id_usuario"]);
    $userC= new UsuarioC();
    $userC->updatePerfil($UsuarioM);
    header("Location: /gestor/perfil/editar-perfil");
    exit();
});

$app->post('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(2);
    $userM = new UsuarioM();
    $userM ->setSenhaUsuario($_POST["senha_nova"]);
    $userM -> setIdUsuario($_POST["id_usuario"]);
    UsuarioC::changeSenha($userM,$_POST["senha_antiga"]);
    header("Location: /gestor/perfil/mudar-senha");
    exit();
});

$app->post('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(2);
    $UsuarioM = new UsuarioM();
    $UsuarioM->setNomeUsuario($_POST["nome_usuario"]);
    $UsuarioM->setApelidoUsuario($_POST["apelido_usuario"]);
    $UsuarioM->setEmailUsuario($_POST["email_usuario"]);
    $UsuarioM->setCelularUsuario($_POST["celular_usuario"]);
    $UsuarioM->setIdUsuario($_POST["id_usuario"]);
    $userC= new UsuarioC();
    $userC->updatePerfil($UsuarioM);
    header("Location: /gestor/perfil/editar-perfil");
    exit();
});

$app->post('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(2);
    $userM = new UsuarioM();
    $userM ->setSenhaUsuario($_POST["senha_nova"]);
    $userM -> setIdUsuario($_POST["id_usuario"]);
    UsuarioC::changeSenha($userM,$_POST["senha_antiga"]);
    header("Location: /gestor/perfil/mudar-senha");
    exit();
});
/*$app->get('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $nivelUsuario = UsuarioC::listNiveis();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("editar-perfil", array(
        "dados"=>$dados
    ));
});*/
/*$app->get('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("mudar-senha", array(
        "dados"=>$dados,
        "feedbacks"=>UsuarioC::getFeedback(),
        "errorfeedbacks"=>UsuarioC::getErrorFeedback()
    ));

});*/
/*$app->get('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("mudar-senha", array(
        "dados"=>$dados,
        "feedbacks"=>UsuarioC::getFeedback(),
        "errorfeedbacks"=>UsuarioC::getErrorFeedback()
    ));

});*/
/*$app->get('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $nivelUsuario = UsuarioC::listNiveis();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("editar-perfil", array(
        "dados"=>$dados
    ));

});*/

$app->get('/gestor/pedidos/novos-pedidos', function() {
    UsuarioC::verficarSessao(2);
    $page = new PageGestor();
    $pedido = new PedidoC();
    $resultado = $pedido->novosPedidos();
    $page->setTpl("novos-pedidos",array(
        "pedido"=>$resultado
    ));
});

$app->get('/gestor/fechar-e-abrir-sistema', function() {
    UsuarioC::verficarSessao(2);
    $page = new PageGestor();
    $page->setTpl("openClose");
});
$app->get('/gestor/relatorio/gerar-relatorio', function() {
    UsuarioC::verficarSessao(2);
    $page = new PageGestor();
    $page->setTpl("relatorio");
});
$app->post('/gestor/relatorio/gerar', function() {
    UsuarioC::verficarSessao(2);
    $tipo = $_POST["tipo"];
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];

    var_dump($tipo);
    var_dump($inicio);
    var_dump($fim);

    exit();
});
