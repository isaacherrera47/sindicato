<?php
require_once '../includes/header.inc.php'
?>

<!-- Navbar -->
<header class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/Sindicato/" class="navbar-brand"><img src="<?= $site->getPath() ?>img/logo_editorial.png"
                                                                width="100"></a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target=".navbar-collapse"
                            class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Acerca de</a></li>
                    <li><a href="#articles">Artículos</a></li>
                    <li><a href="#gallery">Galería</a></li>
                    <li><a href="#contact">Contacto</a></li>
                    <li><a href="<?= $site->getPath() ?>docs/template.docx" target="_blank">Plantilla</a></li>
                </ul>
                <a href="/sindicato/" class="btn navbar-btn btn-unique hidden-xs">Sindicato</a>
            </div>
        </div>
    </nav>
</header><!-- End Navbar -->

<!-- About Section -->
<section id="about" class="about">
    <div class="container text-center">
        <header>
            <h2><?= $site->getText('editorial_about_title') ?></h2>
            <h3><?= $site->getText('editorial_about_subtitle') ?></h3>
        </header>
        <p class="lead"><?= $site->getText('editorial_about_text') ?></p>
    </div>
</section>
<!-- End About Section -->

<!-- Articles Section iframes sucks!!!  -->
<section id="articles" class="articles">
    <div class="container text-center">
        <header>
            <h2><?= $site->getText('editorial_articles_title')?></h2>
            <h3><?= $site->getText('editorial_articles_subtitle')?></h3>
        </header>

        <div class="row">
            <div class="col-md-6">
                <iframe class="center-block" style="width: 80%; height: 200px;" src="https://docs.google.com/document/d/1FBUqam8kSrafiPAl7JQRwxiQoUrIEtQp1IgqL-5cI7M/pub?embedded=true"></iframe>
            </div>
            <div class="col-md-6">
                <iframe class="center-block" style="width: 80%; height: 200px;" src="https://docs.google.com/document/d/1qWMg_6jUGe75sTpgsVGggRUctkdOcFxmibeyoNPGK_k/pub?embedded=true"></iframe></iframe>
            </div>
        </div>
    </div>
</section>
<!-- End Articles Section -->

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
                        <img src="img/bg01-small.jpg" alt="image">
                        <a href="img/bg01.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg02-small.jpg" alt="image">
                        <a href="img/bg02.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg03-small.jpg" alt="image">
                        <a href="img/bg03.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg-small.jpg" alt="image">
                        <a href="img/bg.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg05-small.jpg" alt="image">
                        <a href="img/bg05.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg06-small.jpg" alt="image">
                        <a href="img/bg06.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg04-small.jpg" alt="image">
                        <a href="img/bg04.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                            <span class="icon-search"></span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                    <div class="item">
                        <img src="img/bg07-small.jpg" alt="image">
                        <a href="img/bg07.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
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
                    <img src="<?= $site->getPath() ?>img/footer_editorial.png" alt="Sindicato" width="100">
                </div>
                <p><?= $site->getText('editorial_footer_about_text') ?></p>
            </div>

            <div class="col-md-6 contact">
                <div class="header">
                    <h6>Contacto</h6>
                </div>
                <ul class="contact list-unstyled">
                    <li><span class="icon-map text-primary"></span><?= $site->getText('editorial_contact_address') ?></li>
                    <li><a href="mailto:<?= $site->getText('editorial_contact_mail') ?>"><span class="icon-mail text-primary"></span><?= $site->getText('editorial_contact_mail') ?></a>
                    </li>
                    <li><span class="icon-phone text-primary"></span><?= $site->getText('editorial_contact_phone') ?></li>
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

<?php
require_once '../includes/footer.inc.php'
?>
