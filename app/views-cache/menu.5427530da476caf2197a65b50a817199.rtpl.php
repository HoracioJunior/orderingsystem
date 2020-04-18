<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cardapio
            <small>Lista de Itens do Cardapio</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/gestor/menu/menu-itens"><i class="fa fa-tachometer-alt"></i> Cardapio</a></li>
            <li class="active">Lista de Itens</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
                <?php if( $sucessoDelete != '' ){ ?>
                <div class="alert alert-success" role="alert">
                    <b><?php echo htmlspecialchars( $sucessoDelete, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>
            <div class="box-body">
                <table id="tabela" class="table  table-responsive table-striped table-bordered">
                    <thead class="px-10">
                    <tr >
                        <th scope="col">#Cod</th>
                        <th scope="col">Imagem do Item</th>
                        <th scope="col">Nome do Item</th>
                        <th scope="col">Descrição do Item</th>
                        <th scope="col">Preço do Item</th>
                        <th scope="col">Accoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <th ><?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                        <td>
                            <img src="/app/uploads/<?php echo htmlspecialchars( $value1["img_item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="width: 150px; height: 100px;" alt="imagem do produto">
                        </td>
                        <td><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["descricao_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["preco_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>
                            <a href="/gestor/menu/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/editar-item"  >Editar <i class="fa fa-edit "></i>
                            </a>
                            <a href="/gestor/menu/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/eliminar-item" class="text-danger ml-2">Eliminar <i class="fa fa-trash"></i></a>
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

