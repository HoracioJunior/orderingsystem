<?php
use models\pages\Page;
use controllers\Usuario as UsuarioC;
use models\Usuario as UsuarioM;
use controllers\Produto as ProdutoC;
use models\Depoimento as DepoimentoM;
use controllers\Depoimento as DepoimentoC;
Use controllers\Cliente;
use models\Carrinho as CarrinhoM;
use controllers\Carrinho as CarrinhoC;
use controllers\Recovery;
use models\Endereco as EnderecoM;
use controllers\Endereco as EnderecoC;


$app->get('/checkout', function() {
    //UsuarioC::verficarSessao(3);
    $page = new Page();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $carrinho = new CarrinhoC();
    $lista = $carrinho->listCart();
    $contar = $carrinho->countCart();
    $page->setTpl("checkout",array(
        "depoimento"=>$testemunhos,
        "lista"=>$lista,
        "contar"=>$contar,
        "subtotal"=>$carrinho->subTotal()
    ));

});
