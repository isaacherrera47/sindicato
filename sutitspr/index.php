<?php
require_once '../includes/header.inc.php';
$docs = loadDocsLinks();
?>

<!-- Navbar -->
<header class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/Sindicato/sutitspr" class="navbar-brand"><img src="<?= $site->getPath() ?>img/logo_editorial.png"
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
                    <li><a href="#contact">Contacto</a></li>
                    <li><a href="<?= $site->getPath() ?>docs/template.pdf" target="_blank">Plantilla</a></li>
                    <li><a href="<?= $site->getPath() ?>docs/convocatoria.pdf" target="_blank">Convocatoria</a></li>
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

<!-- Articles Section -->
<section id="articles" class="menu">
    <div class="container">
        <header class="text-center">
            <h2><?= $site->getText('editorial_articles_title') ?></h2>
            <h3><?= $site->getText('editorial_articles_subtitle') ?></h3>
        </header>

        <div class="articles">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active">
                    <div class="row">
                        <?php foreach ($docs as $doc): ?>
                        <!-- item -->
                        <div class="col-sm-12">
                            <div class="menu-item <?= $doc['optional'] ?> has-border clearfix">
                                <div class="item-details pull-left">
                                    <h5><?= $doc['title'] ?></h5>
                                    <p><?= $doc['subtitle'] ?></p>
                                </div>
                                <div class="item-price pull-right">
                                    <a href="#" data-url="<?= $doc['url'] ?>" class="btn btn-unique open-iframe">
                                        Previsualizar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Articles Section -->

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

<!-- moadal iframe -->
<div class="iframe-overlay">
    <section id="iframe-modal" class="iframe-modal">
        <div id="close"><i class="icon-close"></i></div>

        <div class="container">
            <div class="row">
                <div class="form-holder col-md-12 text-center">
                    <h3>Previsualización del documento</h3>
                    <iframe id="placed_iframe" name="placed_iframe"></iframe>
                </div>
            </div>
        </div>
    </section>
</div><!-- end iframe modal -->

<?php
require_once '../includes/footer.inc.php'
?>
