<?php require_once('header.php')?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <br>
        <h1 class="text-center">Informações de Contato</h1>
        <br>
        <div class="container">
            <form action="<?= base_url()?>Configuracao/gravar_contato" method="post" class="form-horizontal" role="form" id="form-config" enctype="multipart/form-data">

                <div class="container">

                    <div class="col-md-4">
                        <label for="config_telefone1">Telefone 1</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                               <i class="fa fa-mobile"></i>
                            </span>
                            <input type="text" name="config_telefone1" class="telefone form-control" data-mask="(99) 99999-9999" value="<?= $config['config_telefone1']?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="config_telefone2">Telefone 2</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                               <i class="fa fa-phone"></i>
                            </span>
                            <input type="text" name="config_telefone2" class="telefone form-control" data-mask="(99) 9999-9999" value="<?= $config['config_telefone2']?>">
                        </div>
                    </div>

                    <div class="col-md-4 hide">
                        <label for="config_telefone3">Whattsapp <small>(para contato direto)</small></label>
                        <div class="input-group">
                            <span class="input-group-addon">
                               <i class="fa fa-whatsapp"></i>
                            </span>
                            <input type="text" name="config_telefone3" class="telefone form-control" data-mask="99999999999" value="<?= $config['config_telefone3']?>" placeholder="DDD + numero ex: 13991555555">
                        </div>
                    </div>

                    <div class="row"></div><br>

                    <div class="col-md-12">
                        <label for="config_email">E-mail</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                               @
                            </span>
                            <input type="email" name="config_email" class=" form-control" value="<?= $config['config_email']?>">
                        </div>
                    </div>

                    <div class="row"></div>
                    <br><br>
                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-block btn-custom"><i class="fa fa-save"></i> Gravar Dados</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once('footer.php')?>
<script src="<?= base_url('/vendor/admin/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')?>"></script>
<?php if($this->session->flashdata('mensagem') == 'true'): ?>
    <script>
        $.notify("Configurações Alteradas com Sucesso!", "success");
    </script>
<?php endif;?>
</body>
</html>