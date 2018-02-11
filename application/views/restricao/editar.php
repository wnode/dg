<?php echo form_open('restricao/editar/'.$restricao['restricoes_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="restricoes_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="restricoes_cod" value="<?php echo ($this->input->post('restricoes_cod') ? $this->input->post('restricoes_cod') : $restricao['restricoes_cod']); ?>" class="form-control" id="restricoes_cod" />
                        <?php echo form_error('restricoes_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="restricoes_nome" class="col-md-4 control-label">Restrição</label>
		<div class="col-md-8">
			<input name="restricoes_nome" value="<?php echo ($this->input->post('restricoes_nome') ? $this->input->post('restricoes_nome') : $restricao['restricoes_nome']); ?>" class="form-control" id="restricoes_nome" />
                        <?php echo form_error('restricoes_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="restricoes_abrev" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="restricoes_abrev" value="<?php echo ($this->input->post('restricoes_abrev') ? $this->input->post('restricoes_abrev') : $restricao['restricoes_abrev']); ?>" class="form-control" id="restricoes_abrev" />
                        <?php echo form_error('restricoes_abrev'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>