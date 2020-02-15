<?php
use models\pages\PageAdmin;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use Rain\Tpl;


/*========================================Rotas de Usuarios=====================================*/
$app->get('/admin/login', function() {
    $pageAdmin = new PageAdmin([
        "header" => false,
        "footer" => false]);
        $pageAdmin->setTpl("login");
});
$app->post('/admin/login', function() {
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
    UsuarioC::iniciar_sessao($_POST["username"], $_POST["userpass"],$ipaddress);
    header("Location: /admin");
    exit;

});

$app->get('/admin/logout', function() {
    UsuarioC::logout();
    header("Location: /admin/login");
    exit();
});
$app->get('/admin', function() {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("index",array(
        "usuario"=>$opt= $_SESSION["usuario"]
    ));

});

$app->get('/admin/usuario/cadastrar-usuario', function() {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $nivelUsuario = UsuarioC::listNiveis();
    $pageAdmin->setTpl("cadastrar-usuario", array(
        "nivel"=>$nivelUsuario
    ));

});
$app->post('/admin/usuario/cadastrar-usuario', function() {
    UsuarioC::verficarSessao(1);
    $userM = new UsuarioM();
    $userM ->setNomeUsuario($_POST["nome_usuario"]);
    $userM ->setApelidoUsuario($_POST["apelido_usuario"]);
    $userM ->setEmailUsuario($_POST["email_usuario"]);
    $userM ->setSenhaUsuario($_POST["senha_usuario"]);
    $userM -> setCelularUsuario($_POST["celular_usuario"]);
    $userM ->setNivelAcesso($_POST["fk_nivel_acesso"]);
    // var_dump($userM);
    $UserC = new UsuarioC();
    $UserC->cadastrar_usuario($userM);
    header("Location: /admin");
    exit();

});
$app->get('/admin/usuarios/list-usuarios', function() {
    UsuarioC::verficarSessao(1);
    $listaUsers = UsuarioC::ListarUsuarios();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("list-usuarios", array(
        "listaUsers"=>$listaUsers
    ));
});
$app->get('/admin/usuarios/list-usuarios/:id_usuario/bloquear', function($id_usuario) {
    UsuarioC::verficarSessao(1);
    UsuarioC::statusBloquear($id_usuario);
    header("Location: /admin/usuarios/list-usuarios");
    exit();
});
$app->get('/admin/usuarios/list-usuarios/:id_usuario/desbloquear', function($id_usuario) {
    UsuarioC::verficarSessao(1);
    UsuarioC::statusDesbloquear($id_usuario);
    header("Location: /admin/usuarios/list-usuarios");
    exit();
});

$app->get('/admin/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $nivelUsuario = UsuarioC::listNiveis();
    $dados = $_SESSION["usuario"];
    $pageAdmin->setTpl("editar-perfil", array(
        "dados"=>$dados
    ));

});
$app->post('/admin/perfil/editar-perfil', function() {
    UsuarioC::verficarSessao(1);
    $UsuarioM = new UsuarioM();
    $UsuarioM->setNomeUsuario($_POST["nome_usuario"]);
    $UsuarioM->setApelidoUsuario($_POST["apelido_usuario"]);
    $UsuarioM->setEmailUsuario($_POST["email_usuario"]);
    $UsuarioM->setCelularUsuario($_POST["celular_usuario"]);
    $UsuarioM->setIdUsuario($_POST["id_usuario"]);
    $userC= new UsuarioC();
    $userC->updatePerfil($UsuarioM);
    header("Location: /admin/perfil/editar-perfil");
    exit();

});


$app->get('/admin/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $dados = $_SESSION["usuario"];
    $pageAdmin->setTpl("mudar-senha", array(
        "dados"=>$dados
    ));

});
$app->post('/admin/perfil/mudar-senha', function() {
    UsuarioC::verficarSessao(1);
    $userM = new UsuarioM();
    $userM ->setSenhaUsuario($_POST["senha_nova"]);
    $userM -> setIdUsuario($_POST["id_usuario"]);
    UsuarioC::changeSenha($userM,$_POST["senha_antiga"]);
    header("Location: /admin");
    exit();

});
/*===========================================FIM DAS ROTAS USUARIOS========================================*/

