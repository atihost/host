<?php require_once('header.php')?>
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/summernote/summernote.css')?>">
<link rel="stylesheet" href="<?= base_url('app-css/admin/style.css')?>">
<div class="box">

<div class="content">





<div class="box-header with-border">
  <h3 class="box-title">Nova unidade</h3>
 </div>

            
            
              
            <!-- /.box-header -->
          
            
              <div class="form-group">
                     <?php if($this->session->flashdata('message') != null){?>
              <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                    Dados incompletos, verifique os campos com asterisco.
                    <p>
                    O campo *Nome Completo: é obrigatório.
                  </div>
              
               
                              
                                <?php } ?>
             
               
              </div>
			  
			  <form name="form_unidades" id="form_unidades" action="<?= base_url() ?>gerencial/configuracoes/gravar-unidade" method="post">
               
			   
			  <div class="box-header with-border">
               
			    <a data-toggle="collapse" class="box-title" data-parent="#accordion" href="#collapse1">
                            <h3 class="box-title">Dados de unidade</h3>
                          </a>
              </div>
			   
			  
                     
                        
                      
                      <div id="collapse1" class="box-body">
                        <div class="box-body">
                         
						 <div class="col-md-12">
                         
						 
						 
				
				<div class="col-md-5"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="empresa">Empresa</label>
                           
                                   
                                <input id="empresa"  class="form-control" type="text" name="empresa" value="<?= @$obj->_empresa; ?>"  />
                                           
                    </div></div>
				
			<div class="col-md-5"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="razaosocial">Razão social</label>
                           <input id="razaosocial" class="form-control" type="text"  name="razaosocial" value="<?= @$obj->_razaosocial; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
	  
	  	
					<div class="col-md-2"><!-- /.sigla -->
                  <div class="form-group">
                                            <label for="sigla">Sigla</label>
                           
                                   
                                <input id="sigla"  class="form-control" type="text" name="sigla" value="<?= @$obj->_sigla; ?>"  />
                                           
                    </div></div>
            
	  
	  
					<div class="col-md-4"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="CNPJ">CNPJ</label>
                           <input id="CNPJ" class="form-control" type="text"  name="CNPJ" value="<?= @$obj->_CNPJ; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-4"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="IE">IE</label>
                           <input id="IE" class="form-control" type="text"  name="IE" value="<?= @$obj->_IE; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
             
			 
					<div class="col-md-4"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="IM">IM</label>
                           <input id="IM" class="form-control" type="text"  name="IM" value="<?= @$obj->_IM; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
		


		<div class="col-md-6"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="endereco">Endereço</label>
                           <input id="endereco" class="form-control" type="text"  name="endereco" value="<?= @$obj->_endereco; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="numero">Número</label>
                           <input id="numero" class="form-control" type="text"  name="numero" value="<?= @$obj->_numero; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				
				<div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="bairro">Bairro</label>
                           <input id="bairro" class="form-control" type="text"  name="bairro" value="<?= @$obj->_bairro; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="cidadeuf">Cidade-UF</label>
                           <input id="cidadeuf" class="form-control" type="text"  name="cidadeuf" value="<?= @$obj->_cidadeuf; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="cep">CEP</label>
                           <input id="cep" class="form-control" type="text"  name="cep" placeholder="Ex.: 60180.300" data-mask="00000.000" maxlength="9" value="<?= @$obj->_cep; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-10"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="descricao">Descrição</label>
                           <input id="descricao" class="form-control" type="text"  name="descricao" value="<?= @$obj->_descricao; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				
				
				 
	           
	              
				   
	           
			   
				<div class="col-md-5"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="referencia">Referência</label>
                           <input id="referencia" class="form-control" type="text"  name="referencia" value="<?= @$obj->_referencia; ?>"  />            
  
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
		
				
				<div class="col-md-2"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="telefone01">Telefone <span class="required">*</span></label>
						    <input type="text" id="telefone01"  class="form-control" name="telefone01" placeholder="Ex.: 00-0000-0000" data-mask="00-0000.0000" maxlength="12" autocomplete="off"  value="<?= @$obj->_telefone01; ?>" />
				        
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				<div class="col-md-2"><!-- /.cliente / empresa --> 
                     <div class="form-group">
                          <label for="telefone02">Telefone 2<span class="required">*</span></label>
						    <input type="text" id="telefone02"  class="form-control" name="telefone02" placeholder="Ex.: 00-0000-0000" data-mask="00-0000.0000" maxlength="12" autocomplete="off"  value="<?= @$obj->_telefone02; ?>" />
				        
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				
				
				
			  <div class="col-md-3"><!-- /.cpf / cnpf -->
                  <div class="form-group">
                       <label for="formadepagamentos">Forma de pagamentos</label>
                          
                          						   
                                           
                    </div>
					</div>
			 
		
			 
	   
	  
                
               <div class="col-md-12"><!-- /.email -->
                     <div class="form-group">
                                            <label for="observacao">Observação</label>
                           <input id="observacao" class="form-control" type="text" name="observacao" value="<?= @$obj->_observacao; ?>"  />
                             
                     </div><!-- /.form-group -->
                      </div><!-- /.col -->
			  
			  
			  
               
             
            
     
		
		
		
		        
		
		
		
		
		
		
		 </div>
		
		 </div>
		 </div>
		
		  <div class="box-header with-border">
               
			  <div class="col-md-12">
                    <div class="form-group">
                                        <div class="form-group pull-right">
                                           
                                            <button class="btn btn-success btn-flat pull-right" type="submit">Enviar</button>
                                         
          
                                             
                                        </div>
                                    
                    </div>
             
            
      </div>
              </div>
		
		 
		
		 
  </form>
    
             

              
                
             
             
           </div></div>
	<div class="row">
	</div></div>
             
 

 
 
    





