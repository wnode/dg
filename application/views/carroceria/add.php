<?php echo form_open('carroceria/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="carrocerias_codigo" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="carrocerias_codigo" value="<?php echo $this->input->post('carrocerias_codigo'); ?>" class="form-control" id="carrocerias_codigo" />
                        <?php echo form_error('carrocerias_codigo'); ?>
                </div>
	</div>
	<div class="form-group">
		<label for="carrocerias_desc" class="col-md-4 control-label">Carroceria</label>
		<div class="col-md-8">
			<textarea name="carrocerias_nome" class="form-control" id="carrocerias_nome"><?php echo $this->input->post('carrocerias_nome'); ?></textarea>
                        <?php echo form_error('carrocerias_nome'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
	</div>

<?php echo form_close(); ?>