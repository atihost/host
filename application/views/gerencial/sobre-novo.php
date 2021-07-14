<?php require_once('header.php')?>
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/summernote/summernote.css')?>">
<link rel="stylesheet" href="<?= base_url('app-css/admin/style.css')?>">
<!-- Begin page -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="row"></div><br><br>
        <div class="container">
            <div class="col-md-12">
                <h3><i class="fa fa-question-circle"></i> Novo Sobre
                    <a href='<?= base_url()?>sobre/' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar Sobre</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gravar-sobre" method="post" autocomplete="off" enctype="multipart/form-data">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sobre_titulo">Título</label>
                        <input type="text" name="sobre_titulo" class="form-control" id="sobre_titulo" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sobre_subtitulo">Subtitulo</label>
                        <input type="text" name="sobre_subtitulo" class="form-control" id="sobre_subtitulo">
                    </div>
                </div>

                <div class="row"></div><br>

                <div class="col-md-12">
                    <label for="sobre_desc">Descrição</label>
                    <textarea name="sobre_desc" id="sobre_desc" class="summernote"></textarea>
                </div>
                <div class="row"></div><br>

                <div class="col-md-4 col-md-offset-4">
                    <label for="">Imagem</label>
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">

                        </div>
                        <div class="text-center">
                            <p class="m-t-5 text-uppercase font-14 font-600"></p>
                            <p class="text-center">(200x200 px)</p>
                            <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem" name="sobre_img" style="position: absolute; clip: rect(0px 0px 0px 0px);">
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
    $('#menu-sobre').addClass('active');
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