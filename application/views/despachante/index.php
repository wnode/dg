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
	<a href="<?php echo site_url('despachante/add'); ?>" class="btn btn-success">Add</a> 
</div>

                        <!-- /.panel-heading -->
    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables">
    <thead>
    <tr>
		<th>Nome</th>
		<th class="hidden-xs hidden-sm">Credencial</th>
		<th class="hidden-xs hidden-sm">CPF/CNPJ</th>
		<th>Ações</th>
    </tr>
	</thead>
	<tbody>
	<?php foreach($despachantes as $d): ?>
    <tr>
		<td><?php echo $d['desp_nome']; ?></td>
		<td class="hidden-xs hidden-sm"><?php echo $d['desp_credencial']; ?></td>
		<td class="hidden-xs hidden-sm"><?php echo $d['desp_cpf_cnpj']; ?></td>
		<td>
            <a href="<?php echo site_url('despachante/editar/'.$d['desp_id']); ?>" title="Editar"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
            <a href="<?php echo site_url('despachante/remove/'.$d['desp_id']); ?>" title="Deletar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
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
				"aaSorting": [[0, "asc"]],
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