<?php
session_start();
require_once "libs/autoload.php";
use Slim\Slim;
use models\pages\PageAdmin;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use controllers\Categoria as CategoriaC;
use models\Categoria as CategoriaM;
use controllers\Produto as ProdutoC;
use models\Produto as ProdutoM;



$app = new Slim();
$app->config('debug', true);


require_once ("site.php");

/*========================================Rotas de Usuarios=====================================*/
$app->get('/admin/login', function() {
    $pageAdmin = new PageAdmin([
        "header" => false,
        "footer" => false]);
    $pageAdmin->setTpl("login");
});
$app->post('/admin/login', function() {
    UsuarioC::iniciar_sessao($_POST["username"], $_POST["userpass"]);
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

    $pageAdmin = new PageAdmin();
    $nivelUsuario = UsuarioC::listNiveis();
    $pageAdmin->setTpl("cadastrar-usuario", array(
        "nivel"=>$nivelUsuario
    ));

});
$app->post('/admin/usuario/cadastrar-usuario', function() {
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
    $listaUsers = UsuarioC::ListarUsuarios();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("list-usuarios", array(
        "listaUsers"=>$listaUsers
    ));
});
$app->get('/admin/usuarios/list-usuarios/:id_usuario/bloquear', function($id_usuario) {
     UsuarioC::statusBloquear($id_usuario);
     header("Location: /admin/usuarios/list-usuarios");
        exit();
});
$app->get('/admin/usuarios/list-usuarios/:id_usuario/desbloquear', function($id_usuario) {
    UsuarioC::statusDesbloquear($id_usuario);
    header("Location: /admin/usuarios/list-usuarios");
    exit();
});
/*===========================================FIM DAS ROTAS USUARIOS========================================*/


/* ======================================inicio DAS Rotas de Categorias====================================*/
$app->get('/admin/menu/categorias', function() {
    $categoriaM = CategoriaC::selectCategorias();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("categorias", array(
        "categoria"=>$categoriaM
    ));
});

$app->post('/admin/menu/categorias/add', function() {

    $categoriaM = new CategoriaM();
    $categoriaM -> setNomeCategoria($_POST["nome_categoria"]);

    $categoriaC = new CategoriaC();
    $categoriaC ->cadastrar_categoria($categoriaM);
    header("Location: /admin/menu/categorias");
    exit();
});

$app->get('/admin/categoria/:idCategoria/eliminar-categoria', function($idCategoria) {
     CategoriaC::deleteById($idCategoria);
    header("Location: /admin/menu/categorias");
    exit();
});

$app->get('/admin/categoria/:idCategoria/editar-categoria', function($idCategoria) {
    $pageAdmin = new PageAdmin();

    $categoria =CategoriaC::selectCategoriasById($idCategoria);

    $pageAdmin->setTpl("editar-categoria", [
        "categoria"=>$categoria[0]
    ]);
});
$app->post('/admin/categoria/editar-categoria', function() {
    $categoriaM = new CategoriaM();
    $categoriaM ->setIdCategoria($_POST["id_categoria"]);
    $categoriaM ->setNomeCategoria($_POST["nome_categoria"]);
    $categoriaC = new CategoriaC();
    $categoriaC ->update($categoriaM);
    header("Location: /admin/menu/categorias");
    exit();
});
/* ===================================FIM DAS ROTAS CATEGORIAS========================================*/
$app->get('/admin/menu/cadastrar-item', function() {

    $categoria = CategoriaC::selectCategorias();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("cadastrar-item", array(
        "categoria"=>$categoria
    ));

});
$app->post('/admin/menu/cadastrar-item', function() {

    $produtoM = new ProdutoM();
    $media = new \controllers\Media();
    $produtoM->setNomeProduto($_POST["nome_produto"]);
    $produtoM->setDescricaoProduto($_POST["descricao_produto"]);
    $produtoM ->setPrecoProduto($_POST["preco_produto"]);
    $produtoM->setFkIdProdutoCtg($_POST["fk_categoria"]);
    $produtoC = new ProdutoC();
    $produtoC->cadastrar_produto($produtoM);
    header("Location: /admin/menu/categorias");
    exit();

});
$app->get('/admin/menu/menu-itens', function() {

    $produto = ProdutoC::listProduto();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("menu", array(
        "produto"=>$produto
    ));

});

$app->run();







