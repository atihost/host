<?php require_once('header.php')?>
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/summernote/summernote.css')?>">
<link rel="stylesheet" href="<?= base_url('app-css/admin/style.css')?>">
<!-- Begin page -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="row"></div><br><br><div class="container">
            <div class="col-md-12">
                <h3><i class="fa fa-address-book"></i> Editar Menbro Da Equipe
                    <a href='<?= base_url()?>equipe/' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar equipe</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gravar-equipe" method="post" autocomplete="off" enctype="multipart/form-data">

                <input type="hidden" name="equipe_id" value="<?= $equipe['equipe_id']?>">

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="equipe_nome">Nome</label>
                        <input type="text" name="equipe_nome" class="form-control" id="equipe_nome" value="<?= $equipe['equipe_nome']?>" required>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="equipe_cargo">Cargo</label>
                        <input type="text" name="equipe_cargo" class="form-control" id="equipe_cargo" value="<?= $equipe['equipe_cargo']?>">
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="equipe_instagram">Instagram</label>
                        <input type="text" name="equipe_instagram" class="form-control" id="equipe_instagram" value="<?= $equipe['equipe_instagram']?>">
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="equipe_facebook">Facebook</label>
                        <input type="text" name="equipe_facebook" class="form-control" id="equipe_facebook" value="<?= $equipe['equipe_facebook']?>">
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="equipe_linkedin">Linkedin</label>
                        <input type="text" name="equipe_linkedin" class="form-control" id="equipe_linkedin" value="<?= $equipe['equipe_linkedin']?>">
                    </div>
                </div>

                <div class="row"></div><br>

                <div class="col-md-4 col-md-offset-4">
                    <label for="">Foto</label>
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="<?= base_url($equipe['equipe_img']) ?>" alt="">
                        </div>
                        <div class="text-center">
                            <p class="m-t-5 text-uppercase font-14 font-600"></p>
                            <p class="text-center"> ~(240x240 px)</p>
                            <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem" name="equipe_img" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                        </div>
                    </div>
                </div>

                <div class="row"></div><br><br>

                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-block btn-custom"><i class="fa fa-save"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END wrapper -->
<?php require_once('footer.php')?>
<script src="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.js')?>"></script>
<script src="<?= base_url('vendor/admin/plugins/summernote/summernote.js')?>"></script>
<script>
    $('#menu-equipe').addClass('active');
    $('.summernote').summernote({
        height:'250px',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
</script>
</body>
</html>