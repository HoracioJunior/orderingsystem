<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="contacto">
    <div class="container contact-form">
        <div class="contact-image">
            <img src="app/src/img/contact.png" alt="rocket_contact"/>
        </div>
        <form method="post">
            <h3>Deixe-nos uma Mensagem</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Teu Nome*" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Teu Email*" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Numero do Celular*" value="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Sua Mensagem*" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Enviar Mensagem" />
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>