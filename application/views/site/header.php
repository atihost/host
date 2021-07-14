<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $config['config_ga'] ?>
    <title><?= $config['config_site_nome'] ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= $config['config_autor'] ?>">
    <meta name="description" content="<?= $config['config_site_descricao'] ?>" />
    <meta name="keywords" content="<?= $config['config_keywords'] ?>" />
    <meta property="og:image" content="<?= base_url($config['config_og_image'])?>" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta charset="UTF-8" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($config['config_icon'])?>">

    <!-- LINKS DO TEMPLATE-->

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('vendor/site/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('vendor/site/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?= base_url('vendor/site/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('vendor/site/css/creative.min.css')?>" rel="stylesheet">

    <style>
        header.masthead {
            background-image: url("<?= $config['config_og_image']?>");
        }
    </style>
</head>
<body id="page-top" class="index">