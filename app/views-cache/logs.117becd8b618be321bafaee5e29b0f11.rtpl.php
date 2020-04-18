<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Acessos de Usuarios
            <small>Lista de Acessos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-tachometer-alt"></i>Página Inicial</a></li>
            <li class="active">Lista de Acessos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Acessos</h3>
            </div>
            <div class="box-body">
                <div class="tabela">
                    <table id="tabela" class="table table-responsive  table-striped table-bordered" style="width:100%">
                        <thead class="px-10">
                        <tr >
                            <th scope="col">#Cod</th>
                            <th scope="col">IP ADDRESS</th>
                            <th scope="col">Inicio de Sessao</th>
                            <th scope="col">Fim de Sessao</th>
                            <th scope="col">Nome do Usuário</th>
                            <th scope="col">Permissão</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter1=-1;  if( isset($logs) && ( is_array($logs) || $logs instanceof Traversable ) && sizeof($logs) ) foreach( $logs as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th><?php echo htmlspecialchars( $value1["id_logs"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <td><?php echo htmlspecialchars( $value1["ipaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inicio_sessao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["fim_sessao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <?php if( ($value1["fk_id_nivel_acesso"]) ==1 ){ ?>
                                    Administrador
                                <?php }elseif( ($value1["fk_id_nivel_acesso"]) == 2 ){ ?>
                                Gestor
                                <?php }elseif( ($value1["fk_id_nivel_acesso"]) == 3 ){ ?>
                                Cliente
                                <?php }else{ ?>
                                Deliver
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
