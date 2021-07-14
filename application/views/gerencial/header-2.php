

   





<?php include("head2.php"); ?>


 <body class=" hold-transition sidebar-mini skin-blue layout-top-nav">
 
  <div class="wrapper">
    
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
					  
                 <li><a onclick="javascript: return confirm('Deseja realmente sair do sistema?');" href="<?= base_url() ?>login/sair">Sair</a></span></li>
                     
                     
                  </ul>
                </li>
                
                
                
                
               
                
                
                
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="<?php echo base_url()?>configuracoes/unidades">Unidade</a></li>
                    <li><a href="<?php echo base_url()?>configuracoes/setores">Setores</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url()?>configuracoes/historicos/">Hístoricos</a></li>
                    <li><a href="<?php echo base_url()?>configuracoes/centrosderesultado/">Centros de Resultado</a></li>
                    <li><a href="<?php echo base_url()?>configuracoes/formasdepagamento">Formas de Pagamento</a></li>
                    <li><a href="<?php echo base_url()?>configuracoes/planosdepagamento">Planos de Pagamento</a></li>
                     <li><a href="<?php echo base_url()?>configuracoes/bancos">Bancos</a></li>
                     <li><a href="<?php echo base_url()?>configuracoes/contascorrentes">Contas Correntes</a></li>
                     
                    <li class="divider"></li>
                   
                     <li><a href="<?php echo base_url()?>configuracoes/categorias">Categorias</a></li>
                    <li><a href="<?php echo base_url()?>configuracoes/tipos">Tipos</a></li>
					<li><a href="<?php echo base_url()?>configuracoes/demostrativos">Demonstrativos</a></li>
                    <li><a href="<?= base_url() ?>configuracoes/produtos">Produtos e Serviços</a></li>
                     
                    
                     
                    <li class="divider">
                    </li>
              
               <li><a href="<?php echo base_url()?>clientes">Clientes</a></li>
               <li><a href="<?php echo base_url()?>funcionartios">Funcionarios</a></li>
               <li><a href="<?php echo base_url()?>fornecedores">Fornecedores</a></li>               <li><a href="<?php echo base_url()?>vendedores">Vendedores</a></li>
               <li><a href="<?php echo base_url()?>medicos">Médicos</a></li>
               <li><a href="<?php echo base_url()?>operadores">Usúarios</a></li>
                     
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
                   
                   
                  
                   
                     <li><a href="<?php echo base_url()?>estoque/entradas">Entradas</a></li>
					 <li><a href="<?= base_url() ?>estoque/saidas">Saídas</a></li>
                     <li><a href="<?= base_url() ?>estoque/transferencias">Transferências</a></li>
                    
                       
                       
                      
                    
                      
                  
                     
                     
                  </ul>
                </li>
				
				
				
                 
				  
				  
                
                
               
				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  
                            <li><a href="<?= base_url() ?>financeiro/caixa">Entrada caixa</a></li>
                            <li><a href="<?= base_url() ?>financeiro/caixa/pesquisar2">Saida caixa</a></li>
                            <li><a href="<?= base_url() ?>financeiro/contas_a_pagar">Contas a pagar</a></li>
                            <li><a href="<?= base_url() ?>financeiro/contas_a_receber">Contas a Receber</a></li>
                            <li><a href="<?= base_url() ?>financeiro/tipo">Tipo</a></li>
                            <li><a href="<?= base_url() ?>financeiro/forma">Conta</a></li>
                            <li><a href="<?= base_url() ?>financeiro/fornecedor">Manter Credor/Devedor</a></li>
                           
                     
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

    
   
      
        <!---->


        <!-- BEGIN NAVBAR -->
        
        
             
      
  
        
 
     
        
        <!-- END SLIDER ONE -->

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
  
<h1><?php echo ucfirst($this->uri->segment(1));?> <small>Seja bem vindo ao Sistema ATI-Host MVC.</small> </h1>

  <ol class="breadcrumb"><li> <?php if($this->uri->segment(1) != null){?><a href="<?php echo base_url().''.$this->uri->segment(1)?>" class="tip-bottom" title="<?php echo ucfirst($this->uri->segment(1));?>"><?php echo ucfirst($this->uri->segment(1));?></a></li><li> <?php if($this->uri->segment(2) != null){?><a href="<?php echo base_url().''.$this->uri->segment(1).'/'.$this->uri->segment(2) ?>" class="current tip-bottom" title="<?php echo ucfirst($this->uri->segment(2)); ?>"><?php echo ucfirst($this->uri->segment(2));} ?></a></li> <?php }?>
    <script type="text/javascript" src="<?= base_url() ?>js/funcoes.js"></script>

   
   
   </ol>
   </section>	 
   
 
  
   
    
     
   


    
    
    
     
     
    
    
    
 
    
    
    
    
     
    
    <!-- ATI-HOST SCRIPTS -->
    
   
		 

		 <br>
	  
      
     
	 <script src="<?= base_url() ?>css/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>css/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>css/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/css/dist/js/demo.js"></script>
    
    
 

<!-- end .container -->

    
  
    

		
