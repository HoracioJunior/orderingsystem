<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Página Inicial
            <small>Area Administrativa</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/gestor"><i class="fa fa-tachometer-alt"></i>  Página Inicial</a></li>
            <li class="active">Inicio</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Usuarios cadstrados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users-cog"></i>
                    </div>
                    <a href="/admin/usuarios/list-usuarios" class="small-box-footer">
                        Mais informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($acess) && ( is_array($acess) || $acess instanceof Traversable ) && sizeof($acess) ) foreach( $acess as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Numero de Acessos</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-alt"></i>
                    </div>
                    <a href="/admin/acessos-de-usuarios" class="small-box-footer">
                        Mais informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($delivers) && ( is_array($delivers) || $delivers instanceof Traversable ) && sizeof($delivers) ) foreach( $delivers as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Entregadores(Delivers)</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Mais informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($online) && ( is_array($online) || $online instanceof Traversable ) && sizeof($online) ) foreach( $online as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Usuarios Online</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Mais informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div><!-- /.row -->
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