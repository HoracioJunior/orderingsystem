<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Categoria
            <small>Editar categoria</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Cardapio</a></li>
            <li class="active">Editar categoria</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header ">
                <h3 class="box-title">Editar categoria</h3>
            </div>
            <div class="box-body">
                <!-- form inicio-->
                <div >
                    <form action="/gestor/categoria/editar-categoria" method="post">
                        <div class="">
                            <div class="row row-formatacao">
                                <div class="col-md-8 col-formatacao">
                                    <label for="">Nome da Categoria</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" value="<?php echo htmlspecialchars( $categoria["nome_categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control" placeholder="nome da categoria" name="nome_categoria" >
                                        <input type="hidden" value="<?php echo htmlspecialchars( $categoria["id_produto_ctg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="id_categoria">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <button type="reset" class="btn btn-danger" >Cancelar</button>
                        </div>
                    </form>

                </div>
                <!-- /form -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
