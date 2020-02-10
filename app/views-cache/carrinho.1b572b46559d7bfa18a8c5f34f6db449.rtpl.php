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
            <div class="col-md-9">
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
            <div class="col-md-3 box-pagamento mb-4">
                <div class="row pagamento">
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

<div class="testimonial1 py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h4 class="my-3">Veja o que nossos clientes estão dizendo</h4>
                <h6 class="subtitle font-weight-normal">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
            </div>
        </div>
        <!-- Row  -->
        <div class="owl-carousel owl-theme testi1 mt-4">
            <!-- item -->
            <div class="item">
                <div class="card card-shadow border-0 mb-4">
                    <div class="card-body">
                        <div class="position-relative thumb bg-success-gradiant d-inline-block text-white mb-4"><img src="./app/src/img/22.jpg" alt="wrapkit" class="thumb-img position-absolute rounded-circle" /> Michelle B</div>
                        <h5 class="font-weight-light">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
                        <span class="devider d-inline-block my-3"></span>
                        <h6 class="font-weight-normal">Managing Director, Theme Designer</h6>
                    </div>
                </div>
            </div>
            <!-- item -->
        </div>
    </div>
</div>
