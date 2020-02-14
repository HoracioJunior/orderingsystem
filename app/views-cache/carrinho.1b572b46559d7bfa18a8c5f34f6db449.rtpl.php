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
                    <div class="col-md-12 itens-cart text-center">Ordens no Carrinho</div>
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
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="./app/src/img/payment/mpesa.png" alt=""></th>
                            <td>-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
                            <td>105</td>
                            <td>2</td>
                            <td>410</td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>
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
                    <div class="col-6 sub text-right">150 MZN</div>
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
                <div class="row">
                    <div class="col-md-12">
                        <select class="custom-select custom-select-lg mb-3 mt-3">
                            <option selected>Escolha o destino</option>
                            <option value="1">Matacuane</option>
                            <option value="2">Macurrungo</option>
                            <option value="3">Ponta-Gea</option>
                        </select>
                    </div>
                </div>
                <div class="row taxa-delivery mb-3">
                    <div class="col-md-6">Taxa de Delivery:</div>
                    <div class="col-md-6 text-right ">150 MZN</div>
                </div>
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

