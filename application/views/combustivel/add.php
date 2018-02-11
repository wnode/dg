<?php echo form_open('combustivel/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="combustiveis_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="combustiveis_cod" value="<?php echo $this->input->post('combustiveis_cod'); ?>" class="form-control" id="combustiveis_cod" />
                        <?php echo form_error('combustiveis_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="combustiveis_nome" class="col-md-4 control-label">Combustível</label>
		<div class="col-md-8">
			<textarea name="combustiveis_nome" class="form-control" id="combustiveis_nome"><?php echo $this->input->post('combustiveis_nome'); ?></textarea>
                        <?php echo form_error('combustiveis_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="combustiveis_abre" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="combustiveis_abre" value="<?php echo $this->input->post('combustiveis_abre'); ?>" class="form-control" id="combustiveis_abre" />
                        <?php echo form_error('combustiveis_abre'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>