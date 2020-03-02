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
                        Usuarios &amp; Lista de Usuarios
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <!-- form inicio-->

            <div class="tabela">
                <?php if( $feedbacks != '' ){ ?>
                <div class="alert alert-success" role="alert">
                    <b><?php echo htmlspecialchars( $feedbacks, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>
                <table class="table  table-responsive usuarios">
                    <thead class="px-10">
                    <tr >
                        <th scope="col">#Cod</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Apelido</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Accoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter1=-1;  if( isset($listaUsers) && ( is_array($listaUsers) || $listaUsers instanceof Traversable ) && sizeof($listaUsers) ) foreach( $listaUsers as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <th ><?php echo htmlspecialchars( $value1["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                        <td><?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["email_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["celular_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>


                                <?php if( $value1["usuario_status"]=='activo' ){ ?>
                            <a href="/admin/usuarios/list-usuarios/<?php echo htmlspecialchars( $value1["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/bloquear" class="btn btn-danger btn-sm">Bloqueiar<i class="fa fa-lock "></i></a>
                                <?php }else{ ?>
                            <a href="/admin/usuarios/list-usuarios/<?php echo htmlspecialchars( $value1["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/desbloquear" class="btn btn-primary btn-sm">Desbloquear<i class="fa fa-lock "></i></a>
                                <?php } ?>


                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /form -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->