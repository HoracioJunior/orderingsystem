<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Fechar ou Abrir Sistema
        </h1>
        <ol class="breadcrumb">
            <li><a href="/gestor"><i class="fa fa-tachometer-alt"></i> Pagina Inicial</a></li>
            <li class="active">Abrir Ou Fechar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-success">
            <div class="box-header ">
                <h3 class="box-title">Fechar e Abrir o Sistema</h3>
            </div>
            <div class="box-body">
                <form  class="fecharAbrir" method="post">
                    <div class="formulario">
                        <div class="form-group">
                            <label for="">Selecionar</label>
                            <select name="manutencao" id="" class="form-control">
                                <option>==Escolha==</option>
                                <option value="1">Abrir</option>
                                <option value="2">Fechar</option>
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
