
<!-- Main content -->
<style type="text/css">
body5 {
	margin-top:0px;
}
.stepwizard-step p {
	margin-top: 15px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 50%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
</style>
<link rel="stylesheet" href="<?php echo base_url();?>includes/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<div class="box">

<div class="content">





<div class="box-header with-border">
  <h3 class="box-title">Entrada estoque</h3>
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
			  
			  <form name="form_form_estoque_entrada" id="form_estoque_entrada" action="<?= base_url() ?>estoque/entradas/gravar" method="post">
               
			
			  <div class="box-header with-border">
               
			    <a data-toggle="collapse" class="box-title" data-parent="#accordion" href="#collapse1">
                            <h3 class="box-title">Entrada de produto</h3>
                          </a>
              </div>
			   
			  
                     
                        
                      
                     
                         
						 
						 
				
				
				
			   <div id="collapse1" class="box-body">
                        <div class="box-body">
                         
						 <div class="col-md-12">
                         
					 <div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="codigo">Lançamento:</label>
                           <input type ="hidden" name ="id_entrada"  value ="<?= @$obj->_id_entrada; ?>" id ="txtEntradaId">  
                      
                <input type="text" id="codigo" name="codigo" class="form-control" autocomplete="off" value="<?= @$obj->_id_entrada; ?>" disabled>
				
				  </div><!-- /.form-group -->
                </div><!-- /.col -->

             <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="pedido">Pedido:</label>
                           
                   
                <input type="text" id="pedido" name="pedido" class="form-control" autocomplete="off" value="<?= @$obj->_pedido; ?>" disabled>
					                      
                    </div></div>
				

									
						 
				
				<div class="col-md-4"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="unidade">Unidade:</label>
                           
                   
              <select class="form-control" name="unidade" id="unidade" value="" style="width: 100%;">
						
      <?php $lista = $this->entradas_e->listarUnidades($_GET); 
		foreach ($lista as $item) : ?>
        <option value="<?= $item->unidade_id; ?>"
		 <?php if (@$obj->_unidade == $item->unidade_id):echo'selected'; endif; ?>>
	    <?php echo $item->empresa; ?></option>
         <?php endforeach; ?>
                        </select> 	   		                      
                    </div></div>
				
			
	  	       <div class="col-md-4"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="setor">Setor:</label>
                           
                   
              <select class="form-control" name="setor" id="setor" value="" style="width: 100%;">
						 <option value="1" <?php if (@$obj->_setor == "1"):echo 'selected'; endif; ?>>(Nenhum)</option>
        <?php $lista = $this->entradas_e->listarCategorias($_GET); 
		foreach ($lista as $item) : ?>
        <option value="<?= $item->id_categoria; ?>"
		 <?php if (@$obj->_setor == $item->id_categoria):echo'selected'; endif; ?>>
	    <?php echo $item->descricao; ?></option>
         <?php endforeach; ?>
                        </select> 	    		                      
                    </div></div>
					
			 <div class="col-md-4"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="historico">Hístorico:</label>
                           
               <select class="form-control" name="historico" id="historico" value="" style="width: 100%;">
						
        <?php $lista = $this->entradas_e->listarHistorico($_GET); 
		foreach ($lista as $item) : ?>
        <option value="<?= $item->id_historico; ?>"
		 <?php if (@$obj->_historico == $item->id_historico):echo'selected'; endif; ?>>
	    <?php echo $item->descricao; ?></option>
         <?php endforeach; ?>
                        </select> 	                      
                    </div></div>
			
					
			 <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="tipo">Tipo:</label>
                           
                <select class="form-control" name="tipo" id="tipo" value="" style="width: 100%;">
						        
								   <option value="1" <?php if (@$obj->_tipo == "1"):echo 'selected'; endif; ?>>Cliente </option>
                                   <option value="2" <?php if (@$obj->_tipo == "2"):echo 'selected'; endif; ?>>Fornecedor</option>
								           
                                               
                                            </select>       
                    </div></div>
	  
	 		
			 <div class="col-md-4"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="transportadora">Favorecido:</label>
                           
                   <select class="form-control" name="transportadora" id="transportadora" value="" style="width: 100%;">
						 
        <?php $lista = $this->entradas_e->listarFornecedor($_GET); 
		foreach ($lista as $item) : ?>
        <option value="<?= $item->id_fornecedor; ?>"
		 <?php if (@$obj->_transportadora == $item->id_fornecedor):echo'selected'; endif; ?>>
	    <?php echo $item->razao_social; ?></option>
         <?php endforeach; ?>
                        </select>
				   
				   
             	    	                      
                    </div></div>
	  
	  
	  
	  <div class="col-md-2"><!-- /.cliente / empresa -->
                  <div class="form-group">
                          <label for="data_cadastro">Emissão:</label>
                         <input id="data_cadastro" class="form-control" type="text" name="data_cadastro" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" value="<?php echo substr(@$obj->_data_cadastro, 8, 2) . '/' . substr(@$obj->_data_cadastro, 5, 2) . '/' . substr(@$obj->_data_cadastro, 0, 4); ?>" disabled>       
                            
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
				
				  
					
				 <div class="col-md-1"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="itens">Item:</label>
                           
                   
                <input type="text" id="itens" name="itens" class="form-control" autocomplete="off" value="<?= @$obj->_produto_id; ?>"/>
					                      
                    </div></div>

		     <div class="col-md-5"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="produto_descricao">Produto:</label>
                           
                   
                <input type="text" id="produto_descricao" name="produto_descricao" class="form-control" autocomplete="off" value="<?= @$obj->_produto_descricao; ?>"/>
					                      
                    </div></div>
					
              <div class="col-md-1"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="estoque">Estoque:</label>
                           
                   
                <input type="text" id="estoque" name="estoque" class="form-control" autocomplete="off" value="<?= @$obj->_estoque; ?>"disabled>
					                      
                    </div></div>
				
					
			<div class="col-md-1"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="quantidade">Quant.:</label>
                           
                   
                <input type="text" id="quantidade" name="quantidade" class="form-control" autocomplete="off" value="<?= @$obj->_quantidade; ?>"/>
					                      
                    </div></div>
						
			
			<div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="valor_produto">Preço:</label>
                           
                   
                <input type="text" id="valor_produto" name="valor_produto" class="form-control" autocomplete="off" value="<?= @$obj->_valor_produto; ?>"/>
					                      
                    </div></div>
	  
	        <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="preco_total">Preço total:</label>
                           
                   
                <input type="text" id="preco_total" name="preco_total" class="form-control" autocomplete="off" value="<?= @$obj->_preco_total; ?>"/>
					                      
                    </div></div>
					
					
				 <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="sub_total">Sub-total:</label>
                           
                   
                <input type="text" id="sub_total" name="sub_total" class="form-control" autocomplete="off" value="<?= @$obj->_preco_total; ?>"/>
					                      
                    </div></div>	
					
					 <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="previa">Prévia de entrega:</label>
                           
                   
                <input type="text" id="previa" name="previa" class="form-control" autocomplete="off" value="<?= @$obj->_previa; ?>"/>
					                      
                    </div></div>

                 <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="conferencia">Conferência:</label>
                           
                   
                <input type="text" id="conferencia" name="conferencia" class="form-control" autocomplete="off" value="<?= @$obj->_conferencia; ?>"/>
					                      
                    </div></div>					
					
					
                 <div class="col-md-2"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="nota_fiscal">Nota Fiscal:</label>
                           
                   
                <input type="text" id="nota_fiscal" name="nota_fiscal" class="form-control" autocomplete="off" value="<?= @$obj->_nota_fiscal; ?>"/>
					                      
                    </div></div>					
					
					 <div class="col-md-4"><!-- /.telefone -->
                  <div class="form-group">
                                            <label for="memorando">Memorando:</label>
                           
                   
                <input type="text" id="memorando" name="memorando" class="form-control" autocomplete="off" value="<?= @$obj->_memorando; ?>"/>
					                      
                    </div></div>	
					
	  
	  
	  
	  
	  
                 
	  
	  
	  
	  
	  <div>
                <label>Ocupa&ccedil;&atilde;o</label>
                <input type="hidden" id="txtcboID" class="texto_id" name="txtcboID" value="<?= @$obj->_cbo_ocupacao_id; ?>" readonly="true" />
                <input type="text" id="txtcbo" class="texto04" name="txtcbo" value="<?= @$obj->_profissao; ?>" />
            </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
                
		 </div>
		
		 </div>
		 </div>
	  	
				<table id="products-table" class="table table-condensed">
          <tbody>
          <tr>
           <th class="info">Código</th>
           <th class="info">Descrição</th>
          
           
           <th class="info">Qtde</th>
          
           <th class="info">Valor R$</th>
          
          
           <th class="info">Ação</th>
          </tr>
          <tr>
           <td><input type="text" name="cod[]" id="cod"></td>
           <td><input type="text" name="desc[]" id="desc"></td>
          
           
           <td><input type="text" name="qtde[]"</td>
          
           <td><input type="text" name="valor[]" id="valor"></td>
           
          
           <td>
             <button onclick="AddTableRow()" type="button" class="btn btn-success">Adicionar</button>
           </td>
         </tr>
        </tbody>
        </table>	
	  
	  
		 
		 
		
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
<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script type="text/javascript" src="<?= base_url() ?>js/addLinhaTabela.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/aplicacao.js"></script>
<script type="text/javascript">
 
  $(function() {
                        $("#txtcbo").autocomplete({
                            source: "<?= base_url() ?>index?c=autocomplete&m=cboprofissionais",
                            minLength: 3,
                            focus: function(event, ui) {
                                $("#txtcbo").val(ui.item.label);
                                return false;
                            },
                            select: function(event, ui) {
                                $("#txtcbo").val(ui.item.value);
                                $("#txtcboID").val(ui.item.id);
                                return false;
                            }
                        });
                    });
 
 (document).ready(function(){
            $( "#title" ).autocomplete({
              source: "<?php echo site_url('estoque/entradas/alterar/get_autocomplete/?');?>"
            });
        });
 

 
 
 
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


 





