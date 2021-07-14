<?php require_once('header.php')?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <br>
        <h1 class="text-center">Configurações de Envio de E-mail</h1>
        <br>
        <div class="container">
            <form action="<?= base_url()?>Smtp/gravar" method="post" class="form-horizontal" role="form" id="form-config" enctype="multipart/form-data">

            <div class="container">

                <div class="col-md-4">
                        <label for="smtp_email">E-mail <span class="text-danger">*</span></label>
                        <input type="email" name="smtp_email" id="smtp_email" value="<?= $smtp['smtp_email']?>" class="form-control" placeholder="contato@seudominio.com.br" required>
                </div>

                <div class="col-md-4">
                    <label for="smtp_senha">Senha <span class="text-danger">*</span></label>
                    <input type="password" name="smtp_senha" id="smtp_senha" value="<?= $smtp['smtp_senha']?>" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="smtp_host">Host <span class="text-danger">*</span></label>
                    <input type="text" name="smtp_host" id="smtp_host" value="<?= $smtp['smtp_host']?>" class="form-control" placeholder="mail.seudominio.com.br" required>
                </div>

                <div class="row"></div><br>

                <div class="col-md-4">
                    <label for="smtp_copia_oculta">Cópia Oculta</label>
                    <input type="text" name="smtp_copia_oculta" id="smtp_copia_oculta" value="<?= $smtp['smtp_copia_oculta']?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="smtp_nome">Nome do site </label>
                    <input type="text" name="smtp_nome" id="smtp_nome" value="<?= $smtp['smtp_nome']?>" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="smtp_porta">Porta <span class="text-danger">*</span></label>
                    <input type="text" name="smtp_porta" id="smtp_porta" value="<?= $smtp['smtp_porta']?>" class="form-control">
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