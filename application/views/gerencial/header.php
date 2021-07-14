

   





<?php include("head.php"); ?>


 <body class=" hold-transition sidebar-mini skin-blue layout-top-nav">
 
  
   <header class="main-header">
			<!-- Logo -->
			
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				
                <div class="navbar-header">
              <a href="<?php echo base_url();?>" class="navbar-brand"><b><?= $config['config_site_nome']?></b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
                
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Arquivo <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				  
				 
				  
                 <li> <a href="<?php echo base_url()?>teste">Segurança</a> </li>
                 <li><a href="#">Licença</a></li>
                 <li><a href="#">Backup</a></li>
                 <li><a href="#">Configurações</a></li>
				
                 <li><a href="">Perfil de usúario</a></li>
					  
                 <li><a onclick="javascript: return confirm('Deseja realmente sair do sistema?');" href="<?= base_url('/logout') ?>">Sair</a></span></li>
                     
                     
                  </ul>
                </li>
                
                
                
                
               
                
               
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="<?php echo base_url()?>gerencial/configuracoes/unidades">Unidade</a></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/setores">Setores</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/historicos/">Hístoricos</a></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/centrosderesultado/">Centros de Resultado</a></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/formasdepagamento">Formas de Pagamento</a></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/planosdepagamento">Planos de Pagamento</a></li>
                     <li><a href="<?php echo base_url()?>gerencial/configuracoes/bancos">Bancos</a></li>
                     <li><a href="<?php echo base_url()?>gerencial/configuracoes/contascorrentes">Contas Correntes</a></li>
                     
                    <li class="divider"></li>
                   
                     <li><a href="<?php echo base_url()?>gerencial/configuracoes/categorias">Categorias</a></li>
                    <li><a href="<?php echo base_url()?>gerencial/configuracoes/tipos">Tipos</a></li>
					<li><a href="<?php echo base_url()?>gerencial/configuracoes/demostrativos">Demonstrativos</a></li>
                    <li><a href="<?= base_url() ?>gerencial/configuracoes/produtos">Produtos e Serviços</a></li>
                     
                    
                     
                    <li class="divider">
                    </li>
              
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/clientes">Clientes</a></li>
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/funcionartios">Funcionarios</a></li>
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/fornecedores">Fornecedores</a></li>               
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/vendedores">Vendedores</a></li>
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/medicos">Médicos</a></li>
               <li><a href="<?php echo base_url()?>gerencial/configuracoes/operadores">Usúarios</a></li>
                     
                  </ul>
                </li>
               
            
                 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   
                 <li><a href="<?php echo base_url()?>clientes">Clientes</a></li>
				 <li><a href="<?php echo base_url()?>propostas">Propostas</a></li>
				  
				   
                    
                  </ul>
                </li>
                 
                  <li class="dropdown">
				 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estoque <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   
                   
                  
                   
                     <li><a href="<?php echo base_url()?>gerencial/estoque/entradas">Entradas</a></li>
					 <li><a href="<?= base_url() ?>gerencial/estoque/saidas">Saídas</a></li>
                     <li><a href="<?= base_url() ?>gerencial/estoque/transferencias">Transferências</a></li>
                    
                       
                       
                      
                    
                      
                  
                     
                     
                  </ul>
                </li>
				
				
				
                 
				  
				  
                
                
               
				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  
                            <li><a href="<?= base_url() ?>gerencial/financeiro/caixa">Entrada caixa</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/caixa/pesquisar2">Saida caixa</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/contas_a_pagar">Contas a pagar</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/contas_a_receber">Contas a Receber</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/tipo">Tipo</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/forma">Conta</a></li>
                            <li><a href="<?= base_url() ?>gerencial/financeiro/fornecedor">Manter Credor/Devedor</a></li>
                           
                     
                  </ul>
                </li>
            
                
                
				
              
            
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  
                   
                            <li><a href="<?= base_url() ?>ambulatorio/guia/gerarelatoriogeralsintetico">Relatorio Sintetico Geral</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatorioexame">Relatorio Conferencia</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatorioexamech">Relatorio Faturamento Convenio CH</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriopacieneteexame">Relatorio Convenio Paciente</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriocancelamento">Relatorio Cancelamento</a></li>
                             <li><a href="<?= base_url() ?>cadastros/caixa/relatoriosaida">Relatorio Saida</a></li>
                            <li><a href="<?= base_url() ?>cadastros/caixa/relatoriosaidagrupo">Relatorio Saida Tipo</a></li>
                            <li><a href="<?= base_url() ?>cadastros/caixa/relatorioentrada">Relatorio Entrada</a></li>
                            <li><a href="<?= base_url() ?>cadastros/caixa/relatorioentradagrupo">Relatorio Entrada Conta</a></li>
                            <li><a href="<?= base_url() ?>cadastros/contaspagar/relatoriocontaspagar">Relatorio Contas a pagar</a></li>
                            <li><a href="<?= base_url() ?>cadastros/contasreceber/relatoriocontasreceber">Relatorio Contas a Receber</a></li>
                            <li><a href="<?= base_url() ?>cadastros/caixa/relatoriomovitamentacao">Relatorio Moviten&ccedil;&atilde;o</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriogrupo">Relatorio Exame Grupo</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriogrupoanalitico">Relatorio Exame Grupo Analitico</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriogrupoprocedimento">Relatorio Exame Grupo Procedimento</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriogeralconvenio">Relatorio Geral Convenio</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriomedicosolicitante">Relatorio Medico Solicitante sintetico</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriomedicosolicitantexmedico">Relatorio Medico Solicitante analitico</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriomedicosolicitantexmedicoindicado">Relatorio Medico Solicitante X Medico Indicado</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriolaudopalavra">Relatorio Laudo palavra chave</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriocaixa">Relatorio Caixa</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriocaixafaturado">Relatorio Caixa Faturamento</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriocaixacartao">Relatorio Caixa Cartao</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriocaixacartaoconsolidado">Relatorio Consolidado Cartao</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriophmetria">Relatorio PH Metria</a></li>
                            <li><a href="<?= base_url() ?>ambulatorio/guia/relatoriomedicoconveniofinanceiro">Relatorio Medico Convenio</a></li>
                       
                     
                  </ul>
                </li>
            
               
                
                
                 
                
                
              </ul>
              
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
				<input type="text" class="form-control" id="navbar-search-input" name="nome" placeholder="Pesquisar" value="<?php echo @$_GET['nome']; ?>" />
                 
                </div>
              </form>
              </div>
                
				
				
				
				
				
				
			</nav>
		</header>

     
   
   
    
    
     <script>
    var msg = '<?= $this->session->flashdata('true')?>';
    var url = '<?= site_url()?>';
</script>
     
    
    
    
 
    
    
    
    
     
    
 
    
  
    

		
