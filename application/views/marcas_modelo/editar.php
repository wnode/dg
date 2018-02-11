<?php echo form_open('marcas_modelo/editar/'.$marcas_modelo['marcas_modelos_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="marcas_modelos_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="marcas_modelos_cod" value="<?php echo ($this->input->post('marcas_modelos_cod') ? $this->input->post('marcas_modelos_cod') : $marcas_modelo['marcas_modelos_cod']); ?>" class="form-control" id="marcas_modelos_cod" />
                        <?php echo form_error('marcas_modelos_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="marcas_modelos_nome" class="col-md-4 control-label">Marca / Modelo</label>
		<div class="col-md-8">
			<input name="marcas_modelos_nome" value="<?php echo ($this->input->post('marcas_modelos_nome') ? $this->input->post('marcas_modelos_nome') : $marcas_modelo['marcas_modelos_nome']); ?>" class="form-control" id="marcas_modelos_nome" />
                        <?php echo form_error('marcas_modelos_nome'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>