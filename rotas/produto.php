<?php
use models\pages\PageAdmin;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use controllers\Categoria as CategoriaC;
use models\Categoria as CategoriaM;
use controllers\Produto as ProdutoC;
use models\Produto as ProdutoM;
use Rain\Tpl;

/* ======================================inicio DAS Rotas de Categorias====================================*/
$app->get('/admin/menu/categorias', function() {
    UsuarioC::verficarSessao(1);
    $categoriaM = CategoriaC::selectCategorias();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("categorias", array(
        "categoria"=>$categoriaM
    ));
});

$app->post('/admin/menu/categorias/add', function() {
    UsuarioC::verficarSessao(1);
    $categoriaM = new CategoriaM();
    $categoriaM -> setNomeCategoria($_POST["nome_categoria"]);

    $categoriaC = new CategoriaC();
    $categoriaC ->cadastrar_categoria($categoriaM);
    header("Location: /admin/menu/categorias");
    exit();
});

$app->get('/admin/categoria/:idCategoria/eliminar-categoria', function($idCategoria) {
    UsuarioC::verficarSessao(1);
    CategoriaC::deleteById($idCategoria);
    header("Location: /admin/menu/categorias");
    exit();
});

$app->get('/admin/categoria/:idCategoria/editar-categoria', function($idCategoria) {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $categoria =CategoriaC::selectCategoriasById($idCategoria);

    $pageAdmin->setTpl("editar-categoria", [
        "categoria"=>$categoria[0]
    ]);
});
$app->post('/admin/categoria/editar-categoria', function() {
    UsuarioC::verficarSessao(1);
    $categoriaM = new CategoriaM();
    $categoriaM ->setIdCategoria($_POST["id_categoria"]);
    $categoriaM ->setNomeCategoria($_POST["nome_categoria"]);
    $categoriaC = new CategoriaC();
    $categoriaC ->update($categoriaM);
    header("Location: /admin/menu/categorias");
    exit();
});
/* ===================================FIM DAS ROTAS CATEGORIAS========================================*/

/* ===================================INICIO DAS ROTAS Produto========================================*/
$app->get('/admin/menu/cadastrar-item', function() {
    UsuarioC::verficarSessao(1);
    $categoria = CategoriaC::selectCategorias();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("cadastrar-item", array(
        "categoria"=>$categoria
    ));

});
$app->post('/admin/menu/cadastrar-item', function() {
    UsuarioC::verficarSessao(1);
    $produtoM = new ProdutoM();
    $produtoC = new ProdutoC();
    $file = $_FILES["img"];

    $produtoM->setNomeProduto($_POST["nome_produto"]);
    $produtoM->setDescricaoProduto($_POST["descricao_produto"]);
    $produtoM->setImgItem($file);
    $produtoM ->setPrecoProduto($_POST["preco_produto"]);
    $produtoM->setFkIdProdutoCtg($_POST["fk_categoria"]);
    $produtoC = new ProdutoC();
    $produtoC->cadastrar_produto($produtoM);
    header("Location: /admin/menu/menu-itens");
    exit();
});

$app->get('/admin/menu/menu-itens', function() {
    UsuarioC::verficarSessao(1);
    $produto = ProdutoC::listProduto();
    $pageAdmin = new PageAdmin();
    $pageAdmin->setTpl("menu", array(
        "produto"=>$produto
    ));

});
$app->get('/admin/menu/:idProduto/eliminar-item', function($idCategoria) {
    UsuarioC::verficarSessao(1);
    ProdutoC::deleteById($idCategoria);
    header("Location: /admin/menu/menu-itens");
    exit();
});

$app->get('/admin/menu/:idProduto/editar-item', function($idCategoria) {
    UsuarioC::verficarSessao(1);
    $pageAdmin = new PageAdmin();
    $categoria = CategoriaC::selectCategorias();
    $produto=ProdutoC::selectProdutoById($idCategoria);
    $pageAdmin->setTpl("editar-item", [
        "produto"=>$produto[0],
        "categoria"=>$categoria
    ]);
});
$app->post('/admin/menu/editar-item', function() {
    UsuarioC::verficarSessao(1);
    $produtoM = new ProdutoM();
    $file = $_FILES["img"];
    $produtoM->setIdProduto($_POST["id_produto"]);
    $produtoM->setNomeProduto($_POST["nome_produto"]);
    $produtoM->setDescricaoProduto($_POST["descricao_produto"]);
    $produtoM->setImgItem($file);
    $produtoM ->setPrecoProduto($_POST["preco_produto"]);
    $produtoM->setFkIdProdutoCtg($_POST["fk_categoria"]);
    $produtoC = new ProdutoC();
    $produtoC->cadastrar_produto($produtoM);
    header("Location: /admin/menu/menu-itens");
    exit();
});

/* ===================================FIM DAS ROTAS Produto========================================*/


