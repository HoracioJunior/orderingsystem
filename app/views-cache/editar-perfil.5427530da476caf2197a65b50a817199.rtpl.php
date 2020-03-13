<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Perfil</a>
                </li>
                <li class="active">Editar Perfil</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">


            <div class="page-header">
                <h1>
                    Dashboard
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                       Perfil <i class="ace-icon fa fa-angle-double-right"></i> Editar Perfil
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- form inicio-->
            <form action="/gestor/perfil/editar-perfil" method="post">
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

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->