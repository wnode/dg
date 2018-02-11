<?php echo form_open('despachante/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="desp_nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="desp_nome" value="<?php echo $this->input->post('desp_nome'); ?>" class="form-control" id="desp_nome" />
			<?php echo form_error('desp_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_credencial" class="col-md-4 control-label">Credencial</label>
		<div class="col-md-8">
			<input type="text" name="desp_credencial" value="<?php echo $this->input->post('desp_credencial'); ?>" class="form-control" id="desp_credencial" />
			<?php echo form_error('desp_credencial'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_cpf_cnpj" class="col-md-4 control-label">CPF/CNPJ</label>
		<div class="col-md-8">
			<input type="text" name="desp_cpf_cnpj" value="<?php echo $this->input->post('desp_cpf_cnpj'); ?>" class="form-control" id="desp_cpf_cnpj" />
			<?php echo form_error('desp_cpf_cnpj'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_cidade" class="col-md-4 control-label">Cidade</label>
		<div class="col-md-8">
			<input type="text" name="desp_cidade" value="<?php echo $this->input->post('desp_cidade'); ?>" class="form-control" id="desp_cidade" />
			<?php echo form_error('desp_cidade'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_endereco" class="col-md-4 control-label">Endereço</label>
		<div class="col-md-8">
			<input type="text" name="desp_endereco" value="<?php echo $this->input->post('desp_endereco'); ?>" class="form-control" id="desp_endereco" />
			<?php echo form_error('desp_endereco'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-8">
			<input type="text" name="desp_bairro" value="<?php echo $this->input->post('desp_bairro'); ?>" class="form-control" id="desp_bairro" />
			<?php echo form_error('desp_bairro'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_complemento" class="col-md-4 control-label">Complemento</label>
		<div class="col-md-8">
			<input type="text" name="desp_complemento" value="<?php echo $this->input->post('desp_complemento'); ?>" class="form-control" id="desp_complemento" />
			<?php echo form_error('desp_complemento'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-8">
			<input type="text" name="desp_cep" value="<?php echo $this->input->post('desp_cep'); ?>" class="form-control" id="desp_cep" />
			<?php echo form_error('desp_cep'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_numero" class="col-md-4 control-label">Número</label>
		<div class="col-md-8">
			<input type="text" name="desp_numero" value="<?php echo $this->input->post('desp_numero'); ?>" class="form-control" id="desp_numero" />
			<?php echo form_error('desp_numero'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_email" class="col-md-4 control-label">E-mail</label>
		<div class="col-md-8">
			<input type="text" name="desp_email" value="<?php echo $this->input->post('desp_email'); ?>" class="form-control" id="desp_email" />
			<?php echo form_error('desp_email'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_celular" class="col-md-4 control-label">Celular</label>
		<div class="col-md-8">
			<input type="text" name="desp_celular" value="<?php echo $this->input->post('desp_celular'); ?>" class="form-control" id="desp_celular" />
			<?php echo form_error('desp_celular'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-8">
			<input type="text" name="desp_telefone" value="<?php echo $this->input->post('desp_telefone'); ?>" class="form-control" id="desp_telefone" />
			<?php echo form_error('desp_telefone'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_estado_civil" class="col-md-4 control-label">Estado Civil</label>
		<div class="col-md-8">
			<input type="text" name="desp_estado_civil" value="<?php echo $this->input->post('desp_estado_civil'); ?>" class="form-control" id="desp_estado_civil" />
			<?php echo form_error('desp_estado_civil'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_rg" class="col-md-4 control-label">RG</label>
		<div class="col-md-8">
			<input type="text" name="desp_rg" value="<?php echo $this->input->post('desp_rg'); ?>" class="form-control" id="desp_rg" />
			<?php echo form_error('desp_rg'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_rg_uf" class="col-md-4 control-label">RG UF</label>
		<div class="col-md-8">
			<input type="text" name="desp_rg_uf" value="<?php echo $this->input->post('desp_rg_uf'); ?>" class="form-control" id="desp_rg_uf" />
			<?php echo form_error('desp_rg_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_rg_orgao" class="col-md-4 control-label">RG Orgão</label>
		<div class="col-md-8">
			<input type="text" name="desp_rg_orgao" value="<?php echo $this->input->post('desp_rg_orgao'); ?>" class="form-control" id="desp_rg_orgao" />
			<?php echo form_error('desp_rg_orgao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_detran" class="col-md-4 control-label">Detran</label>
		<div class="col-md-8">
			<input type="text" name="desp_detran" value="<?php echo $this->input->post('desp_detran'); ?>" class="form-control" id="desp_detran" />
			<?php echo form_error('desp_detran'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_logotipo" class="col-md-4 control-label">Logotipo</label>
		<div class="col-md-8">
			<input type="text" name="desp_logotipo" value="<?php echo $this->input->post('desp_logotipo'); ?>" class="form-control" id="desp_logotipo" />
			<?php echo form_error('desp_logotipo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="desp_data_incricao" class="col-md-4 control-label">Data Inscrição</label>
		<div class="col-md-8">
			<input type="text" name="desp_data_incricao" value="<?php echo $this->input->post('desp_data_incricao'); ?>" class="form-control" id="desp_data_incricao" />
			<?php echo form_error('desp_data_incricao'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>