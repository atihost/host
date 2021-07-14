<!DOCTYPE html>
<html>
<head>
    <?= $config['config_ga'] ?>
    <title><?= $config['config_site_nome'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $config['config_autor'] ?>">
    <meta name="description" content="<?= $config['config_site_descricao'] ?>" />
    <meta name="keywords" content="<?= $config['config_keywords'] ?>" />
    <meta property="og:image" content="<?= base_url($config['config_og_image'])?>" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($config['config_icon'])?>">
    <!-- C3 charts css -->
    <link href="<?= base_url('/vendor/admin/plugins/c3/c3.min.css')?>" rel="stylesheet" type="text/css"  />
    <!-- App css -->
    <link href="<?= base_url('/vendor/admin/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet')?>" />
    <link href="<?= base_url('/vendor/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css')?>" />
    <link href="<?= base_url('/vendor/admin/assets/css/core.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/components.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/responsive.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/plugins/dropzone/dropzone.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('/vendor/admin/assets/js/modernizr.min.js')?>"></script>
    <script src="<?= base_url('/vendor/admin/assets/js/jquery.min.js')?>"></script>
</head>
<body>
<!-- Begin page -->
<?php require_once('top-menu.php') ?>
<!-- END wrapper -->