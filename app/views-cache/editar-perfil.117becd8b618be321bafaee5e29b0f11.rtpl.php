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

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
