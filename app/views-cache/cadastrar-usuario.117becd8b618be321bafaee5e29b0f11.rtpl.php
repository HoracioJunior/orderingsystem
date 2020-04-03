<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            USUÁRIOS
            <small>Cadastrar usuario</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i>Pagina Inicial</a></li>
            <li class="active">Cadastrar Usuario</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header ">
                <h3 class="box-title">Cadastrar Usuário</h3>
            </div>
            <div class="box-body">
                <form action="/admin/usuario/cadastrar-usuario" method="post">
                    <div class="row row-formatacao">
                        <div class="col-md-4 col-formatacao">
                            <label>Nome do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" name="nome_usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Apelido do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="apelido_usuario" placeholder="apelido do usuario" aria-describedby="basic-addon2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label >E-mail do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email_usuario" placeholder="email do usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row row-formatacao">
                        <div class="col-md-4">
                            <label>Senha do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" name="senha_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label >Confirmar Senha do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" name="confirmar_senha_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Numero de Celular do Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" name="celular_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row row-formatacao">
                        <div class="col-md-4">
                            <label>Foto de Perfil</label>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-camera" id="basic-addon1"></span>
                                <input type="file" class="form-control" name="foto_perfil_usuario" placeholder="senha do usuario" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputGroupSelect01">Nivel de acesso</label>

                            <select class="form-control" name="fk_nivel_acesso" id="inputGroupSelect01">
                                <option selected>escolha...</option>
                                <?php $counter1=-1;  if( isset($nivel) && ( is_array($nivel) || $nivel instanceof Traversable ) && sizeof($nivel) ) foreach( $nivel as $key1 => $value1 ){ $counter1++; ?>
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
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

