<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Iniciar Sessão</title>
	<link rel="stylesheet" href="../app/src/vendors/login.css">
    <link rel="stylesheet" href="../app/src/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../app/src/vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="../app/src/vendors/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../app/src/vendors/owlcarousel/css/owl.theme.default.min.css">
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Ordering System</h3>
                        </div>
                        <div class="card-body form-box">
                            <div class="button-box">
                                <button type="button" id="login" class="btn btn-secondary" >Inicar Sessão</button>
                                <button type="button" id="registar" class="btn btn-secondary" >Cadastrar-se</button>
                            </div>
                            <div class="social-media">
                                <span><i class="fab fa-2x fa-facebook"></i></span>
                                <span><i class="fab fa-2x fa-google"></i></span>
                            </div>
                            <form  role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="/admin/login">
                                <div class="form-group">
                                    <label for="uname1">E-mail do Usuario</label>
                                    <input type="email" class="form-control form-control-lg rounded-2" name="username" id="uname1" required="">
                                    <div class="invalid-feedback">intruduza o seu e-mail</div>
                                </div>
                                <div class="form-group">
                                    <label>Senha do Usuario</label>
                                    <input type="password" class="form-control form-control-lg rounded-2" name="userpass" id="pwd1" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">introduza a sua senha!</div>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-md float-center" id="btnLogin">Iniciar Sessão</button>
                            </form>

                            <form role="form" autocomplete="off" id="cadastrar" novalidate="" method="POST" action="">
                                <div class="form-group">
                                    <label for="nome_usuario">Nome do Usuario</label>
                                    <input type="text" class="form-control form-control-lg rounded-2" id="nome_usuario" name="nome_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="apelido_usuario">Apelido do Usuario</label>
                                    <input type="text" class="form-control form-control-lg rounded-2" id="apelido_usuario" name="apelido_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="email_usuario">E-mail do Usuario</label>
                                    <input type="email" class="form-control form-control-lg rounded-2" id="email_usuario" name="email_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="celular_usuario">Numero de Celular</label>
                                    <input type="text" class="form-control form-control-lg rounded-2" id="celular_usuario" name="celular_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="senha_usuario">Senha do Usuario</label>
                                    <input type="password" class="form-control form-control-lg rounded-2" id="senha_usuario" name="senha_usuario" required="">
                                    <div class="invalid-feedback">digite a senha!</div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmar_senha">Confirmar Senha do usuario</label>
                                    <input type="password" class="form-control form-control-lg rounded-2" id="confirmar_senha" name="confirmar_senha" required="">
                                    <div class="invalid-feedback">confirme a tua senha!</div>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-md" id="btnRegistar">Cadastrar-se</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/containe-->
<script src="../app/src/vendors/jquery/jquery.min.js" ></script>
<script src="../app/src/vendors/bootstrap/js/bootstrap.js"></script>
<script src="../app/src/vendors/fontawesome/js/all.js"></script>
<script src="../app/src/vendors/owlcarousel/js/owl.carousel.min.js"></script>
<script src="../app/src/vendors/owlcarousel/js/owl.costum.js"></script>
    <script src="../app/src/vendors/login.js"></script>
<script>
      $("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }

    form.addClass('was-validated');
  });

</script>
    <script>
        $("#btnRegistar").click(function(event) {

            //Fetch form to apply custom Bootstrap validation
            var form = $("#cadastrar")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
        });

    </script>
</body>
</html>