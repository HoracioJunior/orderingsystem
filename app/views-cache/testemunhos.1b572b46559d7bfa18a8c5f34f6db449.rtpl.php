<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="testimonial1 py-5 bg-light">
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
            <?php $counter1=-1;  if( isset($depoimento) && ( is_array($depoimento) || $depoimento instanceof Traversable ) && sizeof($depoimento) ) foreach( $depoimento as $key1 => $value1 ){ $counter1++; ?>
            <div class="item">
                <div class="card card-shadow border-0 mb-4">
                    <div class="card-body">
                        <div class="position-relative thumb bg-success-gradiant d-inline-block text-white mb-4"><img src="./app/src/img/22.jpg" alt="wrapkit" class="thumb-img position-absolute rounded-circle" /><?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                        <h5 class="font-weight-light"><?php echo htmlspecialchars( $value1["mensagem_testemunho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                        <span class="devider d-inline-block my-3"></span>
                        <h6 class="font-weight-normal"><?php echo htmlspecialchars( $value1["data"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- item -->
        </div>
    </div>
</div>