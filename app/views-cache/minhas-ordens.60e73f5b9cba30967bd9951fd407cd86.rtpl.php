<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Content-->
<div class="col-md-9">
    <div class="dashboard-area">
        <!--Todo conteudo aqui-->
        <div class="row ">
            <div class="col-12 coluna">
                <table id="example" class="table  table-responsive">
                    <thead class="bg-dark" style="color: #ffffff">
                    <tr>
                        <th>Data do Pedido</th>
                        <th>Estado do Pedido</th>
                        <th>Quantidade de Itens</th>
                        <th>Total Pago</th>
                        <th>Detalhes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter1=-1;  if( isset($pedido) && ( is_array($pedido) || $pedido instanceof Traversable ) && sizeof($pedido) ) foreach( $pedido as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <td><?php echo htmlspecialchars( $value1["data_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["status_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["qtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["total_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><a href="/cliente/meu-pedido/<?php echo htmlspecialchars( $value1["id_pedidos"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" class="btn btn-sm btn-primary">Detalhes</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
   <!--Fimm Todo conteudo aqui-->
    </div>
</div>
</div>
</div>
</section>