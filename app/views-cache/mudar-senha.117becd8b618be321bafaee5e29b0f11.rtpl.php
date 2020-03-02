<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Perfil</a>
                </li>
                <li class="active">Mudar Senha</li>
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
                       Perfil <i class="ace-icon fa fa-angle-double-right"></i> Mudar Senha
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- form inicio-->
            <form action="/admin/perfil/mudar-senha" method="post">
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
                <div class="row row-formatacao">
                    <div class="col-md-6 col-formatacao">
                        <label for="">Sua senha antiga</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="password" class="form-control" placeholder="antiga senha" name="senha_antiga" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                      <div class="row row-formatacao">
                    <div class="col-md-6 col-formatacao">
                        <label for="">Nova Senha</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="password" class="form-control" placeholder="nova senha" name="senha_nova" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                      <div class="row row-formatacao">
                    <div class="col-md-6 col-formatacao">
                        <label for="">Confirmar nova senha</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="password" class="form-control" placeholder="confirmar sua senha" name="senha_nova_confirmar" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <input type="hidden" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="id_usuario">
                
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