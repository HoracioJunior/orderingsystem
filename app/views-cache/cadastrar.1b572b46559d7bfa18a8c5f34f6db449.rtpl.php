<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastrar-se</title>
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
                <div class="col-lg-8 col-md-10 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Ordering System</h3>
                        </div>
                        <div class="card-body form-box">
                            <div class="social-media">
                                <span><i class="fab fa-2x fa-facebook"></i></span>
                                <span><i class="fab fa-2x fa-google"></i></span>
                            </div>

                            <form role="form" autocomplete="off" id="cadastrar" novalidate="" method="POST" action="/cadastrar-usuario">
                                <?php if( $emailError != '' ){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <b><?php echo htmlspecialchars( $emailError, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                <?php if( $falha != '' ){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <b><?php echo htmlspecialchars( $falha, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="nome_usuario">Nome do Usuario<b class="text-danger">*</b></label>
                                    <input type="text" class="form-control form-control rounded-2" id="nome_usuario" name="nome_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="apelido_usuario">Apelido do Usuario<b class="text-danger">*</b></label>
                                    <input type="text" class="form-control form-control rounded-2" id="apelido_usuario" name="apelido_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="email_usuario">E-mail do Usuario<b class="text-danger">*</b></label>
                                    <input type="email" class="form-control form-control rounded-2" id="email_usuario" name="email_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="celular_usuario">Numero de Celular<b class="text-danger">*</b></label>
                                    <input type="text" class="form-control form-control rounded-2" id="celular_usuario" name="celular_usuario" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="senha_usuario">Senha do Usuario<b class="text-danger">*</b></label>
                                    <input type="password" class="form-control form-control rounded-2" id="senha_usuario" name="senha_usuario" required="">
                                    <div class="invalid-feedback">digite a senha!</div>
                                </div>
                                <input type="hidden" name="fk_nivel_acesso" value="3">
                                <div class="form-group">
                                    <label for="confirmar_senha">Confirmar Senha do usuario<b class="text-danger">*</b></label>
                                    <input type="password" class="form-control form-control rounded-2" id="confirmar_senha" name="confirmar_senha" required="">
                                    <div class="invalid-feedback">confirme a tua senha!</div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="termos" required>
                                    <label for="termos">Concordo com os <a href="/termos">Termos e Condições de Uso<b class="text-danger">*</b></a> </label>
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
    <script>
        function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}
    </script>
</body>
</html>