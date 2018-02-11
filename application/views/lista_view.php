<div class="container">
<p><h1> <?php echo $titulo; ?> </h1></p><br>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>CÓDIGO</th>
			<th>DESCRIÇÃO</th>
			<th>editar/DELETAR</th>
		</tr>
		
<?php foreach ($tabela as $linha): ?>
		<tr>			
				<td><?php echo $linha->carrocerias_id; ?></td>
				<td><?php echo $linha->carrocerias_codigo; ?></td>
				<td><?php echo $linha->carrocerias_desc; ?></td>
				<td>editar/DELETAR</td>
		</tr>
<?php endforeach ?>			
			
	

	</table>

</div>
<?php //print_r(array_keys(get_defined_vars())); ?>
<?php //print_r($tabela); ?>