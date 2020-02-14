<?php
use models\pages\PageCliente;
use controllers\Usuario as UsuarioC;
use models\Usuario as UsuarioM;


$app->get('/cliente', function() {
    UsuarioC::verficarSessao(3);
    $pageCliente = new PageCliente();
    $dados = $_SESSION["usuario"];
   $pageCliente->setTpl("index",array(
       "dados"=>$dados
    ));

});
$app->get('/cliente/minhas-ordens', function() {
    //UsuarioC::verficarSessao(3);
    $pageCliente = new PageCliente();
    $dados = $_SESSION["usuario"];
    $pageCliente->setTpl("minhas-ordens",array(
        "dados"=>$dados
    ));

});
$app->get('/cliente/meu-perfil', function() {
    //UsuarioC::verficarSessao(3);
    $pageCliente = new PageCliente();
    $dados = $_SESSION["usuario"];
    $pageCliente->setTpl("meu-perfil",array(
        "dados"=>$dados
    ));
});
$app->get('/cliente/mudar-senha', function() {
    //UsuarioC::verficarSessao(3);
    $dados = $_SESSION["usuario"];
    $pageCliente = new PageCliente();
    $pageCliente->setTpl("mudar-senha", array(
        "dados"=>$dados
    ));
});
$app->post('/cliente/mudar-senha', function() {
    //UsuarioC::verficarSessao(3);
    $userM = new UsuarioM();
    $userM ->setSenhaUsuario($_POST["senha_nova"]);
    $userM -> setIdUsuario($_POST["id_usuario"]);
    UsuarioC::changeSenha($userM,$_POST["senha_antiga"]);
    header("Location: /login");
    exit();

});
$app->get('/cliente/eliminar-conta', function() {
    //UsuarioC::verficarSessao(3);
    $dados = $_SESSION["usuario"];
    $pageCliente = new PageCliente();
    $pageCliente->setTpl("eliminar-conta",array(
        "dados"=>$dados
    ));
});
$app->post('/cliente/eliminar-conta', function() {
    //UsuarioC::verficarSessao(3);
    $UsuarioM = new UsuarioM();
    $UsuarioM->setIdUsuario($_POST["id_usuario"]);
    UsuarioC::eliminar($UsuarioM);
    header("Location: /login");
    exit();
});
$app->post('/cliente/perfil/editar-perfil', function() {
    //UsuarioC::verficarSessao(3);
    $UsuarioM = new UsuarioM();
    $UsuarioM->setNomeUsuario($_POST["nome_usuario"]);
    $UsuarioM->setApelidoUsuario($_POST["apelido_usuario"]);
    $UsuarioM->setEmailUsuario($_POST["email_usuario"]);
    $UsuarioM->setCelularUsuario($_POST["celular_usuario"]);
    $UsuarioM->setIdUsuario($_POST["id_usuario"]);
    $userC= new UsuarioC();
    $userC->updatePerfil($UsuarioM);
    header("Location: /login");
    exit();
});
$app->get('/cliente/perfil/editar-endereco', function() {
    //UsuarioC::verficarSessao(3);
    $dados = $_SESSION["usuario"];
    $pageCliente = new PageCliente();
    $pageCliente->setTpl("editar-endereco",array(
        "dados"=>$dados
    ));
});

$app->post('/cliente/usuario/cadastrar-usuario', function() {
    $userM = new UsuarioM();
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