<?php echo form_open('restricao/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="restricoes_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="restricoes_cod" value="<?php echo $this->input->post('restricoes_cod'); ?>" class="form-control" id="restricoes_cod" />
                        <?php echo form_error('restricoes_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="restricoes_nome" class="col-md-4 control-label">Restrição</label>
		<div class="col-md-8">
			<textarea name="restricoes_nome" class="form-control" id="restricoes_nome"><?php echo $this->input->post('restricoes_nome'); ?></textarea>
                        <?php echo form_error('restricoes_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="restricoes_abrev" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="restricoes_abrev" value="<?php echo $this->input->post('restricoes_abrev'); ?>" class="form-control" id="restricoes_abrev" />
                        <?php echo form_error('restricoes_abrev'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>