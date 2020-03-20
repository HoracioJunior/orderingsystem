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
    <div class="titulo text-center pb-3">
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
                                        <form method="post" id="form-adicionar">
                                            <input type="hidden" name="id_produto" value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <button type="submit" class="btn btn-outline-primary btn-addcart" id="btn-carrinho">Peça agora</button>
                                        </form>
                                    <?php } ?>
                            </div>
                        </di>


                </div>
                <div class="card-footer text-muted">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="mt-0" >
                                <span class="estrelas" data-toggle="modal" onclick="showModal(<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)" data-target="#myModal">
                                    <span class="rate" ></span>
                                    <i class="result">0</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 float-left">
                            <span>4.5 (89 Avaliações)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</section>

<section class="passos">

    <div class="texto-titulo">
        <h3 class="text-center font-weight-bold">4 Cliques e já está!</h3>
        <hr class="separator"/>
    </div>

    <div class="container">
        <div class="row pb-3">
            <div class="col-md-3">
              <div class="row">
                  <div class="col-12">
                      <div class="contentor ">
                      <img src="/app/src/img/steps/step2.png" alt="procurar" class="steps-img">
                      </div>
                  </div>
              </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cliques">1. Escolher</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="steps-text">Encontre o item desejado no nosso Menu</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="contentor">
                            <img src="/app/src/img/steps/cart.png" alt="procurar" class="steps-img">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cliques">2. Adicionar ao Carrinho</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="steps-text">Adiciona os itens desejado ao carrinho de compras</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="contentor">
                        <img src="/app/src/img/steps/step3.png" alt="procurar" class=" steps-img">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cliques">3. Pagar</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="steps-text">Pague os seus pedidos fácil e rápido</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="contentor">
                            <img src="/app/src/img/steps/step4.png" alt="procurar" class=" steps-img">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cliques">4. Delivery ou Pickup</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="steps-text">
                            Entrega na porta da sua casa ou no lugar desejado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<?php require $this->checkTemplate("testemunhos");?>




<!-- Modal  cadastrar-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Avaliar Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/avaliar" method="post">
                <div class="modal-body">
                    <div class="row row-formatacao">
                        <div class="col-md-8 col-formatacao">
                            <input type="hidden" id="id_produto" name="id_produto" >
                            <input type="hidden" id="id_usuario" name="id_usuario" value="" >
                            <input type="hidden" id="qtd_estrelas" name="qtd_estrelas"  >
                            <label for="">Comentario</label>
                            <div class="input-group">
                                <textarea  class="form-control" name="comentario" aria-describedby="basic-addon1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Avaliar</button>
                </div>
            </form>

        </div>
    </div>
</div>
