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
                        Produto &amp; ADD Item
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <!-- form inicio-->
            <form action="/admin/menu/cadastrar-item" method="post">
                <div class="row row-formatacao">
                    <div class="col-md-4 col-formatacao">
                        <label >Nome do Item</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-barcode"></i></span>
                            <input type="text" class="form-control" placeholder="Nome do Item" name="nome_produto" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label >Categoria do Item</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-align-justify"></i></span>
                            <select class="form-control" name="fk_categoria">
                                <option>==Escolha a Categoria==</option>
                                <?php $counter1=-1;  if( isset($categoria) && ( is_array($categoria) || $categoria instanceof Traversable ) && sizeof($categoria) ) foreach( $categoria as $key1 => $value1 ){ $counter1++; ?>
                                <option value="<?php echo htmlspecialchars( $value1["id_produto_ctg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label >Preço do Item</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="preco_produto" placeholder="preço do item" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row row-formatacao">
                    <div class="col-md-4">
                        <label >Descrição do Item</label>
                        <div class="input-group">
                            <span class="input-group-addon" ></span>
                            <textarea class="form-control" rows="3" name="descricao_produto"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label >Foto do item</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1 "><i class="fa fa-camera"></i></span>
                            <input type="file" class="form-control" name="img_produto" placeholder="Imagem ou Foto do produto" aria-describedby="basic-addon1">
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-md-6 ">
                        <button type="submit" name="btn_cadastrar" class="btn btn-success ">Salvar Item</button>
                        <button type="reset" name="btn_cancelar" class="btn btn-danger">Cancelar</button>
                    </div>

                </div>
            </form><!-- /form -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->