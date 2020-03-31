<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="hero-delivery">
	
</section>

<section class="section-cadstrar">
	<div class="container">
		<div class="row mb-2 ml-1">
            <h5 class="subtitulo">Dados Da Empresa</h5>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
		<div class="row mb-2">
			<div class="col-md-6">
                <label for="nome_empresa">Nome da Empresa<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                    </div>
                    <input type="text" name="nome_empresa" id="nome_empresa" class="form-control" placeholder=" informe o onome da empresa" required>
                    <div class="invalid-feedback">
                        informe o nome da empresa
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="endereco_empresa">Endereço da Empresa (<small>Localização</small>)<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        	<i class="fa fa-location-arrow"></i>
                        </span>
                    </div>
                    <input type="text" name="endereco_empresa" id="endereco_empresa" class="form-control rounded-2" placeholder="infrome o seu nome aqui" required>
                    <div class="invalid-feedback">
                        informe o seu nome
                    </div>
                </div>
            </div>
		</div>
		<div class="row mb-2">
			<div class="col-md-7">
                <label for="email_empresa">Correio Eletronico da Empresa<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email_empresa" id="email_empresa" class="form-control" placeholder=" informe o email da empresa" required>
                    <div class="invalid-feedback">
                        informe o email da empresa
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <label for="contacto_empresa">Contacto da Empresa<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone-alt"></i></span>
                    </div>
                    <input type="text" name="contacto_empresa" id="contacto_empresa" class="form-control rounded-2" placeholder="infrome o contacto" required>
                    <div class="invalid-feedback">
                        infrome o contacto
                    </div>
                </div>
            </div>
		</div>
		<div class="row mb-2">
			<div class="col-md-5">
                <label for="contacto_alt">Contacto Alternativo(<small>Opcional</small>)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone-alt"></i></span>
                    </div>
                    <input type="text" name="contacto_alt" id="contacto_alt" class="form-control" placeholder=" informe o onome da empresa">
                    <div class="invalid-feedback">
                        informe o onome da empresa
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <label for="alvara_empresa">Alvará da Empresa (<small>Formatos: PDF,DOC, PNG e JPG</small>)<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                    </div>
                    <input type="file" name="alvara_empresa" id="alvara_empresa" class="form-control"  required>
                    <div class="invalid-feedback">
                        forneça o alvará
                    </div>
                </div>
            </div>
		</div>
		<div class="row mb-2 mt-4 ml-2">
            <h5 class="subtitulo">Credenciais de Acesso</h5>
        </div>
        <div class="row mb-1">
			<div class="col-md-4">
                <label for="acesso_email">E-mail<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        	<i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" name="acesso_email" id="acesso_email" class="form-control" placeholder=" informe o email" required>
                    <div class="invalid-feedback">
                        informe o email para acesso
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="senha">Palavra-Pass<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" name="senha" id="senha" class="form-control rounded-2" placeholder="infrome a senha" required>
                    <div class="invalid-feedback">
                        informe a senha
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="senha">Confirmar Palavra-Pass<strong class="text-danger">*</strong></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" name="c_senha" id="c_senha" class="form-control rounded-2" placeholder="confirmar a  senha" required>
                    <div class="invalid-feedback">
                        confirmar a senha
                    </div>
                </div>
            </div>
		</div>
		<div class="row mb-2">
			<div class="custom-control custom-checkbox ml-3">
               <input type="checkbox" class="custom-control-input" name="termos" id="termos"  required>
               <label for="termos" class="custom-control-label">Concordo com os <a href="/termos">Termos e Condições de Uso<b class="text-danger">*</b></a> </label>
            </div>
		</div>
	</form>
	</div>
</section>