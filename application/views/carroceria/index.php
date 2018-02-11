<!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    
<?php if (isset($msg)) { ?>
<div class="pull-left margin-msg">

    <?php echo $msg; ?>

</div>
<?php } ?>

<div class="pull-right margin-msg">
	<a href="<?php echo site_url('carroceria/add'); ?>" class="btn btn-success">Add</a>
</div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Carroceria</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<!--
                                    <table class="table table-striped">
    <tr>
		<td>ID</td>
		<td>Código</td>
		<td>Descrição</td>
		<td>Ações</td>
    </tr>
-->
	<?php foreach($carrocerias as $c): ?>
    <tr>
		<td><?php echo $c['carrocerias_codigo']; ?></td>
		<td><?php echo $c['carrocerias_nome']; ?></td>
		<td>
            <a href="<?php echo site_url('carroceria/editar/'.$c['carrocerias_id']); ?>" title="Editar"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
            <a href="<?php echo site_url('carroceria/remove/'.$c['carrocerias_id']); ?>" title="Remover"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </td>
    </tr>
	<?php endforeach; ?>
                                    </tbody>
</table>
    </div>
      <!-- /.table-responsive -->
         </div>
          <!-- /.panel-body -->

    
        <script>
            
                   
    $(document).ready(function() {
        $('#dataTables').DataTable({
                "responsive": true,
                "bJQueryUI": true,
				"aaSorting": [[1, "asc"]],
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                          }
                }
        });
    });
    
    </script>