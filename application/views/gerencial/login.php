<!DOCTYPE html>
<html>
<head>
     <?= $config['config_ga'] ?>
    <title><?= $config['config_site_nome'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="host" >
    <meta name="description" content="<?= $config['config_site_descricao'] ?>" />
    <meta name="keywords" content="<?= $config['config_keywords'] ?>" />
    <meta property="og:image" content="<?= base_url($config['config_og_image'])?>" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($config['config_icon'])?>">

  <link href="<?= base_url('/vendor/gerencial/theme/css/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/font-awesome/4.4.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/ionicons/2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/plugins/iCheck/all.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/plugins/select2/select2.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/dist/css/skins/skin-blue.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/theme/css/jquery-treeview.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('/vendor/gerencial/plugins/dropzone/dropzone.css') ?>" rel="stylesheet" type="text/css" />
   
	 <script src="<?= base_url('/vendor/gerencial/theme/js/jquery-1.10.2.min.js')?>"></script>
  <script src="<?= base_url('/vendor/gerencial/theme/js/jquery.mask.min.js')?>"></script>
  <script src="<?= base_url('/vendor/gerencial/theme/js/jquery-treeview.js')?>"></script>
  <script src="<?= base_url('/vendor/gerencial/theme/js/jquery-meiomask.js')?>"></script>
  <script src="<?= base_url('/vendor/gerencial/theme/js/jquery.bestupper.min.js')?>"></script>  
	
  
  
</head>
<body class="hold-transition login-page">

<div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url();?>">Gerenciador <b>ATI-Host</b></a>
      </div><!-- /.login-logo -->

<div class="login-box-body">
        <p class="login-box-msg">Seja bem vindo ao Painel ATI-HOST MVC</p>
          <form class="form-horizontal" action="<?= base_url('AdminLogin/conectar')?>" method="post">
        
        
          <div class="form-group has-feedback">
         
          <input for="emailaddress" class="form-control" type="email" id="usuario_email" name="usuario_email" placeholder="seuemail@email.com.br" required />
            
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
           
           <input for="password" input name="usuario_senha" class="form-control" type="password" required="" id="password" placeholder="Sua senha" />
           
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          
           <div class="form-group has-feedback">
           
           <select    class="form-control" >



                            <option value="1">ATIHOST</option>
                                
</select>
           
           
          </div>
          
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-6">
            
              <button type="submit" class="btn btn-primary btn-block btn-flat ">Logar</button> 
              
             
               
               


            </div><!-- /.col -->
           
             <div class="col-xs-6">
            
            
              
              <button type="reset"  class="btn btn-primary btn-block btn-flat ">Limpar</button>
              
               
               


            </div><!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

      <div class="clearfix"></div>
      </div><!-- /.login-box-body -->
    </div>



</div>

  
<!-- END HOME -->
<?php require_once('footer.php')?>
<script>
    <?php if($this->session->flashdata('erro') == true):?>
    $.notify("Login ou Senha Incorretos!", "error");
    <?php endif;?>
    $('.type-it').typeIt({
        strings:[
            'ATIHOST,', 'desenvolvedor web'
        ],
        speed: 150,
    })
        .tiPause(1000)
        .tiDelete(3)
        .tiType('<strong>php</strong>')
</script>
</body>
</html>
