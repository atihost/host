<?php require_once('header.php')?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <br>
        <h1 class="text-center">SEO</h1>
        <br>
        <div class="container">
            <form action="<?= base_url()?>Configuracao/gravar" method="post" class="form-horizontal" role="form" id="form-config" enctype="multipart/form-data">

                <div class="container">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="config_keywords">Google Analytics <small> <i class="fa fa-info-circle"></i>(insita o código do google analytics com as tags <strong class="text-warning">&ltscript&gt &lt/script&gt</strong>)</small></label>
                            <textarea rows="10" class="form-control" name="config_ga" id="config_ga"><?= $config['config_ga']?>
                                </textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="config_share_buttons">Botões de compartilhamento <small> <i class="fa fa-info-circle"></i>(insita o código dos botões de compartilhamento. com as tags <strong class="text-warning">&ltscript&gt &lt/script&gt</strong>)</small></label>
                            <textarea class="form-control" name="config_share_buttons" id="config_share_buttons"><?= $config['config_share_buttons']?>
                                </textarea>
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
<?php if($this->session->flashdata('mensagem') == 'true'): ?>
    <script>
        $.notify("Configurações Alteradas com Sucesso!", "success");
    </script>
<?php endif;?>
</body>
</html>