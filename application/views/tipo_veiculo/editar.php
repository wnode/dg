<?php echo form_open('tipo_veiculo/editar/'.$tipo_veiculo['tipo_veiculos_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tipo_veiculos_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="tipo_veiculos_cod" value="<?php echo ($this->input->post('tipo_veiculos_cod') ? $this->input->post('tipo_veiculos_cod') : $tipo_veiculo['tipo_veiculos_cod']); ?>" class="form-control" id="tipo_veiculos_cod" />
                        <?php echo form_error('tipo_veiculos_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="tipo_veiculos_nome" class="col-md-4 control-label">Tipo Veículo</label>
		<div class="col-md-8">
			<input name="tipo_veiculos_nome" value="<?php echo ($this->input->post('tipo_veiculos_nome') ? $this->input->post('tipo_veiculos_nome') : $tipo_veiculo['tipo_veiculos_nome']); ?>" class="form-control" id="tipo_veiculos_nome" />
                        <?php echo form_error('tipo_veiculos_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="tipo_veiculos_abrev" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="tipo_veiculos_abrev" value="<?php echo ($this->input->post('tipo_veiculos_abrev') ? $this->input->post('tipo_veiculos_abrev') : $tipo_veiculo['tipo_veiculos_abrev']); ?>" class="form-control" id="tipo_veiculos_abrev" />
                        <?php echo form_error('tipo_veiculos_abrev'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>