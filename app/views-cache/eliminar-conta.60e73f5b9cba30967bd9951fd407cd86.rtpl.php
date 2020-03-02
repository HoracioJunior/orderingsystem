<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Content-->
<div class="col-md-9">
    <div class="dashboard-area">
        <!--Todo conteudo aqui-->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-info-circle"></i>Atenção! Uma vez terminado este processo é IRREVERÍVEL</strong>
                    <p><i class="fa fa-check"></i> A sua Conta será eliminada <strong>Permanentemente</strong></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
         <div class="col-12">

         </div>
        <!--Fimm Todo conteudo aqui-->
    </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3 card-bg">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto teste">
                                    <div class="profiles p-3 my-3 rounded text-center">

                                        <div class="caixa">
                                            <form action="/cliente/eliminar-conta" method="post">
                                                <div class="">Deseja Eliminar <b>Permanentemente</b> a tua conta?</div>
                                                <input type="hidden" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="id_usuario">
                                                <div class="butoes">
                                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</section>