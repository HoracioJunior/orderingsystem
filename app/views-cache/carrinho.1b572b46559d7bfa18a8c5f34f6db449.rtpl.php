<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="hero-section">
    <div class="conteudo">

        <div >
            <h1>Order delivery & Take-Out</h1>
            <h6><span>-Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h6>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="titulo mt-3">
            <h1 class="text-center">Meu Carrinho</h1>
            <hr class="separator"/>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 itens-cart text-center">Ordens no Carrinho
                    <?php $counter1=-1;  if( isset($contar) && ( is_array($contar) || $contar instanceof Traversable ) && sizeof($contar) ) foreach( $contar as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["cart"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>
                    </div>
                </div>
                <div class="tabela">
                    <table class="table table-hover table-responsive">
                        <thead class="px-10">
                        <tr >
                            <th scope="col">Produto</th>
                            <th scope="col"></th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Apagar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter1=-1;  if( isset($lista) && ( is_array($lista) || $lista instanceof Traversable ) && sizeof($lista) ) foreach( $lista as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt=""></th>
                            <td><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo formatarPreco($value1["preco_produto"]); ?></td>
                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <input type="button" class="minus" value="-" onclick="window.location.href = '#'">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo htmlspecialchars( $value1["quantidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" min="0" step="1">
                                    <input type="button" class="plus" value="+" onclick="window.location.href = '#'">
                                </div>
                            </td>
                            <td><?php echo formatarPreco($value1["vlTotal"]); ?></td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
               <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 box-pagamento mb-4 ">
                <div class="row pagamento justify-content-end">
                    <div class="col-md-12 text-center">Pagamento</div>

                </div>
                <div class="row subtotal">
                    <div class="col-6 sub">Subtotal:</div>
                    <div class="col-6 sub text-right"><?php $counter1=-1;  if( isset($subtotal) && ( is_array($subtotal) || $subtotal instanceof Traversable ) && sizeof($subtotal) ) foreach( $subtotal as $key1 => $value1 ){ $counter1++; ?><?php echo formatarPreco($value1["Subtotal"]); ?><?php } ?> MZN</div>
                </div>
                <div class="row delivery-pickup">
                    <div class="col-12 ">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="radio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Delivery</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline radio2">
                            <input type="radio" id="customRadioInline2" name="radio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Pickup</label>
                        </div>
                    </div>
                </div>
                <div class="row taxa-delivery mb-3">
                    <div class="col-md-6">Taxa de Delivery:</div>
                    <div class="col-md-6 text-right ">150 MZN</div>
                </div>
                <hr>
                <div class="row mb-3 total">
                    <div class="col-md-6">Total a Pagar:</div>
                    <div class="col-md-6 text-right ">150 MZN</div>
                </div>
                <div class="row mb-3 total">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary bnt-search">
                            Pagamento/Checkout
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php require $this->checkTemplate("testemunhos");?>

