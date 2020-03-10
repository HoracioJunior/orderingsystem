<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section>
    <div class="container">
        <div class="titulo mt-3">
            <h1 class="text-center">Pagamentos e outros detalhes</h1>
            <hr class="separator"/>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 itens-cart text-center">Ordens no Carrinho</div>
                </div>
                <div class="tabela">
                    <table class="table table-hover table-responsive">
                        <thead class="px-10">
                        <tr >
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col"></th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter1=-1;  if( isset($lista) && ( is_array($lista) || $lista instanceof Traversable ) && sizeof($lista) ) foreach( $lista as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <td>#</td>
                            <td scope="row"><img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt=""></td>
                            <td><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo formatarPreco($value1["preco_produto"]); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars( $value1["quantidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo formatarPreco($value1["vlTotal"]); ?></td>
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

                <div class="row taxa-delivery mb-3 " >
                    <div class="col-md-6 " id="taxa_delivery">Taxa:</div>
                    <div class="col-md-6 text-right ">150 MZN</div>
                </div>
                <hr>
                <div class="row mb-3 total">
                    <div class="col-md-6">Total a Pagar:</div>
                    <div class="col-md-6 text-right "><?php $counter1=-1;  if( isset($subtotal) && ( is_array($subtotal) || $subtotal instanceof Traversable ) && sizeof($subtotal) ) foreach( $subtotal as $key1 => $value1 ){ $counter1++; ?><?php echo formatarPreco($value1["Subtotal"]+150); ?><?php } ?> MZN</div>
                </div>
            </div>
        </div>
        <form action="" method="post">

            <div class="row mb-2">
                <h5 class="subtitulo">Metodos de Pagamento</h5>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="mpesa" value="1" name="tipo_pagamento" checked>
                            <label for="mpesa" class="custom-control-label">M-Pesa</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input"  id="paypal" value="2" name="tipo_pagamento">
                        <label for="paypal" class="custom-control-label">PayPal</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                    <div class="input-group">
                        <button type="submit" class="btn btn-secondary bnt-search">Prosseguir</button>
                    </div>
            </div>
            <input type="text" value='<?php $counter1=-1;  if( isset($subtotal) && ( is_array($subtotal) || $subtotal instanceof Traversable ) && sizeof($subtotal) ) foreach( $subtotal as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["Subtotal"]+150, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' name="total">
            <input type="text" name="id_usuario" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        </form>
    </div>
</section>
<?php require $this->checkTemplate("testemunhos");?>