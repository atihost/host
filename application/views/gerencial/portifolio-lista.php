<?php require_once('header.php')?>
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.css')?>">
<link rel="stylesheet" href="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('app-css/admin/style.css')?>">
<!-- Begin page -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="row"></div><br><br>
        <div class="container">
            <div class="col-md-12">
                <h3><i class="fa fa-file-image-o"></i> Portifólio
                    <a href='<?= base_url()?>novo-portifolio' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-user-plus"></i> Adicionar Novo</a></h3>
            </div>
            <hr class="divisor">
            <br>
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-uppercase text-center hide" width="50px"><strong>ID</strong></th>
                    <th class="text-uppercase text-center" width="50px"><strong>Categoria</strong></th>
                    <th class="text-uppercase text-center" ><strong>Título</strong></th>
                    <th class="hide text-uppercase text-center" ><strong>Subtítulo</strong></th>
                    <th class="hide text-uppercase text-center" ><strong>Descrição</strong></th>
                    <th class="text-uppercase text-center" width="110px"><strong><i class="fa fa-cog"></i></strong></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($portifolio as $port): ?>
                    <tr id="registro_tr_<?= $port['portifolio_id']?>">
                        <td class="text-center hide">#<?= $port['portifolio_id']?></td>
                        <td class="text-center"><?= $port['portifolio_categoria']?></td>
                        <td class="text-center"><?= $port['portifolio_titulo']?></td>
                        <td class="hide text-center"><?= $port['portifolio_subtitulo']?></td>
                        <td class="hide text-center">
                            <?php if(strlen($port['portifolio_descricao']) > 55):?>
                                <?= cut($port['portifolio_descricao'], 55)?>...
                            <?php else: ?>
                                <?= $port['portifolio_descricao']?>
                            <?php endif;?>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url()?>editar-portifolio/<?=$port['portifolio_id']?>" class="btn btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-rounded btn-small waves-effect waves-light remove-registro" data-toggle="modal" data-target=".modal-remove" data-id="<?=$port['portifolio_id']?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END wrapper -->
<?php require_once('footer.php')?>
<?php require_once('modal-remove.php')?>
<script>
    var msg = '<?= $this->session->flashdata('true')?>';
</script>
<script src="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.js')?>"></script>
<script src="<?= base_url('app-js/admin/portifolio.js')?>"></script>
<script>
    $('#datatable').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        }
    });
    if(msg != ''){
        $.notify(msg, "success");
    }
</script>
</body>
</html>