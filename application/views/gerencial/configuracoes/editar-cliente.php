<?php require_once('header.php')?>

<!-- Begin page -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="row"></div><br><br>
        <div class="container">
            <div class="col-md-12">
                <h3><i class="fa fa-address-book"></i> Editar Cliente
                    <a href='<?= base_url()?>cliente/' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar clientes</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gerencial/configuracoes/gravar-cliente" method="post" autocomplete="off" enctype="multipart/form-data">

                <input type="hidden" name="id_clientes" value="<?= $clientes['id_clientes']?>">

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="cliente_nome">Nome</label>
                        <input type="text" name="nomeCompleto" class="form-control" id="nomeCompleto" value="<?= $clientes['nomeCompleto'] ?>" required>
                    </div>
                </div>
                <div class="row"></div><br>

                <div class="col-md-4 col-md-offset-4">
                    <label for="">Foto</label>
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
                            <img src="<?= base_url($cliente['cliente_img']) ?>" alt="">
                        </div>
                        <div class="text-center">
                            <p class="m-t-5 text-uppercase font-14 font-600"></p>
                            <p class="text-center"> ~(200x50 px)</p>
                            <input type="file" class="filestyle" data-input="false" tabindex="-1" data-buttontext="Imagem" name="cliente_img" style="position: absolute; clip: rect(0px 0px 0px 0px);">
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
    $('#menu-cliente').addClass('active');
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
