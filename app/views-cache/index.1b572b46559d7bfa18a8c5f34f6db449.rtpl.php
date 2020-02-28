<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="hero-section">
    <div class="conteudo">

        <div >
            <h1>Order delivery & Take-Out</h1>
            <h6><span>-Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h6>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar form-inline">
                    <input class="form-control search-input mb-2" type="text" name="" placeholder="Search...">
                    <button type="submit" class="btn btn-primary bnt-search">Feed me <i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="popular">
    <div class="titulo text-center">
        <h1 class="">Mais Popular</h1>
        <hr class="separator"/>
        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>
    </div>
    <div class="container owl-carousel owl-theme popularSlider">
        <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
        <div class="item">
            <div class="card" >
                <img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  class="card-img-top" alt="<?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="card-body card-corpo">
                    <h5 class="card-title"><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                    <p class="card-text"><small><?php echo htmlspecialchars( $value1["descricao_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></p>

                        <di class="row">
                            <div class="col-md-6"><span class="preco text-muted"><?php echo formatarPreco($value1["preco_produto"]); ?> MZN</span></div>
                            <div class="col-md-6">

                                    <?php if( $value1["produto_status"]=='indisponivel' ){ ?>
                                        <button class="btn btn-danger disabled float-right">Indisponível</button>
                                    <?php }else{ ?>
                                        <form action="/carrinho/adicionar" method="POST">
                                            <input type="hidden" name="id_produto" value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <button type="submit" class="btn btn-outline-primary btn-addcart">Peça agora</button>
                                        </form>
                                    <?php } ?>
                            </div>
                        </di>


                </div>
                <div class="card-footer text-muted">
                    <div class="mt-0">
                        <span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                        <small>4.5 (89 Avaliações)</small>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</section>

<section class="passos">
    <div class="texto-titulo">
        <h1 class="text-center">4 Passos e já está.</h1>
        <hr class="separator"/>
    </div>
</section>
<?php require $this->checkTemplate("testemunhos");?>



