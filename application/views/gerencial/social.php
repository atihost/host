<?php require_once('header.php')?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <br>
        <h1 class="text-center">Redes Sociais</h1>
        <br>
        <div class="container">
            <form action="<?= base_url()?>Social/gravar" method="post" class="form-horizontal" role="form" id="form-config" enctype="multipart/form-data">

                <div class="container">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_facebook_url">Facebook</label>
                            <input type="text" class="form-control" name="social_facebook_url" id="social_facebook_url" value="<?= $social['social_facebook_url']?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_linkedin_url">Linkedin</label>
                            <input type="text" class="form-control" name="social_linkedin_url" id="social_linkedin_url" value="<?= $social['social_linkedin_url']?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_instagram_url">Instagram</label>
                            <input type="text" class="form-control" name="social_instagram_url" id="social_instagram_url" value="<?= $social['social_instagram_url']?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_google_url">Google+</label>
                            <input type="text" class="form-control" name="social_google_url" id="social_google_url" value="<?= $social['social_google_url']?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_github_url">Github</label>
                            <input type="text" class="form-control" name="social_github_url" id="social_github_url" value="<?= $social['social_github_url']?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="social_bitbucket_url">Bitbucket</label>
                            <input type="text" class="form-control" name="social_bitbucket_url" id="social_bitbucket_url" value="<?= $social['social_bitbucket_url']?>">
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