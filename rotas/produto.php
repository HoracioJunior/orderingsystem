<?php
use models\pages\PageGestor;
use models\Usuario as UsuarioM;
use controllers\Usuario as UsuarioC;
use controllers\Categoria as CategoriaC;
use models\Categoria as CategoriaM;
use controllers\Produto as ProdutoC;
use models\Produto as ProdutoM;
use Rain\Tpl;

/* ======================================inicio DAS Rotas de Categorias====================================*/
$app->get('/gestor/menu/categorias', function() {
    UsuarioC::verficarSessao(2);
    $categoriaM = CategoriaC::selectCategorias();
    $pageGestor = new PageGestor();
    $pageGestor->setTpl("categorias", array(
        "categoria"=>$categoriaM,
        "sucesso" => CategoriaC::getSucesso(),
        "existe"=>CategoriaC::getExiste()
    ));
});

$app->post('/gestor/menu/categorias/add', function() {
    UsuarioC::verficarSessao(2);
    $categoriaM = new CategoriaM();
    $categoriaM -> setNomeCategoria($_POST["nome_categoria"]);
    $categoriaC = new CategoriaC();
    $categoriaC ->cadastrar_categoria($categoriaM);
    header("Location: /gestor/menu/categorias");
    exit();
});

$app->get('/gestor/categoria/:idCategoria/eliminar-categoria', function($idCategoria) {
    UsuarioC::verficarSessao(2);
    CategoriaC::deleteById($idCategoria);
    header("Location: /gestor/menu/categorias");
    exit();
});

$app->get('/gestor/categoria/:idCategoria/editar-categoria', function($idCategoria) {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $categoria =CategoriaC::selectCategoriasById($idCategoria);

    $pageGestor->setTpl("editar-categoria", [
        "categoria"=>$categoria[0]
    ]);
});
$app->post('/gestor/categoria/editar-categoria', function() {
    UsuarioC::verficarSessao(2);
    $categoriaM = new CategoriaM();
    $categoriaM ->setIdCategoria($_POST["id_categoria"]);
    $categoriaM ->setNomeCategoria($_POST["nome_categoria"]);
    $categoriaC = new CategoriaC();
    $categoriaC ->update($categoriaM);
    header("Location: /gestor/menu/categorias");
    exit();
});
/* ===================================FIM DAS ROTAS CATEGORIAS========================================*/

/* ===================================INICIO DAS ROTAS Produto========================================*/
$app->get('/gestor/menu/cadastrar-item', function() {
    UsuarioC::verficarSessao(2);
    $categoria = CategoriaC::selectCategorias();
    $pageGestor = new PageGestor();
    $pageGestor->setTpl("cadastrar-item", array(
        "categoria"=>$categoria,
        "sucessoProduto"=>ProdutoC::getSucesso()
    ));

});
$app->post('/gestor/menu/cadastrar-item', function() {
    UsuarioC::verficarSessao(2);
    $produtoM = new ProdutoM();
    $file = $_FILES["img"];

    $produtoM->setNomeProduto($_POST["nome_produto"]);
    $produtoM->setDescricaoProduto($_POST["descricao_produto"]);
    $produtoM->setImgItem($file);
    $produtoM ->setPrecoProduto($_POST["preco_produto"]);
    $produtoM->setFkIdProdutoCtg($_POST["fk_categoria"]);
    $produtoC = new ProdutoC();
    $produtoC->cadastrar_produto($produtoM);
    header("Location: /gestor/menu/cadastrar-item");
    exit();
});

$app->get('/gestor/menu/menu-itens', function() {
    UsuarioC::verficarSessao(2);
    $produto = ProdutoC::listProduto();
    $pageGestor = new PageGestor();
    $pageGestor->setTpl("menu", array(
        "produto"=>$produto,
        "sucessoDelete"=>ProdutoC::getSucesso()
    ));

});
$app->get('/gestor/menu/:idProduto/eliminar-item', function($idCategoria) {
    UsuarioC::verficarSessao(2);
    ProdutoC::deleteById($idCategoria);
    header("Location: /gestor/menu/menu-itens");
    exit();
});

$app->get('/gestor/menu/:idProduto/editar-item', function($idCategoria) {
    UsuarioC::verficarSessao(2);
    $pageGestor = new PageGestor();
    $categoria = CategoriaC::selectCategorias();
    $produto=ProdutoC::selectProdutoById($idCategoria);
    $pageGestor->setTpl("editar-item", [
        "produto"=>$produto[0],
        "categoria"=>$categoria
    ]);
});
$app->post('/gestor/menu/editar-item', function() {
    UsuarioC::verficarSessao(2);
    $produtoM = new ProdutoM();
    $file = $_FILES["img"];
    $produtoM->setIdProduto($_POST["id_produto"]);
    $produtoM->setNomeProduto($_POST["nome_produto"]);
    $produtoM->setDescricaoProduto($_POST["descricao_produto"]);
    $produtoM->setImgItem($file);
    $produtoM ->setPrecoProduto($_POST["preco_produto"]);
    $produtoM->setFkIdProdutoCtg($_POST["fk_categoria"]);
    $produtoC = new ProdutoC();
    $produtoC->update_produto($produtoM);
    header("Location: /gestor/menu/menu-itens");
    exit();
});

/* ===================================FIM DAS ROTAS Produto========================================*/


