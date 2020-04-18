<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Gerar Relatórios
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/gestor"><i class="fa fa-tachometer-alt"></i> Pagina Inicial</a></li>
                    <li class="active">Gerar Relatórios</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box box-success">
                    <div class="box-header ">
                        <h3 class="box-title">Relatorio</h3>
                    </div>
                    <div class="box-body">
                        <form action="/gestor/relatorio/gerar" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tipo de Relatório</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="tipo" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            <option>==Escolha==</option>
                                            <option value="1">Vendas</option>
                                            <option value="2">Pedidos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Inicial</label>
                                        <input type="date" name="inicio" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Final</label>
                                        <input type="date" name="fim" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Gerar relatório</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.content -->
</div>
        <!-- /.content-wrapper -->


