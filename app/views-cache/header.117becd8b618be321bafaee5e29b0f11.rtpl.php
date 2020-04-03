<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ordering System</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/app/src/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/app/src/admin/fontawesome/css/all.css">
    <link rel="stylesheet" href="/app/src/assets/css/mine.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/app/src/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/app/src/admin/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/app/src/admin/plugins/datatables/dataTables.bootstrap.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>O</b>SY</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Ordering</b>System</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

                <span class="sr-only"><i class="fa fa-tachometer-alt"></i></span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/app/src/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/app/src/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/admin/minha-conta" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/admin/logout" class="btn btn-default btn-flat">Terminar Sessão</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/app/src/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $dados["apelido_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Navegação</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="/admin"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li class="treeview">
                    <a href="/admin/usuarios/list-usuarios"><i class="fa fa-users"></i> <span>Usuários</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/usuario/cadastrar-usuario">Cadastrar Usuário</a></li>
                        <li><a href="/admin/usuarios/list-usuarios">Listar Usuários</a></li>
                    </ul>
                </li>

                <li><a href="/admin/acessos-de-usuarios"><i class="fa fa-file-alt"></i> <span>Lista de Acessos</span></a></li>
                <li><a href="/admin/minha-conta"><i class="fa fa-user"></i> <span>Minha Conta</span></a></li>
                <li><a href="/admin/manutencao-do-sistema"><i class="fa fa-cogs"></i> <span>Manutenção</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>