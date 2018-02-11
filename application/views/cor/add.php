<?php echo form_open('cor/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cores_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="cores_cod" value="<?php echo $this->input->post('cores_cod'); ?>" class="form-control" id="cores_cod" />
                        <?php echo form_error('cores_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="cores_nome" class="col-md-4 control-label">Cor</label>
		<div class="col-md-8">
			<textarea name="cores_nome" class="form-control" id="cores_nome"><?php echo $this->input->post('cores_nome'); ?></textarea>
                        <?php echo form_error('cores_nome'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>