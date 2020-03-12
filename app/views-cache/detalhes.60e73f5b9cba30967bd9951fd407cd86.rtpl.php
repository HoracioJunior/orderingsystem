<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Content-->
<div class="col-md-9" xmlns="http://www.w3.org/1999/html">
    <div class="dashboard-area">
        <!--Todo conteudo aqui-->
        <div class="row">
            <section class="invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> AdminLTE, Inc.
                            <small class="pull-right">Date: 2/10/2014</small>
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-md-7 invoice-col">
                        Dados Pessoais
                        <address>
                            <?php $counter1=-1;  if( isset($detalhes) && ( is_array($detalhes) || $detalhes instanceof Traversable ) && sizeof($detalhes) ) foreach( $detalhes as $key1 => $value1 ){ $counter1++; ?>
                            <strong></strong><br>
                            <strong>Endereço de Entrega:</strong> <?php echo htmlspecialchars( $value1["endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
                            <strong>Contacto:</strong> <?php echo htmlspecialchars( $value1["celular"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
                            <strong> Contacto Alt.:</strong> <?php echo htmlspecialchars( $value1["celular_alternativo"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
                            <?php } ?>
                        </address>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                    <div class="col-md-5 invoice-col">
                        <b>Invoice #007612</b><br>
                        <br>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Nome do Item</th>
                                <th>Preço do Item</th>
                                <th>Quantidade</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $counter1=-1;  if( isset($pedido) && ( is_array($pedido) || $pedido instanceof Traversable ) && sizeof($pedido) ) foreach( $pedido as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                                <td><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["preco_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["qtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">

                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="invoice-print.html" target="_blank" class="btn bnt-search btn-primary" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</section>