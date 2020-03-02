<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Modal para perfil-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Actualizaçao dos dados do usuário</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <form action="/cliente/perfil/editar-perfil" method="post">
            <div class="modal-body">
                <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <label>Nome do Usuario<strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="nome_usuario" placeholder="nome do usuario" required>
                <label>Apelido do Usuario<strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="apelido_usuario" placeholder="nome do usuario" required>
                <label>Email do Usuario<strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars( $dados["email_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="email_usuario" placeholder="nome do usuario" required>
                <label>Celular do Usuario<strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars( $dados["celular_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="celular_usuario" placeholder="nome do usuario" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary bnt-search">Salvar Alterações <i class="fa fa-save"></i></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

            </div>
            </form>
        </div>
    </div>
</div>
<!-- Fim Modal para perfil-->
<!--Content-->
<div class="col-md-9">
    <div class="dashboard-area">

        <!--Todo conteudo aqui-->
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 card-bg">
                    <div class="row">
                        <div class="col-md-12">
                            <button data-toggle="modal" data-target="#myModal" class="position-absolute mt-3 ml-3 text-white btn btn-secondary" href="/cliente/meu-perfil/editar-perfil" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit cover images">
                                <i class="fas fa-user-edit"></i> Editar Perfil
                            </button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 teste">
                            <div class=" p-3 mt-4">
                                <div class="">
                                    <p><strong>Nome: </strong><?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                    <p><strong>E-mail: </strong><?php echo htmlspecialchars( $dados["email_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                    <p><strong>Celular: </strong><?php echo htmlspecialchars( $dados["celular_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 card-bg">
                    <div class="row">
                        <div class="col-md-12">
                                <button type="button" data-toggle="modal" data-target="#endereco" class="position-absolute mt-3 ml-3 text-white btn btn-secondary" >
                                    <i class="fas fa-user-plus"></i> Endereço
                                </button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 teste">
                            <div class=" p-3 mt-4">
                                <div class="teste">
                                    <p><strong>Nome: </strong><?php echo htmlspecialchars( $endereco, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Fimm Todo conteudo aqui-->
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="endereco" tabindex="-1" role="dialog" aria-labelledby="enderecoModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="enderecoModal">Endereço do Usuário</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <form action="/cliente/perfil/endereco/add" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <label>Endereço do usuario</label>
                    <input type="text" class="form-control" value="" name="endereco_usuario" placeholder="forneça o endereço do usuario" required>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary bnt-search">Salvar Alterações <i class="fa fa-save"></i></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fim Modal para perfil-->
</section>

