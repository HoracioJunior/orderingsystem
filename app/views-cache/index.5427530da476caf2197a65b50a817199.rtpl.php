<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Página Inicial
            <small>Area Administrativa</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-tachometer-alt"></i>  Página Inicial</a></li>
            <li class="active">Inicio</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($clientes) && ( is_array($clientes) || $clientes instanceof Traversable ) && sizeof($clientes) ) foreach( $clientes as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Meus Clientes</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Mais Informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php $counter1=-1;  if( isset($orders) && ( is_array($orders) || $orders instanceof Traversable ) && sizeof($orders) ) foreach( $orders as $key1 => $value1 ){ $counter1++; ?><?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h3>

                        <p>Novos Pedidos</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <a href="/gestor/pedidos/novos-pedidos" class="small-box-footer">
                        Mais informação <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>29</h3>

                        <p>Vendas Diarias</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-arrow-down"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="box box-primary">

            <div class="box-body">
                <table id="tabela" class="table  table-responsive table-striped table-bordered">
                    <thead class="px-10">
                    <tr >
                        <th scope="col">#Cod</th>
                        <th scope="col">Nome do Cliente</th>
                        <th scope="col">Total</th>
                        <th scope="col">Data e Hora</th>
                        <th scope="col">Acções</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter1=-1;  if( isset($pedido) && ( is_array($pedido) || $pedido instanceof Traversable ) && sizeof($pedido) ) foreach( $pedido as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <td ><?php echo htmlspecialchars( $value1["id_pedidos"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $value1["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["total_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["data_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm" >Detalhes</a>
                            <a href="" class="btn btn-success btn-sm" >Despachar</a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
