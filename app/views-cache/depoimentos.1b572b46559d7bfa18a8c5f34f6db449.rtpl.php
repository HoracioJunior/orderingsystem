<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section class="mt-4">
    <div class="container ">

        <div class="titulo text-center">
            <h1 class="">Como foi a expriência?</h1>
            <hr class="separator"/>
            <small class="text-muted">Conte-nos o que achou do sistema e atendimento</small>
        </div>
        <form action="/depoimentos" method="post">
            <div class="depoimento-caixa">
                <div class="form-group">
                    <label for="nome_usuario">Seu Nome</label>
                    <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars( $dados["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <input type="text" value="<?php echo htmlspecialchars( $dados["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control form-control-lg rounded-2" id="nome_usuario" name="nome_usuario" required="">
                </div>
                <div class="form-group">
                    <label for="nome_usuario">O que tens a deixar saber</label>
                    <textarea name="depoimento" class="form-control" id="" cols="30" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary bnt-search">Enviar Mensagem</button>
                </div>
            </div>
        </form>
    </div>
</section>


<?php require $this->checkTemplate("testemunhos");?>