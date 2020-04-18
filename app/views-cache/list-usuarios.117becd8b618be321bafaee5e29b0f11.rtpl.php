<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            USUÁRIOS
            <small>Lista de usuarios</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-tachometer-alt"></i>Página Inicial</a></li>
            <li class="active">Lista de Usuarios</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Usuarios</h3>
            </div>
            <div class="box-body">
                <div class="tabela">
                    <?php if( $feedbacks != '' ){ ?>
                    <div class="alert alert-success" role="alert">
                        <b><?php echo htmlspecialchars( $feedbacks, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>
                    <table id="tabela" class="table table-responsive  table-striped table-bordered" style="width:100%">
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
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
