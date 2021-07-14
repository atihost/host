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
                <h3><i class="fa fa-file-image-o"></i> Editar Item
                    <a href='<?= base_url()?>portifolio/' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar Portifólio</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gravar-portifolio" method="post" autocomplete="off" enctype="multipart/form-data">

                <input type="hidden" name="portifolio_id" value="<?= $portifolio['portifolio_id']?>">

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="portifolio_titulo">Título</label>
                        <input type="text" name="portifolio_titulo" class="form-control" id="portifolio_titulo" value="<?= $portifolio['portifolio_titulo']?>" required>
                    </div>
                </div>

                <div class="hide">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="portifolio_subtitulo">Subtitulo</label>
                            <input type="text" name="portifolio_subtitulo" class="form-control" id="portifolio_subtitulo" value="<?= $portifolio['portifolio_subtitulo']?>">
                        </div>
                    </div>
                    <div class="row"></div><br>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="portifolio_link">Link</label>
                            <input type="text" name="portifolio_link" class="form-control" id="portifolio_link" value="<?= $portifolio['portifolio_link']?>">
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="portifolio_categoria">Categoria</label>
                        <input type="text" name="portifolio_categoria" class="form-control" id="portifolio_categoria" value="<?= $portifolio['portifolio_categoria']?>" required>
                    </div>
                </div>
                <div class="row"></div><br>

                <div class="col-md-4 col-md-offset-2">
                    <label for="">Imagem De Capa</label>
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="<?=base_url($portifolio['portifolio_img'])?>" alt="OG_IMAGE" style="height: 30px;width: 30px">
                        </div>
                        <div class="text-center">
                            <p class="m-t-5 text-uppercase font-14 font-600"></p>
                            <p class="text-center">(400x300 px)</p>
                            <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem do Reduzida" name="portifolio_img" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <label for="">Imagem Ampliada</label>
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="<?=base_url($portifolio['portifolio_img_full'])?>" alt="OG_IMAGE" style="height: 30px;width: 30px">
                        </div>
                        <div class="text-center">
                            <p class="m-t-5 text-uppercase font-14 font-600"></p>
                            <p class="text-center">Qualquer Tamanho Em px</p>
                            <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem do Item" name="portifolio_img_full" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                        </div>

                    </div>
                </div>

                <div class="hide col-md-12">
                    <label for="portifolio_descricao">Descrição</label>
                    <textarea name="portifolio_descricao" id="portifolio_descricao" class="summernote"><?= $portifolio['portifolio_descricao']?></textarea>
                </div>
                <div class="row"></div><br>

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
<script src="<?= base_url('app-js/admin/portifolio.js')?>"></script>
<script>
    $('#menu-portifolio').addClass('active');
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