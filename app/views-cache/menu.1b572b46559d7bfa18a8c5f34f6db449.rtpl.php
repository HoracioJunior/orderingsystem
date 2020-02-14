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

<section class="steps">
    <div class="container">
        <dinv class="row">
            <div class="col-md-3 step-col"><span class="rounded-circle nr">1</span> Step</div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">2</span> Step</div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">3</span> Step</div>
            <div class="col-md-3 step-col"><span class="rounded-circle nr">4</span> Step</div>
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
                                <form action="" method="post">
                                    <input type="hidden" name="id_produto" value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    <button type="submit" class="btn btn-outline-primary btn-addcart">Peça agora</button>
                                </form>
                                <?php } ?>
                            </div>
                        </di>
                    </div>
                        <div class="card-footer text-muted">
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
                            <div class="img-square-wrapper">
                                <img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="width: 200px; height: 168px" alt="Cardimagecap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-text"><?php echo htmlspecialchars( $value1["descricao_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <h6><?php echo formatarPreco($value1["preco_produto"]); ?> MZN</h6>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <?php if( $value1["produto_status"]=='indisponivel' ){ ?>
                                        <button class="btn btn-danger disabled float-right">Indisponível</button>
                                        <?php }else{ ?>
                                        <form action="" method="post">
                                            <input type="hidden" name="id_produto" value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <button type="submit" class="btn btn-outline-primary btn-addcart">Peça agora</button>
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
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>




<!--<div id="list-menu" class="p_recype_item_main ">
    <div class="row p_recype_item_active">
        <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="width: 150px; height: 159px">
                </div>
                <div class="media-body">
                    <a href="#"><h3><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3></a>
                    <h4><?php echo formatarPreco($value1["preco_produto"]); ?> MZN</h4>
                    <p><?php echo htmlspecialchars( $value1["descricao_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </p>
                    <a class="read_mor_btn" href="#">Add To Cart</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php } ?>


    </div>
</div>-->