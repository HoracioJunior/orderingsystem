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


                <div class="row">
                    <di class="col-md-5">
                        <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">
                            Adicionar Categoria
                        </button>
                    </di>
                    <div class="col-md-7">
                        <?php if( $sucesso != '' ){ ?>
                        <div class="alert alert-success" role="alert">
                            <b><?php echo htmlspecialchars( $sucesso, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>

                        <?php if( $existe != '' ){ ?>
                        <div class="alert alert-danger" role="alert">
                            <b><?php echo htmlspecialchars( $existe, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>
                    </div>
                </div>


            <!-- form inicio-->
            <div class="tabela mt-3">
                <table class="table  table-responsive usuarios">
                    <thead class="px-10">
                    <tr >
                        <th scope="col">#Cod</th>
                        <th scope="col">Nome da Categoria</th>
                        <th scope="col">Data do Cadastro</th>
                        <th scope="col">Accoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter1=-1;  if( isset($categoria) && ( is_array($categoria) || $categoria instanceof Traversable ) && sizeof($categoria) ) foreach( $categoria as $key1 => $value1 ){ $counter1++; ?>
                    <tr>
                        <th ><?php echo htmlspecialchars( $value1["id_produto_ctg"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                        <td><?php echo htmlspecialchars( $value1["nome_categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["data_cadastro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>
                            <a href="/admin/categoria/<?php echo htmlspecialchars( $value1["id_produto_ctg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/editar-categoria"  >Editar <i class="fa fa-edit "></i>
                                </a>
                            <a href="/admin/categoria/<?php echo htmlspecialchars( $value1["id_produto_ctg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/eliminar-categoria" class="text-danger ml-2">Eliminar <i class="fa fa-trash"></i></a>
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