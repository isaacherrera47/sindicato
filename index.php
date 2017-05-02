<?php
require_once 'includes/header.inc.php';
?>

    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/Sindicato/" class="navbar-brand"><img src="<?= $site->getPath() ?>img/logo.jpg"
                                                                    width="50"></a>
                    <div class="navbar-buttons">
                        <button type="button" data-toggle="collapse" data-target=".navbar-collapse"
                                class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                    </div>
                </div>
                <div id="navigation" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#top">Inicio</a></li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="#gallery">Galeria</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li><a href="http://www.sutitspr.com.mx/permisos/" target="_blank">Permisos</a></li>
                    </ul>
                    <a href="/sindicato/sutitspr/" class="btn navbar-btn btn-unique hidden-xs">Editorial SUTITSPR</a>
                </div>
            </div>
        </nav>
    </header><!-- End Navbar -->

    <!-- Carousel Section -->
    <section id="top" class="hero">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">
                <!-- slide -->
                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25"
                     data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner" style="background-image: url(img/1.jpg);">
                        <div class="container">
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10"
                     data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner" style="background-image: url(img/2.jpg);">
                        <div class="container">
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3"
                     data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" style="background-image: url(img/3.jpg);">
                        <div class="container">
                            <h2>Visit <span class="text-primary">Lorem ipsum</span></h2>
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3"
                     data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" style="background-image: url(img/1.jpg);">
                        <div class="container">
                            <h2>Visit <span class="text-primary">Lorem ipsum</span></h2>
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3"
                     data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" style="background-image: url(img/2.jpg);">
                        <div class="container">
                            <h2>Visit <span class="text-primary">Lorem ipsum</span></h2>
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>
                    </div>
                </div>
            </div><!-- End sl-slider -->

            <!-- slider pagination -->
            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </nav>

            <!-- scroll down btn -->
            <a id="scroll-down" href="#about" class="hidden-xs"></a>

            <!-- social icons menu -->
            <div class="social">
                <div class="wrapper">
                    <ul class="list-unstyled">
                        <li><a href="<?= $site->getSocialLink('facebook') ?>" title="facebook" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= $site->getSocialLink('twitter') ?>" title="twitter" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= $site->getSocialLink('linkedin') ?>" title="linkedin" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <span>Síguenos en</span>
                </div>
            </div>
        </div><!-- End slider-wrapper -->
    </section><!-- End Hero Section -->


    <!-- Details -->
    <section id="details" class="details">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p><?= $site->getText('permisos_banner_title')?></p>
                        <h5><?= $site->getText('permisos_banner_title2') ?></h5>
                    </div>
                    <?= $site->getText('permisos_banner_description') ?>
                </div>

                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p><?= $site->getText('editorial_banner_title') ?></p>
                        <h5><?= $site->getText('editorial_banner_description') ?></h5>
                    </div>
                    <a href="<?= $site->getPath()?>sutitspr/" class="reviews btn-unique"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details-->


    <!-- About Section -->
    <section id="about" class="about">
        <div class="container text-center">
            <header>
                <h2><?= $site->getText('about_title')?></h2>
                <h3><?= $site->getText('about_subtitle')?></h3>
            </header>
            <p class="lead"><?= $site->getText('about_text')?></p>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container text-center">
            <header>
                <h2><?= $site->getText('mvsection_title')?></h2>
                <h3><?= $site->getText('mvsection_subtitle')?></h3>
            </header>

            <div class="row">
                <!-- item -->
                <div class="col-sm-6 service">
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="text">
                        <h4>Misión</h4>
                        <p><?= $site->getText('mvsection_mision')?></p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-sm-6 service">
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="text">
                        <h4>Visión</h4>
                        <p><?= $site->getText('mvsection_vision')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container text-center">
            <header>
                <h2><?= $site->getText('editorial_gallery_title') ?></h2>
                <h3><?= $site->getText('editorial_gallery_subtitle') ?></h3>
            </header>

            <div class="gellery">
                <div class="row">
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/1.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/1.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/2.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/2.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/3.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/3.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/2.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/2.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/1.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/1.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/3.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/3.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/2.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/2.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="<?= $site->getPath() ?>img/1.jpg" alt="image">
                            <a href="<?= $site->getPath() ?>img/1.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->


    <!-- Footer -->
    <footer id="contact" class="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 brief">
                    <div class="header">
                        <img src="<?= $site->getPath() ?>img/logo_footer.png" alt="Sindicato" width="100">
                    </div>
                    <p><?= $site->getText('footer_about_text') ?></p>
                </div>

                <div class="col-md-6 contact">
                    <div class="header">
                        <h6>Contacto</h6>
                    </div>
                    <ul class="contact list-unstyled">
                        <li><span class="icon-map text-primary"></span><?= $site->getText('contact_address') ?></li>
                        <li><a href="mailto:<?= $site->getText('contact_mail') ?>"><span class="icon-mail text-primary"></span><?= $site->getText('contact_mail') ?></a>
                        </li>
                        <li><span class="icon-phone text-primary"></span><?= $site->getText('contact_phone') ?></li>
                    </ul>
                </div>
            </div>

            <ul class="social list-unstyled list-inline">
                <li><a href="<?= $site->getSocialLink('facebook') ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?= $site->getSocialLink('twitter') ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?= $site->getSocialLink('linkedin') ?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- scroll top btn -->
    <div id="scrollTop" class="btn-unique">
        <i class="fa fa-angle-up"></i>
    </div><!-- end scroll top btn -->

<?php
require_once 'includes/footer.inc.php';
?>