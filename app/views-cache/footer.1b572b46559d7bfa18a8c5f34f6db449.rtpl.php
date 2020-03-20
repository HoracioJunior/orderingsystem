<?php if(!class_exists('Rain\Tpl')){exit;}?>


<footer class="nb-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about">
                    <div class="social-media">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" title=""><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="fab fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#" title=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Centro de Ajuda</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Como Pagar?</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Informações do Cliente</h2>
                    <ul class="list-unstyled">
                        <li><a href="/contacto" title=""><i class="fa fa-angle-double-right"></i>Sobre Nos</a></li>
                        <li><a href="/contacto" title=""><i class="fa fa-angle-double-right"></i> Contacte-nos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Privacidade & Segurança</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Termos de uso $ Privacidade</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i>Politicas de Devolução</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Pagamentos</h2>
                    <p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><img src="/app/src/img/paypal.png" alt="" style="width: 100px;"></li>
                        <li class="list-inline-item"><img src="/app/src/img/paypal.png" alt="" style="width: 100px;"></li>
                    </ul>
                    </p>


                </div>
            </div>
        </div>
    </div>

    <section class="copyright text-center">
        <div class="container">
            <p>Copyright © 2020. Online Food Ordering System.</p>
        </div>
        </div>
    </section>
</footer>

<script src="/app/src/vendors/jquery/jquery.min.js" ></script>
<script src="/app/src/vendors/bootstrap/js/bootstrap.js"></script>
<script src="/app/src/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="/app/src/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script src="/app/src/vendors/rating/js/jquery.rateyo.min.js"></script>
<script src="/app/src/vendors/fontawesome/js/all.js"></script>
<script src="/app/src/vendors/owlcarousel/js/owl.carousel.min.js"></script>
<script src="/app/src/vendors/owlcarousel/js/owl.costum.js"></script>
<script src="/app/src/vendors/grid-list.js"></script>
<script src="/app/src/vendors/xhttp.js"></script>
<script src="/app/src/vendors/addCart.js"></script>

<script>

    function showModal(id) {
        $(".modal-body #id_produto").attr('value',id);
    }

    $(function () {
        $(".rate").attr('class',"rateYo");
          $(".rateYo").rateYo({
            starWidth: "17px",
            normalFill: "#008F95",
            rating: 0.5,
            ratedFill: "#E74C3C",
            multiColor: {

                "startColor": "#E74C3C",
                "endColor"  : "#015249"
            },
              onChange: function (rating, rateYoInstance) {
                  $(this).next().text(rating);
              }
        });
        $(".rateYo").rateYo().on("rateyo.change",function (e,data) {
            var rating =data.rating;
            $(this).parent().find('.result').text(' '+rating);
            $(".modal-body #qtd_estrelas").attr('value',rating);
        });

    });

</script>


</body>
</html>