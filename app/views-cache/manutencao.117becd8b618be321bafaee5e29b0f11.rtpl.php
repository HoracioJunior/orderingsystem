<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-tachometer-alt"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-success">
            <div class="box-header ">
                <h3 class="box-title">Activar e Desativar modo Manutenção do Sistema</h3>
            </div>
            <div class="box-body">
                <form  class="manutencao" method="post">
                    <div class="formulario">
                        <div class="form-group">
                            <label for="">Selecionar</label>
                            <select name="manutencao" id="" class="form-control">
                                <option value="1">Activar</option>
                                <option value="2">Desactivar</option>
                            </select>
                            <div class="form-group excutar">
                                <button class="btn btn-block btn-success btn-flat" type="submit">Executar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->