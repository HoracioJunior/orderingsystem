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
                    <div class="col-md-12 itens-cart text-center">Ordens no Carrinho
                        <?php $counter1=-1;  if( isset($contar) && ( is_array($contar) || $contar instanceof Traversable ) && sizeof($contar) ) foreach( $contar as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["cart"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>
                    </div>
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
            <div class="row">
                <h5 class="subtitulo">Dados do usuário</h5>
            </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="nome_usuario">Nome<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                    </div>
                    <input type="text" name="nome_usuario" id="nome_usuario" class="form-control rounded-2" placeholder="infrome o seu nome aqui" required>
                    <div class="invalid-feedback">
                        informe o seu nome
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <label for="endereco_usuario">Endereço<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                    </div>
                    <input type="text" id="endereco_usuario" name="endereco_usuario" class="form-control rounded-2" placeholder="endereço o morada" required>
                    <div class="invalid-feedback">intruduza o seu endereço</div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="celular_usuario">Contacto<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone-alt"></i></span>
                    </div>
                    <input type="text" name="celular_usuario" id="celular_usuario" class="form-control rounded-2" placeholder=" intruduza o seu contacto" required>
                    <div class="invalid-feedback">
                        intruduza o contacto
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="celular_alternativo">Contacto Alternativo</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone-alt"></i></span>
                    </div>
                    <input type="text" id="celular_alternativo" name="celular_alternativo" class="form-control rounded-2" placeholder="o seu contacto alternativo" required>
                    <div class="invalid-feedback">intruduza o seu contacto alternativo</div>
                </div>
            </div>
        </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="observacoes">Observações</label>
                    <div class="input-group">
                        <textarea name="observacao" class="form-control" id="observacoes" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <h5 class="subtitulo">Metodos de Pagamento</h5>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group">
                            <input type="radio" class="form-control-inline" id="mpesa" value="1" name="mpesa" checked>
                            <label for="mpesa">M-Pesa</label>
                        </div>
                    </div>
                    <div class="row">
                        <p><div class="form-group">
                        <input type="radio" class="form-control-inline" placeholder="ffff" id="paypal" value="2" name="paypal">
                        <label for="paypal">PayPal</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                    <div class="input-group">
                        <button type="submit" class="btn btn-secondary bnt-search">Prosseguir</button>
                    </div>
            </div>
        </form>
    </div>
</section>
<?php require $this->checkTemplate("testemunhos");?>