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
                  <div class="col-lg-9 col-md-6 mx-auto">
                     <!-- form card login -->
                     <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                           <h3 class="mb-0 text-center">Recuperação de senha</h3>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                          <strong>Olá!</strong> Para recuperar a sua senha é necessario que forneça-nós alguns dados de cadastro. Preencha o formulario abaixo com os dados que usaste para cadastrar-se.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="card-body form-box">
                           <form  role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="/check-email">
                              <div class="row">
                                 <div class="col-md-12 mb-3">
                                    <label for="">E-mail do Usuario</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          <i class="fa fa-envelope"></i>
                                          </span>
                                       </div>
                                       <input type="email" name="email_usuario" class="form-control rounded-2" placeholder="digite o teu e-mail" required>
                                       <div class="invalid-feedback">
                                          intruduza o seu e-mail
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-secondary btn-md float-center" id="btnLogin">Submeter &nbsp;<i class="fa  fa-arrow-circle-right"></i></button>
                           </form>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="links-login recuperar">
                                 <a href="/login"><i class="fa  fa-arrow-circle-left"></i> &nbsp;Voltar</a>
                              </div>
                           </div>
                           
                        </div>
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
      
   </body>
</html>