<link rel="stylesheet" href="<?= base_url() ?>css/jquery-ui-1.8.5.custom.css">
<script type="text/javascript" src="<?= base_url() ?>js/jquery.validate.js"></script>
<script type="text/javascript">
    $('#btnVoltar').click(function() {
        $(location).attr('href', '<?= base_url(); ?>clientes');
    });


    $(function() {
        $( "#txtCidade" ).autocomplete({
            source: "<?= base_url() ?>index?c=autocomplete&m=cidade",
            minLength: 3,
            focus: function( event, ui ) {
                $( "#txtCidade" ).val( ui.item.label );
                return false;
            },
            select: function( event, ui ) {
                $( "#txtCidade" ).val( ui.item.value );
                $( "#txtCidadeID" ).val( ui.item.id );
                return false;
            }
        });
    });

    $(function() {
        $( "#txtcbo" ).autocomplete({
            source: "<?= base_url() ?>index?c=autocomplete&m=cboprofissionais",
            minLength: 3,
            focus: function( event, ui ) {
                $( "#txtcbo" ).val( ui.item.label );
                return false;
            },
            select: function( event, ui ) {
                $( "#txtcbo" ).val( ui.item.value );
                $( "#txtcboID" ).val( ui.item.id );
                return false;
            }
        });
    });

    $(document).ready(function(){
        jQuery('#form_operador').validate( {
            rules: {
                nome: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                nome: {
                    required: "*",
                    minlength: "!"
                }
            }
        });
    });

	
	$("#formAnexos").validate({
         
          submitHandler: function( form ){       
                //var dados = $( form ).serialize();
                var dados = new FormData(form); 
                $("#form-anexos").hide('1000');
                $("#divAnexos").html("<div class='col-md-4'><div class='form-group'><div class='progress-bar progress-bar-primary progress-bar-striped' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width: 100%'> <span class='sr-only'>40% Complete (success)</span></div></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>clientes/anexar",
                  data: dados,
                  mimeType:"multipart/form-data",
                  contentType: false,
                  cache: false,
                  processData:false,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                        $("#userfile").val('');

                    }
                    else{
                        $("#divAnexos").html('<div class="col-md-4"><div class="form-group"><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> '+data.mensagem+'</div></div></div>');      
                    }
                  },
                  error : function() {
                      $("#divAnexos").html('<div class="col-md-4"><div class="form-group"><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> Ocorreu um erro. Verifique se você anexou o(s) arquivo(s).</div></div></div>');      
                  }

                  });

                  $("#form-anexos").show('1000');
                  return false;
                }

        });
		
		
		$(document).on('click', '.anexo', function(event) {
           event.preventDefault();
           var link = $(this).attr('link');
           var id = $(this).attr('imagem');
           var url = '<?php echo base_url(); ?>clientes/excluirAnexo/';
           $("#div-visualizar-anexo").html('<img src="'+link+'" alt="" width="304" height="236">');
           $("#excluir-anexo").attr('link', url+id);

           $("#download").attr('href', "<?php echo base_url(); ?>clientes/downloadanexo/"+id);

       });

       $(document).on('click', '#excluir-anexo', function(event) {
           event.preventDefault();

           var link = $(this).attr('link'); 
           $('#modal-anexo').modal('hide');
           $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar'></div></div>");

           $.ajax({
                  type: "POST",
                  url: link,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                    }
                    else{
                        alert(data.mensagem);
                    }
                  }
            });
       });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script type="text/javascript">
 
$(document).ready(function () { 
        var $seuCampoCpf = $('#txtCPF');
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoCep = $('#txtCEP');
        $seuCampoCep.mask('00000-000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoCep = $('#txtempresaCEP');
        $seuCampoCep.mask('00000-000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoCep = $('#txtCEPContato1');
        $seuCampoCep.mask('00000-000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoCep = $('#txtCEPContato2');
        $seuCampoCep.mask('00000-000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoPhoneCelular = $('#txtcelular');
        $seuCampoPhoneCelular.mask('00-00000.0000', {reverse: true});
    });
	$(document).ready(function () { 
        var $seuCampoPhoneTelefone = $('#txttelefone');
        $seuCampoPhoneTelefone.mask('00-0000.0000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoPhoneTelefone = $('#txttelefoneContato1');
        $seuCampoPhoneTelefone.mask('00-0000.0000', {reverse: true});
    });
	
	$(document).ready(function () { 
        var $seuCampoPhoneTelefone = $('#txttelefoneContato2');
        $seuCampoPhoneTelefone.mask('00-0000.0000', {reverse: true});
    });

 (function () {
   $(document).ready(function () {
     $('#txtNascimento').mask('00/00/0000');
   });
   }
   (function () {
   $(document).ready(function () {
     $('#txtconjugeDataNascimento').mask('00/00/0000');
   });
   }
   (function () {
   $(document).ready(function () {
     $('#txtdataCadastro').mask('00/00/0000');
   });
   }
   (function () {
   $(document).ready(function () {
     $('#txtdataAdmissao').mask('00/00/0000');
   });
   
   
 }());
  
</script>


 
<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>






