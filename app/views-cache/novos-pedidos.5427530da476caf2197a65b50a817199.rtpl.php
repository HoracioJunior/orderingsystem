<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pedidos
            <small>Lista de Novos Pedidos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Pedidos</a></li>
            <li class="active"> Novos Pedidos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

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
