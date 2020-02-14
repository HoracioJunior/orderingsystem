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
                        Categorias &amp; Lista de Categorias
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- form inicio-->
            <div class="tabela">
                <a href="/admin/menu/cadastrar-item" class="btn btn-primary btn-lg">Adicionar item no Menu </a>
                <table class="table  table-responsive usuarios">
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
                            <a href="/admin/menu/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/editar-item"  >Editar <i class="fa fa-edit "></i>
                                </a>
                            <a href="/admin/menu/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/eliminar-item" class="text-danger ml-2">Eliminar <i class="fa fa-trash"></i></a>
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
<!-- Modal  cadastrar-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="/admin/menu/categorias/add" method="post">
            <div class="modal-body">

                    <div class="row row-formatacao">
                        <div class="col-md-8 col-formatacao">
                            <label for="">Nome da Categoria</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="nome da categoria" name="nome_categoria" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            </form>
        </div>
    </div>
</div> <!--Fim de Modal-->

</div><!-- /.main-content -->