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
    <meta name="description" content="...">
    <!-- Author meta -->
    <meta name="author" content="Bootstrap Temple">

    <!-- Page Title -->
    <title><?= $site->getText('title') ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom font icons -->
    <link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="css/slider.min.css">
    <!-- Lightbox Pop up -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="css/timepicki.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.default.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="js/modernizr.custom.79639.min.js"></script>
</head>
<body>

<div class="page-holder">
    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/Sindicato/" class="navbar-brand"><img src="img/logo.png" width="100"></a>
                    <div class="navbar-buttons">
                        <button type="button" data-toggle="collapse" data-target=".navbar-collapse"
                                class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                    </div>
                </div>
                <div id="navigation" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#top">Inicio</a></li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                    <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Editorial SUTITSPR</a>
                </div>
            </div>
        </nav>
    </header><!-- End Navbar -->