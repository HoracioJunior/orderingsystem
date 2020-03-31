<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Painel Administrativo</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/app/src/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/app/src/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- text fonts -->
    <link rel="stylesheet" href="/app/src/assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="/app/src/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="/app/src/assets/css/mine.css"/>
    <link rel="stylesheet" href="/app/src/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/app/src/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/app/src/assets/dataTable/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="/app/src/assets/dataTable/css/buttons.bootstrap.min.css" />
    <!-- ace settings handler -->
    <script src="/app/src/assets/js/ace-extra.min.js"></script>

</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="/admin" class="navbar-brand">
                <small class="text-uppercase">
                    <i class="fa fa-leaf"></i>
                    FAST FOOD Painel Administrativo
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/app/src/assets/images/avatars/user.jpg" alt="foto de usuario" />
                        <span class="user-info">
									<small>Benvindo</small>
                                    <?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="/admin/perfil/editar-perfil">
                                <i class="ace-icon fa fa-edit"></i>
                                Meu Perfil
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/admin/logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                Terminar Sessão
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar  responsive  ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->
        <ul class="nav nav-list">
            <li class="active">
                <a href="/admin">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text">Usuarios <b class="counters"><?php echo htmlspecialchars( $total["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="/admin/usuario/cadastrar-usuario">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Adicionar Usuario
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="/admin/usuarios/list-usuarios">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Listar Usuarios
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>

                    <span class="menu-text">
								Logs de Acesso
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Ver Logs de Acesso
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">Minha Conta</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="/admin/perfil/editar-perfil"><i class="menu-icon fa fa-caret-right"></i>
                            Meu Perfil
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="/admin/perfil/mudar-senha"><i class="menu-icon fa fa-caret-right"></i>
                            Mudar Senha
                        </a>
                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
        </ul><!-- /.nav-list -->



        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>