

<div class="container">
<p><h1> <?php echo $titulo; ?> </h1></p><br>
	<?php echo form_open('carrocerias/inserir'); ?>
		<div class="form-group">
			<label for="exampleInputEmail1">Código</label>
			<input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Descrição</label>
			<input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" value="">
		</div>
		<input type="submit" class="btn btn-default" value="Cadastrar">
	</form>

</div>