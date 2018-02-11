<?php echo form_open('marcas_modelo/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="marcas_modelos_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="marcas_modelos_cod" value="<?php echo $this->input->post('marcas_modelos_cod'); ?>" class="form-control" id="marcas_modelos_cod" />
                        <?php echo form_error('marcas_modelos_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="marcas_modelos_nome" class="col-md-4 control-label">Marca / Modelo</label>
		<div class="col-md-8">
			<textarea name="marcas_modelos_nome" class="form-control" id="marcas_modelos_nome"><?php echo $this->input->post('marcas_modelos_nome'); ?></textarea>
                        <?php echo form_error('marcas_modelos_nome'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>