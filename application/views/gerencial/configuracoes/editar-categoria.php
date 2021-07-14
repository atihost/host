<?php require_once('header.php')?>

<!-- Begin page -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="row"></div><br><br>
        <div class="container">
            <div class="col-md-12">
                <h3><i class="fa fa-address-book"></i> Editar Categoria
                    <a href='<?= base_url()?>categorias/' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar Categorias</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gerencial/configuracoes/gravar-categoria" method="post" autocomplete="off" enctype="multipart/form-data">

                <input type="hidden" name="id_categoria" value="<?= $categorias['id_categoria']?>">

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="descricao">Nome</label>
                        <input type="text" name="descricao" class="form-control" id="descricao" value="<?= $categorias['descricao'] ?>" required>
                    </div>
                </div>
                

                <div class="row"></div><br><br>

                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-block btn-custom"><i class="fa fa-save"></i> Atualizar</button>
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
    $('#menu-cetegoria').addClass('active');
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
