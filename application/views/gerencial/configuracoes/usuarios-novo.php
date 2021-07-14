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
                <h3><i class="fa fa-user-plus"></i> Novo Usuário
                    <a href='<?= base_url()?>usuarios' class="btn btn-custom pull-right waves-effect waves-light"><i class="fa fa-chevron-left"></i> Listar Usuários</a></h3>
            </div>
            <hr class="divisor"><br>
            <form action="<?= base_url()?>gravar-usuario" method="post" autocomplete="off">

                <div class="col-md-6">
                    <label for="usuario_nome">Nome</label>
                    <div class="input-group">
                            <span class="input-group-addon">
                               <i class="fa fa-user"></i>
                            </span>
                        <input type="text" name="usuario_nome" class="form-control" id="usuario_nome" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="usuario_nivel">Usuário Nivel</label>
                    <select class="form-control" value="usuario_nivel" id="usuario_nivel" required>
                        <option value="1">Administrador</option>
                    </select>
                </div>

                <div class="row"></div><br>

                <!-- Fix Autocomplete Google -->
                <div class="hide">
                    <input name="usuario_email">
                    <input name="usuario_senha">
                </div>
                <!-- End Fix Autocomplete Google -->

                <div class="col-md-6">
                    <label for="usuario_email" id="email_error">E-mail</label>
                    <div class="input-group">
                            <span class="input-group-addon">
                               @
                            </span>
                        <input type="email" name="usuario_email" class=" form-control" id="usuario_email" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="usuario_senha">Senha</label>
                    <input type="password" name="usuario_senha" class=" form-control" id="usuario_senha" required>
                </div>

                <div class="row"></div>
                <br><br>
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
<script src="<?= base_url('app-js/admin/usuarios.js')?>"></script>
<script>
    $('#menu-usuarios').addClass('active');
</script>
</body>
</html>