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
                <h3><i class="fa fa-font"></i> Menu</h3>
            </div>
            <hr class="divisor">
            <br>
            <div class="row">
                <!-- Titulo -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_titulo">Título</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_titulo" id="texto_titulo" value="<?= $menus['texto_titulo']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-titulo" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Subtitulo -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_subtitulo">Subtítulo</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_subtitulo" id="texto_subtitulo" value="<?= $menus['texto_subtitulo']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-subtitulo" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Botão topo -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_botao_topo">Botão Topo</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_botao_topo" id="texto_botao_topo" value="<?= $menus['texto_botao_topo']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-botao-topo" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Serviços -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_servico">Serviços</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_servico" id="texto_servico" value="<?= $menus['texto_servico']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-servico" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sub Serviços -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sub_servico">Subtítulo Serviços</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sub_servico" id="texto_sub_servico" value="<?= $menus['texto_sub_servico']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sub-servico" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                 <!-- Cursos -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_curso">Cursos</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_curso" id="texto_curso" value="<?= $menus['texto_curso']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-curso" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sub Cursos -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sub_curso">Subtítulo Cursos</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sub_curso" id="texto_sub_curso" value="<?= $menus['texto_sub_curso']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sub-curso" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Portifólio -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_portifolio">Portifólio</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_portifolio" id="texto_portifolio" value="<?= $menus['texto_portifolio']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-portifolio" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sub Portifólio -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sub_portifolio">Subtítulo Portifólio</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sub_portifolio" id="texto_sub_portifolio" value="<?= $menus['texto_sub_portifolio']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sub-portifolio" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sobre -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sobre">Sobre</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sobre" id="texto_sobre" value="<?= $menus['texto_sobre']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sobre" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sub Sobre -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sub_sobre">Subtítulo Sobre</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sub_sobre" id="texto_sub_sobre" value="<?= $menus['texto_sub_sobre']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sub-sobre" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Fianl Sobre -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sobre_final">Botão Sobre</label>
                        <input type="text" class="form-control" maxlength="50" name="texto_sobre_final" id="texto_sobre_final" value="<?= $menus['texto_sobre_final']?>" >
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sobre-final" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

        <!-- esconder nesse tema -->
                <div id="hide" class="hide">
                    <!-- Equipe -->
                    <div style="display: flex; justify-content: center">
                        <div class="col-md-8">
                            <label for="texto_equipe">Equipe</label>
                            <input type="text" class="form-control" maxlength="150" name="texto_equipe" id="texto_equipe" value="<?= $menus['texto_equipe']?>" >
                        </div>
                        <div class="col-md-2" style="display: flex; align-items: flex-end">
                            <a id="btn-grava-equipe" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                        </div>
                    </div>

                    <!-- Sub Equipe -->
                    <div style="display: flex; justify-content: center">
                        <div class="col-md-8">
                            <label for="texto_sub_equipe">Subtítulo Equipe</label>
                            <input type="text" class="form-control" maxlength="150" name="texto_sub_equipe" id="texto_sub_equipe" value="<?= $menus['texto_sub_equipe']?>" >
                        </div>
                        <div class="col-md-2" style="display: flex; align-items: flex-end">
                            <a id="btn-grava-sub-equipe" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                        </div>
                    </div>

                    <!-- desc Equipe -->
                    <div style="display: flex; justify-content: center">
                        <div class="col-md-8">
                            <label for="texto_equipe_final">Descrição da Equipe</label>
                            <input type="text" class="form-control" maxlength="500" name="texto_equipe_final" id="texto_equipe_final" value="<?= $menus['texto_equipe_final']?>" >
                        </div>
                        <div class="col-md-2" style="display: flex; align-items: flex-end">
                            <a id="btn-grava-equipe-final" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                        </div>
                    </div>
                </div>
         <!--Fim do hide -->

                <!-- Contato -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_contato">Contato</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_contato" id="texto_contato" value="<?= $menus['texto_contato']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-contato" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Sub Contato -->
                <div style="display: flex; justify-content: center">
                    <div class="col-md-8">
                        <label for="texto_sub_contato">Subtítulo Contato</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_sub_contato" id="texto_sub_contato" value="<?= $menus['texto_sub_contato']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-sub-contato" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>

                <!-- Botão Contato -->
                <div style="display: flex; justify-content: center" class="hide">
                    <div class="col-md-8">
                        <label for="texto_botao_mensagem">Botão Contato</label>
                        <input type="text" class="form-control" maxlength="150" name="texto_botao_mensagem" id="texto_botao_mensagem" value="<?= $menus['texto_botao_mensagem']?>">
                    </div>
                    <div class="col-md-2" style="display: flex; align-items: flex-end">
                        <a id="btn-grava-btn-contato" class="btn btn-custom"><i class="fa fa-save"></i> Gravar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END wrapper -->
<?php require_once('footer.php')?>
<script>
    var msg = '<?= $this->session->flashdata('true')?>';
    var url = '<?= site_url()?>';
</script>
<script src="<?= base_url('app-js/admin/menu.js')?>"></script>
</body>
</html>
