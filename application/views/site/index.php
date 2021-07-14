<?php require_once('header.php')?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <?php if(!empty($config['config_site_nome'])):?>
                <?= $config['config_site_nome']?>
            <?php endif;?>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">
                        <?php if(!empty($menus['texto_sobre'])):?>
                            <?= $menus['texto_sobre']?>
                        <?php endif;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">
                        <?php if(!empty($menus['texto_servico'])):?>
                            <?= $menus['texto_servico']?>
                        <?php endif;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#cursos">
                        <?php if(!empty($menus['texto_curso'])):?>
                            <?= $menus['texto_curso']?>
                        <?php endif;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">
                        <?php if(!empty($menus['texto_portifolio'])):?>
                            <?= $menus['texto_portifolio']?>
                        <?php endif;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">
                        <?php if(!empty($menus['texto_contato'])):?>
                            <?= $menus['texto_contato']?>
                        <?php endif;?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>
                        <?php if(!empty($menus['texto_titulo'])):?>
                            <?= $menus['texto_titulo']?>
                        <?php endif;?>
                    </strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">
                    <?php if(!empty($menus['texto_subtitulo'])):?>
                        <?= $menus['texto_subtitulo']?>
                    <?php endif;?>
                </p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">
                    <?php if(!empty($menus['texto_botao_topo'])):?>
                        <?= $menus['texto_botao_topo']?>
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">
                    <?php if(!empty($menus['texto_sub_sobre'])):?>
                        <?= $menus['texto_sub_sobre']?>
                    <?php endif;?>
                </h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">
                    <?php if(!empty($sobre)):?>
                        <?= $sobre[0]['sobre_desc']?>
                    <?php endif;?>
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">
                    <?php if(!empty($menus['texto_sobre_final'])):?>
                        <?= $menus['texto_sobre_final']?>
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($menus['texto_sub_servico'])):?>
                        <?= $menus['texto_sub_servico']?>
                    <?php endif;?>
                </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($servicos)):?>
            <?php foreach ($servicos as $serv): ?>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x <?= $serv['servicos_icone']?> text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">
                        <?= $serv['servicos_titulo']?>
                    </h3>
                    <p class="text-muted mb-0">
                        <?= $serv['servicos_descricao']?>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>


<section id="cursos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($menus['texto_sub_curso'])):?>

                        <?= $menus['texto_sub_curso']?>
                    <?php endif;?>

                </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($cursos)):?>
            <?php foreach ($cursos as $curs): ?>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="curso-box mt-5 mx-auto">
                    <i class="fa fa-4x <?= $curs['curso_icone']?> text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">
                        <?= $curs['titulo']?>

                    </h3>
                    <p class="text-muted mb-0">
                        <?= $curs['descricao']?>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>



<section class="p-0" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($menus['texto_sub_portifolio'])):?>
                        <?= $menus['texto_sub_portifolio']?>
                    <?php endif;?>
                </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <?php if(!empty($portifolio)):?>
            <?php foreach ($portifolio as $port):?>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?=base_url($port['portifolio_img_full'])?>">
                    <img class="img-fluid" src="<?=base_url($port['portifolio_img'])?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?= $port['portifolio_titulo']?>
                            </div>
                            <div class="project-name">
                                <?= $port['portifolio_titulo']?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">
                    <?php if(!empty($menus['texto_contato'])):?>
                        <?= $menus['texto_contato']?>
                    <?php endif;?>
                </h2>
                <hr class="my-4">
                <p class="mb-5">
                    <?php if(!empty($menus['texto_sub_contato'])):?>
                        <?= $menus['texto_sub_contato']?>
                    <?php endif;?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <?php if(!empty($config['config_telefone1'])):?>
                    <p><?= $config['config_telefone1']?></p>
                <?php endif;?>
                <?php if(!empty($config['config_telefone2'])):?>
                <p><?= $config['config_telefone2']?></p>
                <?php endif;?>
                <?php if(!empty($config['config_telefone3'])):?>
                    <p><?= $config['config_telefone3']?></p>
                <?php endif;?>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:<?= $config['config_email']?>">
                        <?= $config['config_email']?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    var url = "<?= site_url()?>";
</script>
<?php require_once('footer.php')?>
<script src="<?= base_url('app-js/site/main.js')?>"></script>
</body>
</html>
