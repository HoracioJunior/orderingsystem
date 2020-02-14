<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="/app/src/vendors/profile.css">
    <link rel="stylesheet" href="/app/src/vendors/main.css">
    <link rel="stylesheet" href="/app/src/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/app/src/vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="/app/src/vendors/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/app/src/vendors/owlcarousel/css/owl.theme.default.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container">
            <a class="navbar-brand text-center"  href=""> Minha Conta</a>
            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> </div>-->
        </div>
    </nav>
</header>
<section id="about-us" class="py-5">
    <div class="container">
        <div class="row">
            <!--left sidebar-->
            <div class="col-md-3 pr-md-4">
                <div class="sidebar-left">
                    <!--sidebar menu-->
                    <ul class="list-unstyled sidebar-menu pl-md-2 pr-md-0">
                        <li>
                            <a class="sidebar-item active d-flex justify-content-between align-items-center" href="/cliente">
                                Dashboard
                                <span class="fas fa-tachometer-alt"></span>
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="/cliente/meu-perfil">
                                Meu Perfil
                                <span class="fas fa-user"></span>
                            </a>
                        </li>
                  


                        <li>
                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="/cliente/minhas-ordens">
                                Minhas Ordens
                                <span class="fas fa-shopping-basket"></span>
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="/cliente/mudar-senha">
                                Mudar Senha
                                <span class="fas fa-key"></span>
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="/logout">
                                Terminar a Sessão
                                <span class="fas fa-sign-out-alt"></span>
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="/cliente/eliminar-conta">
                                Eliminar Conta
                                <span class="fas fa-trash"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>