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
use models\Avaliar as AvaliarM;
use controllers\Avaliar as AvaliarC;

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
    header("Location: /");
    exit;
});

$app->get('/logout', function() {
    UsuarioC::logout();
    header("Location: /login");
    exit();
});

$app->get('/menu', function() {
    $page = (isset($_GET['page'])) ? (int)$_GET['page']: 1;

    //$produto = ProdutoC::listProduto();
    $pages=[];

    $produto = new ProdutoC();
   $pagination= $produto->paginacao($page);
    for ($i = 1;$i<=$pagination["paginas"];$i++){
        array_push($pages,[
            "link"=>"/menu?page=".$i,
            "page"=>$i
        ]);
    }
    $dados = $_SESSION["usuario"];
    $page = new Page();
    $page->setTpl("menu", array(
        "produto"=>$pagination["produtos"],
        "pages"=>$pages,
        "dados"=>$dados
    ));

});
$app->get('/carrinho', function() {
    $page = new Page();
    $testemunhos = DepoimentoC::listarDepoimentos();
    $carrinho = new CarrinhoC();
    $lista = $carrinho->listCart();
    $contar = $carrinho->countCart();
    $page->setTpl("carrinho",array(
        "depoimento"=>$testemunhos,
        "lista"=>$lista,
        "contar"=>$contar,
        "subtotal"=>$carrinho->subTotal()
    ));

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
$app->get('/carrinho/:idProduto/menos', function($idProduto) {
    $carrinho = new CarrinhoC();
    $carrinho->deleteSingle($idProduto);

});
$app->get('/carrinho/:idProduto/add', function($idProduto) {
    $carrinho = new CarrinhoC();
    $carrinho->addProduct((int)$idProduto);
    header("Location: /carrinho");
    exit();
});
$app->get('/carrinho/:idProduto/deleteAll', function($idProduto) {
    $carrinho = new CarrinhoC();
    $carrinho->deleteAll($idProduto);

});
$app->post('/carrinho/adicionar', function() {
        $produtoId = $_POST["id_produto"];
        $carrinho = new CarrinhoC();
        $carrinho->addProduct($produtoId);
        header("Location: /carrinho");
        exit();
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
    $page->setTpl("recuperar-senha", array(
        "naoExiste" =>Recovery::getNaoExiste()
    ));

});
$app->get('/token-check', function() {
    $page = new Page([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl("token-check",array(
        "email"=>$_SESSION["email"],
        "naoExiste" =>Recovery::getNaoExiste()
    ));

});
$app->post('/check-email', function() {
    $userM = new UsuarioM();
    $userM->setEmailUsuario($_POST["email_usuario"]);
    $recovery = new Recovery();
    $recovery->setCodigo($userM);

    exit();

});
$app->post('/token-check', function() {

    $token=$_POST["codigo_verificacao"];
    $email =$_POST["email"];
    $senha = $_POST["nova_senha"];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $recovery = new Recovery();
    $recovery->checkToken($token,$email,$senhaHash);
});

$app->post('/avaliar', function() {
    //UsuarioC::verficarSessao(3);
    $avaliarModel = new AvaliarM();
    $avaliarModel->setFkIdUsuario($_POST["id_usuario"]);
    $avaliarModel->setFkIdProduto($_POST["id_produto"]);
    $avaliarModel->setComentario($_POST["comentario"]);
    $avaliarModel->setQtdEstrelas($_POST["qtd_estrelas"]);
    $avaliarC = new AvaliarC();
    $avaliarC->avaliar($avaliarModel);
    header("Location: /menu");
    exit();
});


