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
                <h3><i class="fa fa-users"></i> Usuários
                    <a href='<?= base_url()?>novo-usuario' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-user-plus"></i> Adicionar Novo</a></h3>
            </div>
            <hr class="divisor">
            <br>
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-uppercase text-center" width="50px"><strong>ID</strong></th>
                    <th class="text-uppercase text-center" ><strong>nome</strong></th>
                    <th class="text-uppercase text-center" ><strong>e-mail</strong></th>
                    <th class="text-uppercase text-center" width="110px"><strong><i class="fa fa-cog"></i></strong></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($usuarios as $user): ?>
                    <tr id="usuario_tr_<?= $user['usuario_id']?>">
                        <td class="text-center">#<?= $user['usuario_id']?></td>
                        <td class="text-center"><?= $user['usuario_nome']?></td>
                        <td class="text-center"><?= $user['usuario_email']?></td>
                        <td class="text-center">
                            <a href="<?= base_url()?>editar-usuario/<?=$user['usuario_id']?>" class="btn btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-rounded btn-small waves-effect waves-light remove-usuario" data-toggle="modal" data-target=".modal-remove" data-id="<?=$user['usuario_id']?>"><i class="fa fa-trash"></i></a>
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
    var usuario_id = <?= $_SESSION['__USUARIO_LOGADO__']['usuario_id']?>;
    var msg = '<?= $this->session->flashdata('true')?>';
</script>
<script src="<?= base_url('vendor/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('vendor/admin/plugins/datatables/dataTables.bootstrap.js')?>"></script>
<script src="<?= base_url('app-js/admin/usuarios.js')?>"></script>
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