<?php
require_once 'functions.inc.php';
require_once 'Resource.php';


init();
$site = new Resource();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- Responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IE Compatibility meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Description meta -->
    <meta name="description" content="<?= $site->getText('meta_description') ?>">

    <!-- Page Title -->
    <title><?= $site->getText('title') ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $site->getPath() ?>img/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/bootstrap.min.css">
    <!-- Custom font icons -->
    <link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/slider.min.css">
    <!-- Lightbox Pop up -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/lightbox.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/datepicker.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/timepicki.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/owl.carousel.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $site->getPath() ?>css/style.default.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="<?= $site->getPath() ?>js/modernizr.custom.79639.min.js"></script>
</head>
<body>

<div class="page-holder">