<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ordering SYS</title>
	<link rel="stylesheet" href="/app/src/vendors/main.css">
	<link rel="stylesheet" href="/app/src/vendors/fab.css">
	<link rel="stylesheet" href="/app/src/vendors/flutuante.css">
	<link rel="stylesheet" href="/app/src/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/app/src/vendors/fontawesome/css/all.css">
	<link rel="stylesheet" href="/app/src/vendors/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/app/src/vendors/owlcarousel/css/owl.theme.default.min.css">

	<style>
		.floating-btn{
			width: 50px;
			height: 50px;
			background-color: #1b6d85;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			color: #ffffff;
			font-size: 20px;
			position: fixed;
			right: 20px;
			bottom: 20px;
			cursor: pointer;
			transition: background 0.25s;
		}
		.floating-btn:active{
			background-color: #1b6d70;
		}
		.floating-btn a{
			text-decoration: none;
			color: #ffffff;
		}
		.floating-btn:hover{
			background-color: #1b6d70;
		}
	</style>

</head>
<body>
<section class="preheader ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<span><i class="fa fa-envelope"></i> info@ordering.store</span>
					</div>
					<div class="col-md-6">
						<span><i class="fa fa-1x fa-phone"></i> +258 8483 96068/8483 96068 </span>
					</div>
				</div>

			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 ">
						<a href="/cliente" class="float-right btn btn-secondary btn-header">
							<i class="fa fa-user"></i>&nbsp;Minha Conta
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="float-right btn btn-secondary btn-header">
							<i class="fa fa-user"></i>&nbsp;Tornar-se Deliver
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<header id="header" class="">
	<nav class="navbar navbar-expand-lg  bgCabecalho">
		<a class="navbar-brand" href="/">Order & Delivery</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/menu">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contacto">Sobre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/carrinho">
             <span>
              <i class="fa fa-shopping-cart "></i>
				 <sup><span class="nav-link badge badge-info"></span></sup>
          </span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/login">Cadastra-se</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/login">Entrar</a>
				</li>


			</ul>
		</div>
	</nav>
</header><!-- /header -->
<div class="floating-btn" style="">
	<a href="/contacto"><i class="fa fa-question"></i></a>
</div>
		