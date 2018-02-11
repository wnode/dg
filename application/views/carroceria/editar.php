<?php echo form_open('carroceria/editar/'.$carroceria['carrocerias_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="carrocerias_codigo" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="carrocerias_codigo" value="<?php echo ($this->input->post('carrocerias_codigo') ? $this->input->post('carrocerias_codigo') : $carroceria['carrocerias_codigo']); ?>" class="form-control" id="carrocerias_codigo" />
                        <?php echo form_error('carrocerias_codigo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="carrocerias_desc" class="col-md-4 control-label">Carroceria</label>
		<div class="col-md-8">
			<input name="carrocerias_nome" value="<?php echo ($this->input->post('carrocerias_nome') ? $this->input->post('carrocerias_nome') : $carroceria['carrocerias_nome']); ?>" class="form-control" id="carrocerias_nome" />
                        <?php echo form_error('carrocerias_nome'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>