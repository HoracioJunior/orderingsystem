<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="hero-section">
    <div class="conteudo">

        <div >
            <h1>Order delivery & Take-Out</h1>
            <h6><span>-Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h6>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar form-inline">
                    <input class="form-control search-input mb-2" type="search" name="" placeholder="Search...">
                    <button type="submit" class="btn btn-primary bnt-search">Feed me <i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="steps">
    <div class="container">
        <dinv class="row">
            <div class="col-md-3 step-col"><span class="rounded-circle nr">1</span>Escolher <i class="fa fa-check"></i></div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">2</span>Adicionar ao carrinho <i class="fa fa-cart-plus"></i></div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">3</span>Checkout <i class="fa fa-coins"></i></div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">4</span>Receber ou Levantar <i class="fas fa-bicycle"></i></div>
        </dinv>
    </div>
</section>

<section class="menu">
    <div class="container">
        <div class="titulo">
            <h1 class="text-center">Nosso Menu</h1>
            <hr class="separator"/>
        </div>

        <div class="row switch-menu">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <span id="grid"> <i class="fa fa-grip-vertical switch-menu-icon"></i></span>
                <span id="list"> <i class="fa fa-list switch-menu-icon"></i></span>


            </div>
        </div>
        <div  id="grid-menu">
            <div class="row">
                <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
                <div  class="col-md-4 col-sm-6 col-xs-12 menu-card ">
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
                                <form action="/carrinho/adicionar" method="post">
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
        </div>


        <div class="container mb-3"  id="list-menu">
            <div class="row">
                <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
                <div class="col-md-6 mt-3">
                    <div class="card list-card">
                        <div class="card-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6"><h5 class="card-title"><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5></div>
                                    <div class="col-md-6"><h6 class="float-right"><?php echo formatarPreco($value1["preco_produto"]); ?> MZN</h6></div>
                                </div>


                                <div class="row">
                                    <div class="col-6 mt-2">
                                       <span>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </span>
                                        <small>4.5 (89 Avaliações)</small>
                                    </div>
                                    <div class="col-6 mt-1">
                                        <?php if( $value1["produto_status"]=='indisponivel' ){ ?>
                                        <button class="btn btn-danger disabled float-right btn-sm">Indisponível</button>
                                        <?php }else{ ?>
                                        <form action="/carrinho/adicionar" method="post">
                                            <input type="hidden" name="id_produto" value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <button type="submit" class="btn btn-outline-primary btn-addcart btn-sm">Peça agora</button>
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="paginacao">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item ">
                        <a class="page-link" href="" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                    <li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <a class="page-link" href="#">Proximo</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>

