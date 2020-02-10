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
            <div >
                <form action="/admin/categoria/editar-categoria" method="post">
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

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
<!-- Modalodal-->

</div><!-- /.main-content -->