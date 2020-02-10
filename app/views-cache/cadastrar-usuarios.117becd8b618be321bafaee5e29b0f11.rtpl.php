<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Inicio</a>
                </li>
                <li class="active">Dashboard</li>
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
                        Inicio &amp; stats
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- form inicio-->
            <form action="/admin/usuarios/cadastrar-usuarios" method="post">
                <div class="row row-formatacao">
                    <div class="col-md-4 col-formatacao">
                        <label for="">Nome do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="nome_usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">Apelido do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="apelido_usuario" placeholder="apelido do usuario" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">E-mail do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email_usuario" placeholder="email do usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row row-formatacao">
                    <div class="col-md-4">
                        <label for="">Senha do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="senha_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">Confirmar Senha do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="confirmar_senha_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">Numero de Celular do Usuario</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" name="celular_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row row-formatacao">
                    <div class="col-md-4">
                        <label for="">Foto de Perfil</label>
                        <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-camera" id="basic-addon1"></span>
                            <input type="file" class="form-control" name="foto_perfil_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-4">
                    <label for="inputGroupSelect01">Nivel de acesso</label>

                        <select class="form-control" name="fk_nivel_acesso" id="inputGroupSelect01">
                            <option selected>escolha...</option>
                            <?php $counter1=-1;  if( isset($acessoUsers) && ( is_array($acessoUsers) || $acessoUsers instanceof Traversable ) && sizeof($acessoUsers) ) foreach( $acessoUsers as $key1 => $value1 ){ $counter1++; ?>
                            <option value="<?php echo htmlspecialchars( $value1["id_nivel_acesso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_nivel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                            <?php } ?>
                        </select>

                </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 ">
                        <button type="submit" name="btn_cadastrar" class="btn btn-success ">Cadastrar Usuario</button>
                        <button type="reset" name="btn_cancelar" class="btn btn-danger">Cancelar o Cadastro</button>
                    </div>

                </div>
            </form><!-- /form -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->