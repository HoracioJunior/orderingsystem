<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Content-->
<div class="col-md-9">
    <div class="dashboard-area">
        <div class="row">
            <div class="col-12">
                <div class="mb-3 card-bg">
                    <div class="row">
                        <div class="col-12">
                            <a class="position-absolute ml-3 mt-3 text-white" href="/cliente/meu-perfil" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit cover images"><i class="fas fa-cog"></i></a>
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto teste">
                                    <div class="profiles p-3 my-4 rounded text-center shadow-sm">
                                        <div class="avatars">
                                            <a href="#">
                                                <img src="/app/src/assets/images/avatars/profile-pic.jpg" alt="Circle Image" class="avatar-lg rounded-circle img-fluid" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit avatar images">
                                            </a>
                                        </div>
                                        <div class="names">
                                            <h3 class="title text-light"><?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>



    </div>
</div>
</div>
</div>
</section>