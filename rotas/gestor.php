<?php
use models\pages\PageGestor;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use  controllers\Gestor;
use Rain\Tpl;


/*========================================Rotas de Usuarios=====================================*/
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
    $pageGestor->setTpl("index",array(
        "usuario"=>$opt= $_SESSION["usuario"],
        "totalUsers"=>UsuarioC::countUsers()
    ));



});
$app->get('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $nivelUsuario = UsuarioC::listNiveis();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("editar-perfil", array(
        "dados"=>$dados
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


$app->get('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("mudar-senha", array(
        "dados"=>$dados,
        "feedbacks"=>UsuarioC::getFeedback(),
        "errorfeedbacks"=>UsuarioC::getErrorFeedback()
    ));

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

$app->get('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(1);
    $pageGestor = new PageGestor();
    $nivelUsuario = UsuarioC::listNiveis();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("editar-perfil", array(
        "dados"=>$dados
    ));

});
$app->post('/gestor/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(1);
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


$app->get('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(1);
    $pageGestor = new PageGestor();
    $dados = $_SESSION["usuario"];
    $pageGestor->setTpl("mudar-senha", array(
        "dados"=>$dados,
        "feedbacks"=>UsuarioC::getFeedback(),
        "errorfeedbacks"=>UsuarioC::getErrorFeedback()
    ));

});
$app->post('/gestor/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(1);
    $userM = new UsuarioM();
    $userM ->setSenhaUsuario($_POST["senha_nova"]);
    $userM -> setIdUsuario($_POST["id_usuario"]);
    UsuarioC::changeSenha($userM,$_POST["senha_antiga"]);
    header("Location: /gestor/perfil/mudar-senha");
    exit();

});
/*===========================================FIM DAS ROTAS USUARIOS========================================*/


