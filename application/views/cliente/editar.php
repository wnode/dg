<?php echo form_open('cliente/editar/'.$cliente['clientes_id'],array("class"=>"form-horizontal")); ?>

	
	<div class="row">
                <div class="col-md-12">
                    
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs margin-msg">
								<li class="active"><a href="#dados_gerais" data-toggle="tab">Dados Gerais</a>
                                </li>
                                <li><a href="#localizacao_contato" data-toggle="tab">Localização e Contato</a>
                                </li>
                                <li><a href="#correspondencia" data-toggle="tab">Correspondência</a>
                                </li>
                                <li><a href="#adicionais" data-toggle="tab">Adicionais</a>
                                </li>
                               	<li><a href="#obs_livre" data-toggle="tab">Obs. Livre</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
							
								<div class="tab-pane fade in active" id="dados_gerais">

	<div class="form-group">
		<label for="clientes_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cod" value="<?php echo ($this->input->post('clientes_cod') ? $this->input->post('clientes_cod') : $cliente['clientes_cod']); ?>" class="form-control" id="clientes_cod" />
			<?php echo form_error('clientes_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_tipo" class="col-md-4 control-label">Tipo</label>
		<div class="col-md-8">
			<input type="text" name="clientes_tipo" value="<?php echo ($this->input->post('clientes_tipo') ? $this->input->post('clientes_tipo') : $cliente['clientes_tipo']); ?>" class="form-control" id="clientes_tipo" />
			<?php echo form_error('clientes_tipo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_cpf_cnpj" class="col-md-4 control-label">CPF/CNPJ</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cpf_cnpj" value="<?php echo ($this->input->post('clientes_cpf_cnpj') ? $this->input->post('clientes_cpf_cnpj') : $cliente['clientes_cpf_cnpj']); ?>" class="form-control" id="clientes_cpf_cnpj" />
			<?php echo form_error('clientes_cpf_cnpj'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_rg" class="col-md-4 control-label">RG</label>
		<div class="col-md-8">
			<input type="text" name="clientes_rg" value="<?php echo ($this->input->post('clientes_rg') ? $this->input->post('clientes_rg') : $cliente['clientes_rg']); ?>" class="form-control" id="clientes_rg" />
			<?php echo form_error('clientes_rg'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_rg_orgao" class="col-md-4 control-label">RG Orgão</label>
		<div class="col-md-8">
			<input type="text" name="clientes_rg_orgao" value="<?php echo ($this->input->post('clientes_rg_orgao') ? $this->input->post('clientes_rg_orgao') : $cliente['clientes_rg_orgao']); ?>" class="form-control" id="clientes_rg_orgao" />
			<?php echo form_error('clientes_rg_orgao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_rg_uf" class="col-md-4 control-label">RG UF</label>
		<div class="col-md-8">
			<input type="text" name="clientes_rg_uf" value="<?php echo ($this->input->post('clientes_rg_uf') ? $this->input->post('clientes_rg_uf') : $cliente['clientes_rg_uf']); ?>" class="form-control" id="clientes_rg_uf" />
			<?php echo form_error('clientes_rg_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_rg_expedicao" class="col-md-4 control-label">RG Expedição</label>
		<div class="col-md-8">
			<input type="text" name="clientes_rg_expedicao" value="<?php echo ($this->input->post('clientes_rg_expedicao') ? $this->input->post('clientes_rg_expedicao') : $cliente['clientes_rg_expedicao']); ?>" class="form-control" id="clientes_rg_expedicao" />
			<?php echo form_error('clientes_rg_expedicao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="clientes_nome" value="<?php echo ($this->input->post('clientes_nome') ? $this->input->post('clientes_nome') : $cliente['clientes_nome']); ?>" class="form-control" id="clientes_nome" />
			<?php echo form_error('clientes_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_cnh" class="col-md-4 control-label">CNH</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cnh" value="<?php echo ($this->input->post('clientes_cnh') ? $this->input->post('clientes_cnh') : $cliente['clientes_cnh']); ?>" class="form-control" id="clientes_cnh" />
			<?php echo form_error('clientes_cnh'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_cod_despachente" class="col-md-4 control-label">Código Despachente</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cod_despachente" value="<?php echo ($this->input->post('clientes_cod_despachente') ? $this->input->post('clientes_cod_despachente') : $cliente['clientes_cod_despachente']); ?>" class="form-control" id="clientes_cod_despachente" />
			<?php echo form_error('clientes_cod_despachente'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_despachante" class="col-md-4 control-label">Despachante</label>
		<div class="col-md-8">
			<input type="text" name="clientes_despachante" value="<?php echo ($this->input->post('clientes_despachante') ? $this->input->post('clientes_despachante') : $cliente['clientes_despachante']); ?>" class="form-control" id="clientes_despachante" />
			<?php echo form_error('clientes_despachante'); ?>
		</div>
	</div>
	</div>
                                <div class="tab-pane" id="localizacao_contato">
	
	
	<div class="form-group">
		<label for="clientes_cod_municipio" class="col-md-4 control-label">Código Município</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cod_municipio" value="<?php echo ($this->input->post('clientes_cod_municipio') ? $this->input->post('clientes_cod_municipio') : $cliente['clientes_cod_municipio']); ?>" class="form-control" id="clientes_cod_municipio" />
			<?php echo form_error('clientes_cod_municipio'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_municipio" class="col-md-4 control-label">Município</label>
		<div class="col-md-8">
			<input type="text" name="clientes_municipio" value="<?php echo ($this->input->post('clientes_municipio') ? $this->input->post('clientes_municipio') : $cliente['clientes_municipio']); ?>" class="form-control" id="clientes_municipio" />
			<?php echo form_error('clientes_municipio'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_uf" class="col-md-4 control-label">UF</label>
		<div class="col-md-8">
			<input type="text" name="clientes_uf" value="<?php echo ($this->input->post('clientes_uf') ? $this->input->post('clientes_uf') : $cliente['clientes_uf']); ?>" class="form-control" id="clientes_uf" />
			<?php echo form_error('clientes_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_endereco" class="col-md-4 control-label">Endereço</label>
		<div class="col-md-8">
			<input type="text" name="clientes_endereco" value="<?php echo ($this->input->post('clientes_endereco') ? $this->input->post('clientes_endereco') : $cliente['clientes_endereco']); ?>" class="form-control" id="clientes_endereco" />
			<?php echo form_error('clientes_endereco'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-8">
			<input type="text" name="clientes_bairro" value="<?php echo ($this->input->post('clientes_bairro') ? $this->input->post('clientes_bairro') : $cliente['clientes_bairro']); ?>" class="form-control" id="clientes_bairro" />
			<?php echo form_error('clientes_bairro'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_complemento" class="col-md-4 control-label">Complemento</label>
		<div class="col-md-8">
			<input type="text" name="clientes_complemento" value="<?php echo ($this->input->post('clientes_complemento') ? $this->input->post('clientes_complemento') : $cliente['clientes_complemento']); ?>" class="form-control" id="clientes_complemento" />
			<?php echo form_error('clientes_complemento'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_numero" class="col-md-4 control-label">Número</label>
		<div class="col-md-8">
			<input type="text" name="clientes_numero" value="<?php echo ($this->input->post('clientes_numero') ? $this->input->post('clientes_numero') : $cliente['clientes_numero']); ?>" class="form-control" id="clientes_numero" />
			<?php echo form_error('clientes_numero'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-8">
			<input type="text" name="clientes_cep" value="<?php echo ($this->input->post('clientes_cep') ? $this->input->post('clientes_cep') : $cliente['clientes_cep']); ?>" class="form-control" id="clientes_cep" />
			<?php echo form_error('clientes_cep'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_tipo_endereco" class="col-md-4 control-label">Tipo Endereço</label>
		<div class="col-md-8">
			<input type="text" name="clientes_tipo_endereco" value="<?php echo ($this->input->post('clientes_tipo_endereco') ? $this->input->post('clientes_tipo_endereco') : $cliente['clientes_tipo_endereco']); ?>" class="form-control" id="clientes_tipo_endereco" />
			<?php echo form_error('clientes_tipo_endereco'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-8">
			<input type="text" name="clientes_telefone" value="<?php echo ($this->input->post('clientes_telefone') ? $this->input->post('clientes_telefone') : $cliente['clientes_telefone']); ?>" class="form-control" id="clientes_telefone" />
			<?php echo form_error('clientes_telefone'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_telefone_residencial" class="col-md-4 control-label">Telefone Residencial</label>
		<div class="col-md-8">
			<input type="text" name="clientes_telefone_residencial" value="<?php echo ($this->input->post('clientes_telefone_residencial') ? $this->input->post('clientes_telefone_residencial') : $cliente['clientes_telefone_residencial']); ?>" class="form-control" id="clientes_telefone_residencial" />
			<?php echo form_error('clientes_telefone_residencial'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_celular" class="col-md-4 control-label">Celular</label>
		<div class="col-md-8">
			<input type="text" name="clientes_celular" value="<?php echo ($this->input->post('clientes_celular') ? $this->input->post('clientes_celular') : $cliente['clientes_celular']); ?>" class="form-control" id="clientes_celular" />
			<?php echo form_error('clientes_celular'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_email" class="col-md-4 control-label">E-mail</label>
		<div class="col-md-8">
			<input type="text" name="clientes_email" value="<?php echo ($this->input->post('clientes_email') ? $this->input->post('clientes_email') : $cliente['clientes_email']); ?>" class="form-control" id="clientes_email" />
			<?php echo form_error('clientes_email'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="correspondencia">
	<div class="form-group">
		<label for="clientes_corres_cod_municipio" class="col-md-4 control-label">Código Município</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_cod_municipio" value="<?php echo ($this->input->post('clientes_corres_cod_municipio') ? $this->input->post('clientes_corres_cod_municipio') : $cliente['clientes_corres_cod_municipio']); ?>" class="form-control" id="clientes_corres_cod_municipio" />
			<?php echo form_error('clientes_corres_cod_municipio'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_municipio" class="col-md-4 control-label">Município</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_municipio" value="<?php echo ($this->input->post('clientes_corres_municipio') ? $this->input->post('clientes_corres_municipio') : $cliente['clientes_corres_municipio']); ?>" class="form-control" id="clientes_corres_municipio" />
			<?php echo form_error('clientes_corres_municipio'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_uf" class="col-md-4 control-label">UF</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_uf" value="<?php echo ($this->input->post('clientes_corres_uf') ? $this->input->post('clientes_corres_uf') : $cliente['clientes_corres_uf']); ?>" class="form-control" id="clientes_corres_uf" />
			<?php echo form_error('clientes_corres_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_endereco" class="col-md-4 control-label">Endereço</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_endereco" value="<?php echo ($this->input->post('clientes_corres_endereco') ? $this->input->post('clientes_corres_endereco') : $cliente['clientes_corres_endereco']); ?>" class="form-control" id="clientes_corres_endereco" />
			<?php echo form_error('clientes_corres_endereco'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_bairro" value="<?php echo ($this->input->post('clientes_corres_bairro') ? $this->input->post('clientes_corres_bairro') : $cliente['clientes_corres_bairro']); ?>" class="form-control" id="clientes_corres_bairro" />
			<?php echo form_error('clientes_corres_bairro'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_complemento" class="col-md-4 control-label">Complemento</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_complemento" value="<?php echo ($this->input->post('clientes_corres_complemento') ? $this->input->post('clientes_corres_complemento') : $cliente['clientes_corres_complemento']); ?>" class="form-control" id="clientes_corres_complemento" />
			<?php echo form_error('clientes_corres_complemento'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_numero" class="col-md-4 control-label">Número</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_numero" value="<?php echo ($this->input->post('clientes_corres_numero') ? $this->input->post('clientes_corres_numero') : $cliente['clientes_corres_numero']); ?>" class="form-control" id="clientes_corres_numero" />
			<?php echo form_error('clientes_corres_numero'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_cep" value="<?php echo ($this->input->post('clientes_corres_cep') ? $this->input->post('clientes_corres_cep') : $cliente['clientes_corres_cep']); ?>" class="form-control" id="clientes_corres_cep" />
			<?php echo form_error('clientes_corres_cep'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_tipo_endereco" class="col-md-4 control-label">Tipo Endereço</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_tipo_endereco" value="<?php echo ($this->input->post('clientes_corres_tipo_endereco') ? $this->input->post('clientes_corres_tipo_endereco') : $cliente['clientes_corres_tipo_endereco']); ?>" class="form-control" id="clientes_corres_tipo_endereco" />
			<?php echo form_error('clientes_corres_tipo_endereco'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_corres_nome_tipo_endereco" class="col-md-4 control-label">Nome Tipo Endereço</label>
		<div class="col-md-8">
			<input type="text" name="clientes_corres_nome_tipo_endereco" value="<?php echo ($this->input->post('clientes_corres_nome_tipo_endereco') ? $this->input->post('clientes_corres_nome_tipo_endereco') : $cliente['clientes_corres_nome_tipo_endereco']); ?>" class="form-control" id="clientes_corres_nome_tipo_endereco" />
			<?php echo form_error('clientes_corres_nome_tipo_endereco'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="adicionais">
	<div class="form-group">
		<label for="clientes_adicionais_data_nascimento" class="col-md-4 control-label">Data Nascimento</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_data_nascimento" value="<?php echo ($this->input->post('clientes_adicionais_data_nascimento') ? $this->input->post('clientes_adicionais_data_nascimento') : $cliente['clientes_adicionais_data_nascimento']); ?>" class="form-control" id="clientes_adicionais_data_nascimento" />
			<?php echo form_error('clientes_adicionais_data_nascimento'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_mae" class="col-md-4 control-label">Mãe</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_mae" value="<?php echo ($this->input->post('clientes_adicionais_mae') ? $this->input->post('clientes_adicionais_mae') : $cliente['clientes_adicionais_mae']); ?>" class="form-control" id="clientes_adicionais_mae" />
			<?php echo form_error('clientes_adicionais_mae'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_pai" class="col-md-4 control-label">Pai</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_pai" value="<?php echo ($this->input->post('clientes_adicionais_pai') ? $this->input->post('clientes_adicionais_pai') : $cliente['clientes_adicionais_pai']); ?>" class="form-control" id="clientes_adicionais_pai" />
			<?php echo form_error('clientes_adicionais_pai'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_estado_civil" class="col-md-4 control-label">Estado Civil</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_estado_civil" value="<?php echo ($this->input->post('clientes_adicionais_estado_civil') ? $this->input->post('clientes_adicionais_estado_civil') : $cliente['clientes_adicionais_estado_civil']); ?>" class="form-control" id="clientes_adicionais_estado_civil" />
			<?php echo form_error('clientes_adicionais_estado_civil'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_nascionalidade" class="col-md-4 control-label">Nascionalidade</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_nascionalidade" value="<?php echo ($this->input->post('clientes_adicionais_nascionalidade') ? $this->input->post('clientes_adicionais_nascionalidade') : $cliente['clientes_adicionais_nascionalidade']); ?>" class="form-control" id="clientes_adicionais_nascionalidade" />
			<?php echo form_error('clientes_adicionais_nascionalidade'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_cod_municipio_natural" class="col-md-4 control-label">Código Município Naturalidade</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_cod_municipio_natural" value="<?php echo ($this->input->post('clientes_adicionais_cod_municipio_natural') ? $this->input->post('clientes_adicionais_cod_municipio_natural') : $cliente['clientes_adicionais_cod_municipio_natural']); ?>" class="form-control" id="clientes_adicionais_cod_municipio_natural" />
			<?php echo form_error('clientes_adicionais_cod_municipio_natural'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_nome_municipio_naturalidade" class="col-md-4 control-label">Nome Município Naturalidade</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_nome_municipio_naturalidade" value="<?php echo ($this->input->post('clientes_adicionais_nome_municipio_naturalidade') ? $this->input->post('clientes_adicionais_nome_municipio_naturalidade') : $cliente['clientes_adicionais_nome_municipio_naturalidade']); ?>" class="form-control" id="clientes_adicionais_nome_municipio_naturalidade" />
			<?php echo form_error('clientes_adicionais_nome_municipio_naturalidade'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_uf" class="col-md-4 control-label">UF</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_uf" value="<?php echo ($this->input->post('clientes_adicionais_uf') ? $this->input->post('clientes_adicionais_uf') : $cliente['clientes_adicionais_uf']); ?>" class="form-control" id="clientes_adicionais_uf" />
			<?php echo form_error('clientes_adicionais_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_cep" value="<?php echo ($this->input->post('clientes_adicionais_cep') ? $this->input->post('clientes_adicionais_cep') : $cliente['clientes_adicionais_cep']); ?>" class="form-control" id="clientes_adicionais_cep" />
			<?php echo form_error('clientes_adicionais_cep'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_sexo" class="col-md-4 control-label">Sexo</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_sexo" value="<?php echo ($this->input->post('clientes_adicionais_sexo') ? $this->input->post('clientes_adicionais_sexo') : $cliente['clientes_adicionais_sexo']); ?>" class="form-control" id="clientes_adicionais_sexo" />
			<?php echo form_error('clientes_adicionais_sexo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_cod_profissao" class="col-md-4 control-label">Código Profissão</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_cod_profissao" value="<?php echo ($this->input->post('clientes_adicionais_cod_profissao') ? $this->input->post('clientes_adicionais_cod_profissao') : $cliente['clientes_adicionais_cod_profissao']); ?>" class="form-control" id="clientes_adicionais_cod_profissao" />
			<?php echo form_error('clientes_adicionais_cod_profissao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_profissao" class="col-md-4 control-label">Profissão</label>
		<div class="col-md-8">
			<input type="text" name="clientes_adicionais_profissao" value="<?php echo ($this->input->post('clientes_adicionais_profissao') ? $this->input->post('clientes_adicionais_profissao') : $cliente['clientes_adicionais_profissao']); ?>" class="form-control" id="clientes_adicionais_profissao" />
			<?php echo form_error('clientes_adicionais_profissao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="clientes_adicionais_obs_resumida" class="col-md-4 control-label">Observação Resumida</label>
		<div class="col-md-8">
			<textarea name="clientes_adicionais_obs_resumida" class="form-control"><?php echo ($this->input->post('clientes_adicionais_obs_resumida') ? $this->input->post('clientes_adicionais_obs_resumida') : $cliente['clientes_adicionais_obs_resumida']); ?></textarea>
			<?php echo form_error('clientes_adicionais_obs_resumida'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="obs_livre">
	<div class="form-group">
		<label for="clientes_observacao_livre" class="col-md-4 control-label">Observação Livre</label>
		<div class="col-md-8">
			<textarea name="clientes_observacao_livre" class="form-control"><?php echo ($this->input->post('clientes_observacao_livre') ? $this->input->post('clientes_observacao_livre') : $cliente['clientes_observacao_livre']); ?></textarea>
			<?php echo form_error('clientes_observacao_livre'); ?>
		</div>
	</div>
	</div>
	
	</div>
                        </div>
                        <!-- /.panel-body -->
                    
                    <!-- /.panel -->
                </div>
			</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>