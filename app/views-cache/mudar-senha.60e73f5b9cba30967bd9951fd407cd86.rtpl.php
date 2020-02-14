<?php if(!class_exists('Rain\Tpl')){exit;}?><!--Content-->
<div class="col-md-9">
    <div class="dashboard-area">
        <!--Todo conteudo aqui-->
        <div class="row">
            <div class="col-12">
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-info-circle"></i> Atenção! Por uma questão de seguraça após trocar a tua seha sera rederecionado para a página de Login para que seja autenticado com a nova senha</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        </div>
        <form action="/cliente/mudar-senha" method="POST">
        <div class="row">
            <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            <div class="col-6">
                 <div class="form-group">
                    <label for="senha">Sua senha actual
                        <strong class="text-danger">*</strong>
                    </label>
                    <input type="password" class="form-control form-control-lg rounded-2" name="senha_antiga" id="senha" placeholder="informe a senha actual" required="">
                    <div class="invalid-feedback">intruduza a sua senha</div>
                  </div>
            </div>
        </div>
        <div class="row">
             <div class="col-6">
                 <div class="form-group">
                    <label for="senha1">Nova senha
                        <strong class="text-danger">*</strong>
                    </label>
                    <input type="password" class="form-control form-control-lg rounded-2" name="senha_nova" id="senha1" placeholder="informe a senha" required="">
                    <div class="invalid-feedback">intruduza a sua senha</div>
                  </div>
            </div>
        </div>
        <div class="row">
             <div class="col-6">
                 <div class="form-group">
                    <label for="senha2">Confirmar a senha
                     <strong class="text-danger">*</strong>
                 </label>
                    <input type="password" class="form-control form-control-lg rounded-2" name="senha_confirmar" id="senha2" placeholder="confirmar a senha" required="">
                    <div class="invalid-feedback">intruduza a sua senha</div>
                  </div>

                  <div class="butoes">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>

        </div>
     </form>
        <!--Fimm Todo conteudo aqui-->
    </div>
</div>
</div>
</div>
</section>