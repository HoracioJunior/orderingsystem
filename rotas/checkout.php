<?php

use controllers\Carrinho;
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
use controllers\Pedidos as PedidoC;
use models\Pedidos as PedidoM;
use models\Detalhes as DetalhesM;


$app->get('/checkout', function() {
    UsuarioC::verficarSessao(3);



    $page = new Page();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $carrinho = new CarrinhoC();
    $lista = $carrinho->listCart();
    $contar = $carrinho->countCart();
    $dados = $_SESSION["usuario"];
    $carrinhoId = $_SESSION[CarrinhoC::SESSION]["carrinhoId"];

        $page->setTpl("checkout",array(
            "depoimento"=>$testemunhos,
            "lista"=>$lista,
            "contar"=>$contar,
            "subtotal"=>$carrinho->subTotal(),
            "dados"=>$dados,
            "carrinho"=>$carrinhoId
        ));
});
$app->get('/checkout-pickup', function() {
    UsuarioC::verficarSessao(3);
    $page = new Page();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $carrinho = new CarrinhoC();

    $lista = $carrinho->listCart();
    $contar = $carrinho->countCart();
    $dados = $_SESSION["usuario"];
    $carrinhoId = $_SESSION[CarrinhoC::SESSION]["carrinhoId"];

    $page->setTpl("checkout_pickup",array(
        "depoimento"=>$testemunhos,
        "lista"=>$lista,
        "contar"=>$contar,
        "subtotal"=>$carrinho->subTotal(),
        "dados"=>$dados,
        "carrinho"=>$carrinhoId
    ));
});

$app->post('/checkout', function (){

    $pedido = new PedidoM();
    $pc = new PedidoC();
    if($_POST["tipo_pagamento"] == 1){
        $pedido->setFkIdUsuario($_POST["id_usuario"]);
        $pedido->setFkIdCarrinho($_POST["id_carrinho"]);
        $pedido->setTotal($_POST["total"]);
        $pedido->setStatus(PedidoC::ABERTO);

        $detalhes = new DetalhesM();
        $detalhes->setEndereco($_POST["endereco_usuario"]);
        $detalhes->setContactoAtl($_POST["celular_alternativo"]);
        $detalhes->setContactoUsuario($_POST["celular_usuario"]);
        $detalhes->setNomeUsuario($_POST["nome_usuario"]);
        $detalhes->setObservacao($_POST["observacao"]);
        $detalhes->setTipoPagamento($_POST["tipo_pagamento"]);

        $pc->adicionar($pedido,$detalhes);
        header("Location: /mpesa");
        exit();

    }else{
        $pedido->setFkIdUsuario($_POST["id_usuario"]);
        $pedido->setFkIdCarrinho($_POST["id_carrinho"]);
        $pedido->setTotal($_POST["total"]);
        $pedido->setStatus(PedidoC::ABERTO);

        $detalhes = new DetalhesM();
        $detalhes->setEndereco($_POST["endereco_usuario"]);
        $detalhes->setContactoAtl($_POST["celular_alternativo"]);
        $detalhes->setContactoUsuario($_POST["celular_usuario"]);
        $detalhes->setNomeUsuario($_POST["nome_usuario"]);
        $detalhes->setObservacao($_POST["observacao"]);
        $detalhes->setTipoPagamento($_POST["tipo_pagamento"]);

        $pc->adicionar($pedido,$detalhes);
        header("Location: /paypal");
        exit();
    }




});

$app->get('/mpesa', function() {
    UsuarioC::verficarSessao(3);
    $page = new Page();

    $page->setTpl("mpesa");
});

$app->get('/paypal', function() {
    UsuarioC::verficarSessao(3);
    $page = new Page();

    $page->setTpl("paypal");
});