<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row ">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/perfil/mudar-senha" method="post">
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
            <!-- /.box -->
        </div>
    </div>

    </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->
