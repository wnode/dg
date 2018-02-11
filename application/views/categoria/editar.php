<?php echo form_open('categoria/editar/'.$categoria['categorias_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="categorias_cod" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="categorias_cod" value="<?php echo ($this->input->post('categorias_cod') ? $this->input->post('categorias_cod') : $categoria['categorias_cod']); ?>" class="form-control" id="categorias_cod" />
                        <?php echo form_error('categorias_cod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="categorias_desc" class="col-md-4 control-label">Categoria</label>
		<div class="col-md-8">
			<input name="categorias_nome" value="<?php echo ($this->input->post('categorias_nome') ? $this->input->post('categorias_nome') : $categoria['categorias_nome']); ?>" class="form-control" id="categorias_nome" />
                        <?php echo form_error('categorias_nome'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="categorias_abre" class="col-md-4 control-label">Abreviatura</label>
		<div class="col-md-8">
			<input type="text" name="categorias_abre" value="<?php echo ($this->input->post('categorias_abre') ? $this->input->post('categorias_abre') : $categoria['categorias_abre']); ?>" class="form-control" id="categorias_abre" />
                        <?php echo form_error('categorias_abre'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>