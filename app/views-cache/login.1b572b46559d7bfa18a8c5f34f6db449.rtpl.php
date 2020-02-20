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
                           <div class="social-media">
                              <span>
                              <i class="fab fa-2x fa-facebook"></i>
                              </span>
                              <span>
                              <i class="fab fa-2x fa-google"></i>
                              </span>
                           </div>
                           <?php if( $erroLogin != '' ){ ?>
                           <div class="alert alert-danger" role="alert">
                              <b><?php echo htmlspecialchars( $erroLogin, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <?php } ?>
                           <form  role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="/login">
                              <div class="row">
                                 <div class="col-md-12 mb-3">
                                    <label for="">E-mail do Usuario</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          <i class="fa fa-envelope"></i>
                                          </span>
                                       </div>
                                       <input type="email" name="username" class="form-control rounded-2" placeholder="digite o teu e-mail" required>
                                       <div class="invalid-feedback">
                                          intruduza o seu e-mail
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group">
                                       <label>Password</label>
                                       <div class="input-group" id="show_hide_password">
                                          <input class="form-control" type="password" name="userpass" required>
                                          <div class="input-group-prepend">
                                             <a href="" class="input-group-text">
                                             <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-secondary btn-md float-center" id="btnLogin">Iniciar Sessão</button>
                           </form>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="links-login">
                                 <a href="/recuperar-senha">Recuperar senha</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="links-login float-right">
                                 <a href="/cadastrar-usuario">Cadastre-se aqui</a>
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
      <script>
         $(document).ready(function() {
         $("#show_hide_password a").on('click', function(event) {
         event.preventDefault();
         if($('#show_hide_password input').attr("type") == "text"){
             $('#show_hide_password input').attr('type', 'password');
             $('#show_hide_password i').addClass( "fa-eye-slash" );
             $('#show_hide_password i').removeClass( "fa-eye" );
         }else if($('#show_hide_password input').attr("type") == "password"){
             $('#show_hide_password input').attr('type', 'text');
             $('#show_hide_password i').removeClass( "fa-eye-slash" );
             $('#show_hide_password i').addClass( "fa-eye" );
         }
         });
         });
      </script>
   </body>
</html>