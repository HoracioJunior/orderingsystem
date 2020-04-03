<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="/app/src/admin/dist/img/user1-128x128.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                        <p class="text-muted text-center">
                            <?php if( ($dados["fk_id_nivel_acesso"]) == 1 ){ ?>
                            Administrador
                            <?php } ?>
                        </p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Meus Dados</a></li>
                        <li><a href="#timeline" data-toggle="tab">Mudar Senha</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="active tab-pane" id="activity">
                            <!-- form inicio-->
                            <form action="/admin/perfil/editar-perfil" method="post">
                                <div class="row row-formatacao">
                                    <div class="col-md-4 col-formatacao">
                                        <label for="">Nome do Usuario</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text" value="<?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="nome do usuario" name="nome_usuario" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Apelido do Usuario</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user"></i></span>
                                            <input type="text" value="<?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" name="apelido_usuario" placeholder="apelido do usuario" aria-describedby="basic-addon2">
                                        </div>
                                    </div>

                                </div>
                                <div class="row row-formatacao">
                                    <div class="col-md-4">
                                        <label for="">E-mail do Usuario</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                            <input type="email" value="<?php echo htmlspecialchars( $dados["email_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" name="email_usuario" placeholder="email do usuario" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Numero de Celular do Usuario</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                            <input type="text" value="<?php echo htmlspecialchars( $dados["celular_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" name="celular_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="id_usuario">
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 ">
                                        <button type="submit" name="btn_cadastrar" class="btn btn-success ">Salvar</button>
                                        <button type="reset" name="btn_cancelar" class="btn btn-danger">Cancelar </button>
                                    </div>

                                </div>
                            </form><!-- /form -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- Segundo Tab -->
                            <form role="form" action="/admin/perfil/mudar-senha" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Sua senha antiga</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" ><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" placeholder="antiga senha" name="senha_antiga">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="id_usuario">
                                        <label >Nova Senha</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" placeholder="nova senha" name="senha_nova">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirmar nova senha</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" placeholder="confirmar sua senha" name="senha_nova_confirmar">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="btn_cadastrar" class="btn btn-success ">Salvar</button>
                                    <button type="reset" name="btn_cancelar" class="btn btn-danger">Cancelar </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <!-- terceiro Tab -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <?php if( $feedbacks != '' ){ ?>
        <div class="alert alert-success" role="alert">
            <b><?php echo htmlspecialchars( $feedbacks, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>
        <?php if( $errorfeedbacks != '' ){ ?>
        <div class="alert alert-danger" role="alert">
            <b><?php echo htmlspecialchars( $errorfeedbacks, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->