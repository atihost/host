<?php require_once('header.php')?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <br>
        <h1 class="text-center">Configurações do Site</h1>
        <br>
        <div class="container">
            <form action="<?= base_url()?>Configuracao/gravar" method="post" class="form-horizontal" role="form" id="form-config" enctype="multipart/form-data">

                <div class="container">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="config_site_nome">Nome do site <span class="text-danger">*</span></label>
                            <input type="text" name="config_site_nome" value="<?= $config['config_site_nome']?>" class="form-control" id="config_site_nome" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="config_autor">Autor do Site <span class="text-danger">*</span></label>
                            <input type="text" name="config_autor" value="<?= $config['config_autor']?>" class="form-control" id="config_autor" >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="config_site_descricao">Descrição do Site </label>
                            <input type="text" name="config_site_descricao" value="<?= $config['config_site_descricao']?>" class="form-control" id="config_site_descricao">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="config_keywords">Keywords <small> <i class="fa fa-info-circle"></i>(separado por virgula ex: programador, desenvolvedor)</small></label>
                            <textarea class="form-control" name="config_keywords" id="config_keywords"><?= $config['config_keywords']?>
                                </textarea>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-2">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <img src="<?=base_url($config['config_icon'])?>" alt="Íncone" style="height: 30px;width: 30px">
                            </div>
                            <div class="text-right">
                                <p class="m-t-5 text-uppercase font-14 font-600"></p><br>
                                <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Ícone" name="config_icon" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <img src="<?=base_url($config['config_og_image'])?>" alt="OG_IMAGE" style="height: 30px;width: 30px">
                            </div>
                            <div class="text-right">
                                <p class="m-t-5 text-uppercase font-14 font-600"></p><br>
                                <p class="text-center">(1500x1250 px)</p>
                                <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem Topo" name="config_og_image" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                            </div>

                        </div>
                    </div>


                    <div class="hide col-md-4">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <img src="<?=base_url($config['config_rodape_img'])?>" alt="Rodapé" style="height: 30px;width: 30px">
                            </div>
                            <div class="text-right">
                                <p class="m-t-5 text-uppercase font-14 font-600"></p><br>
                                <p class="text-center">(1500x800 px)</p>
                                <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem Contato" name="config_rodape_img" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                            </div>

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