<?php require_once('header.php')?>

<div class="box">
<div class="content">


<div class="box-header with-border">
<h3 class="box-title">Categorias Cadastradas</h3>
 </div>
<div class="box-header with-border">
 
    <a href="<?= base_url()?>novo-unidade" class="btn btn-primary btn-flat" role="button">Nova Categoria</a>
    <a href="<?php echo base_url();?>unidades/minicadastro" class="btn btn-primary btn-flat" role="button">Mini cadastro</a>
	

      
	
     
           
    </div>     
        
<div class="widget-content nopadding">     
<div class="box-body">
<div class="table-responsive">

<table id="datatable" class="display table table-striped table-bordered">

 


                <thead>
                <tr>

                    <th class="text-uppercase text-center" ><strong>ID</strong></th>
                    <th class="text-uppercase text-center" width="50px"><strong>Descricao</strong></th>
                    <th class="text-uppercase text-center" width="50px"><strong>Compra</strong></th>
                    <th class="text-uppercase text-center" width="50px"><strong>Venda</strong></th>
                    <th class=" text-center" width="10px"><strong>Ativo</strong></th>
                    <th class="text-uppercase text-center""><strong>Cadastro</strong></th>
                    <th class="text-uppercase text-center" style="visibility: hidden;" width="110px"><strong><i class="fa fa-cog"></i></strong></th>


                </tr>
                </thead>


       

                <tbody>
                <?php foreach($categorias as $s): ?>
                        <tr id="registro_tr_<?= $s['id_categoria']?>">
                        <td class="text-center">#<?= $s['id_categoria']?></td>
                        <td class="text-center"><?= $s['descricao']?></td>
                        <?php if($s['compra'] == '1'){?>
                                <td class="text-center">Ativo</td>
                                <?php } else { ?>
                                <td class="text-center">Desativado</td>
                                <?php } ?></td>
                         <?php if($s['venda'] == '1'){?>
                                <td class="text-center">Ativo</td>
                                <?php } else { ?>
                                <td class="text-center">Desativado</td>
                                <?php } ?></td>
                         <?php if($s['ativo'] == 't'){?>
                                <td class="text-center">Ativo</td>
                                <?php } else { ?>
                                <td class="text-center">Desativado</td>
                                <?php } ?></td>
                                <td class="text-center"><?= $s['data_cadastro']?></td>
                        <td class="text-center">
                            <a href="<?= base_url()?>gerencial/configuracoes/editar-categoria/<?=$s['id_categoria']?>" class="btn btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-rounded btn-small waves-effect waves-light remove-registro" data-toggle="modal" data-target=".modal-remove" data-id="<?=$s['id_categoria']?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>


                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
	</div>
		
	
		
       
    </div>
</div>

<!-- END wrapper -->
<script>




$(document).ready(function() {
    var table = $('#datatable').DataTable({

        

      "columnDefs": [
        { "orderable": false, "targets": "_all"}
      ],
     
      "order": [1],  // not set any order rule for any column.


    "oLanguage": {
    "sProcessing": "Aguarde enquanto os dados são carregados ...",
    "sLengthMenu": "Mostrar _MENU_ registros por pagina",
    "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
    "sInfoFiltered": "",
    "sSearch": "Procurar",
    "oPaginate": {
       "sFirst":    "Primeiro",
       "sPrevious": "Anterior",
       "sNext":     "Próximo",
       "sLast":     "Último"
    }
 }  


      
       
  
 

});

$('#datatable thead tr').clone(false).appendTo( '#datatable thead' );
$("#datatable thead tr:eq(1) th").not(":eq(6)").each( function ( i ) {

 var select = $(' <select  class="form-control "><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );
 
        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )




        } );
    } );










$('#datatable tbody').on( 'click', 'tr td.details-control', function () {
//comentar
});

var trs = $('#datatable tbody tr');

for(var i = 0, len = trs.length; i < len; ++i) {
    var tr = trs[i];
    var row = dt.row( tr );
    row.child( format( row.data() ) ).show();
}


} );






</script>

<?php require_once('footer.php')?>
<?php require_once('modal-remove.php')?>

<script>
    var msg = '<?= $this->session->flashdata('true')?>';
</script>
<script src="<?= base_url('app-js/gerencial/configuracoes/categorias.js')?>"></script>

 

</body>
</html>
