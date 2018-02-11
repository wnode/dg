<?php echo form_open('especie/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="especies_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="especies_cod" value="<?php echo $this->input->post('especies_cod'); ?>" class="form-control" id="especies_cod" />
                        <?php echo form_error('especies_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="especies_nome" class="col-md-4 control-label">Espécie</label>
		<div class="col-md-8">
			<textarea name="especies_nome" class="form-control" id="especies_nome"><?php echo $this->input->post('especies_nome'); ?></textarea>
                        <?php echo form_error('especies_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="especies_abrev" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="especies_abrev" value="<?php echo $this->input->post('especies_abrev'); ?>" class="form-control" id="especies_abrev" />
                        <?php echo form_error('especies_abrev'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>