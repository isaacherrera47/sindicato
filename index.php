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
                    <div class="sl-slide-inner" style="background-image: url(img/hero-bg.jpg);">
                        <div class="container">
                            <h2>This is <span class="text-primary">Italiano restaurant</span></h2>
                            <h1>Bootstrap Template</h1>
                            <p>An elegant Bootstrap template brought to you by <a href="https://bootstraptemple.com/"
                                                                                  target="_blank">Bootstrap Temple</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10"
                     data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner" style="background-image: url(img/hero-bg02.jpg);">
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
                    <div class="sl-slide-inner" style="background-image: url(img/hero-bg03.jpg);">
                        <div class="container">
                            <h2>Visit <span class="text-primary">italiano restaurant</span></h2>
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
                        <i class="icon-hat"></i>
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


    <!-- App Section -->
    <section id="app" class="app">
        <div class="container text-center has-border">
            <h5>Our app is availble now, we made it easire, Download it now.</h5>
            <ul class="list-unstyled list-inline">
                <li><a href="https://bootstraptemple.com/" target="_blank" title="Google Play" class="btn-unique-white">Google
                        Play</a></li>
                <li><a href="https://bootstraptemple.com/" target="_blank" title="Appstore" class="btn-unique-white">App
                        Store</a></li>
                <li><a href="https://bootstraptemple.com/" target="_blank" title="Bootstrap Temple"
                       class="btn-unique-white">Download this template</a></li>
            </ul>
        </div>
    </section>
    <!-- End App Section -->


    <!-- Dishes Section -->
    <section id="dishes" class="dishes">
        <div class="container text-center">
            <header>
                <h2>Signature Dishes</h2>
                <h3>Fresh and healthy food available</h3>
            </header>
            <!-- Set up your HTML -->
            <div class="owl-carousel owl-theme">
                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-c.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>

                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-b.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>

                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-a.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>

                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-c.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>

                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-b.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>

                <!-- item -->
                <div class="dish">
                    <div class="profile">
                        <img src="img/dish-a.png" class="img-responsive" alt="dish name">
                        <div class="price">
                            <span>17$</span>
                        </div>
                    </div>
                    <div class="text">
                        <h4>Fried Shrimp</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dishes Section -->


    <!-- Offers Section -->
    <section id="offers" class="offers">
        <div class="container text-center">

            <header>
                <h2>Special Offers</h2>
                <h3>Don't miss our offers</h3>
            </header>

            <div class="row">
                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary text-large">30.00$</p>
                            <p class="before text-muted text-large">50.00$</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary text-large">30.00$</p>
                            <p class="before text-muted text-large">50.00$</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary">30.00$</p>
                            <p class="before text-muted">50.00$</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offers Section -->


    <!-- Menu Section -->
    <section id="menu" class="menu">
        <div class="container">
            <header class="text-center">
                <h2>Our food menu</h2>
                <h3>Our most popular menu</h3>
            </header>

            <div class="menu">
                <!-- Tabs Navigatin -->
                <ul class="nav nav-tabs text-center has-border" role="tablist">
                    <li role="presentation" class="active"><a href="#breakfast" aria-controls="breakfast" role="tab"
                                                              data-toggle="tab">Breakfast</a></li>
                    <li role="presentation"><a href="#lunch" aria-controls="lunch" role="tab"
                                               data-toggle="tab">Lunch</a></li>
                    <li role="presentation"><a href="#dinner" aria-controls="dinner" role="tab"
                                               data-toggle="tab">Dinner</a></li>
                    <li role="presentation"><a href="#party" aria-controls="party" role="tab"
                                               data-toggle="tab">Party</a></li>
                    <li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab"
                                               data-toggle="tab">Drinks</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Breakfast Panel -->
                    <div role="tabpanel" class="tab-pane active" id="breakfast">
                        <div class="row">
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Breakfast Panel-->

                    <!-- lunch Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="lunch">
                        <div class="row">
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End lunch Panel-->

                    <!-- Dinner Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="dinner">
                        <div class="row">
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Dinner Panel-->

                    <!-- Party Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="party">
                        <div class="row">
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Party Panel-->

                    <!-- Drinks Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="drinks">
                        <div class="row">
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item recommended has-border clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Lemon and Garlic Green Beans</h5>
                                        <p>Lemon / Garlic / Beans</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                        <span class="text-medium">Recommended</span>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>LambBeef Kofka Skewers with Tzatziki</h5>
                                        <p>Lamb / Wine / Butter</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>

                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Meatloaf with Black Pepper-Honey BBQ</h5>
                                        <p>Pepper / Chicken / Honey</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Imported Oysters Grill (5 Pieces)</h5>
                                        <p>Oysters / Veggie / Ginger</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-sm-6">
                                <div class="menu-item clearfix">
                                    <div class="item-details pull-left">
                                        <h5>Wild Mushroom Bucatini with Kale</h5>
                                        <p>Mushroom / Veggie / White Sources</p>
                                    </div>
                                    <div class="item-price pull-right">
                                        <strong class="text-large text-primary">20$</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Drinks Panel-->
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section -->


    <!-- Events Section -->
    <section id="events" class="events">
        <div class="container">
            <header class="text-center">
                <h2>Upcoming Events</h2>
                <h3>Don’t miss our awesome events</h3>
            </header>

            <div class="row">
                <!-- Profile Side  -->
                <div class="col-sm-6">
                    <div class="profile has-border" style="background-image: url(img/event-bg.jpg);">
                        <ul class="date list-unstyled list-inline clearfix">
                            <li class="day pull-left">15<sup>th</sup></li>
                            <li class="month pull-left">December <span>2016</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Details Side  -->
                <div class="col-sm-6">
                    <div class="details">
                        <h3>Italian Master Class</h3>
                        <h4 class="text-primary">15 December 2016 | 20:00</h4>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                        <a href="#" class="read-more btn-unique">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Section -->


    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container text-center">
            <header>
                <h2>Our Gallery</h2>
                <h3>Discover the photo gallery</h3>
            </header>

            <div class="gellery">
                <div class="row">
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg01-small.jpg" alt="image">
                            <a href="img/bg01.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg02-small.jpg" alt="image">
                            <a href="img/bg02.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg03-small.jpg" alt="image">
                            <a href="img/bg03.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
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
                            <a href="img/bg05.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg06-small.jpg" alt="image">
                            <a href="img/bg06.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg04-small.jpg" alt="image">
                            <a href="img/bg04.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                        <div class="item">
                            <img src="img/bg07-small.jpg" alt="image">
                            <a href="img/bg07.jpg" data-lightbox="image-1" data-title="Image Caption"
                               class="has-border">
                                <span class="icon-search"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->


    <!-- Booking Section -->
    <section id="booking" class="booking">
        <div class="container text-center">
            <header>
                <h2>Order your table</h2>
                <h3>Enjoy your meal at our restaurant</h3>
            </header>

            <div class="row">
                <div class="form-holder col-md-10 col-md-push-1 text-center">
                    <div class="ribbon">
                        <i class="fa fa-star"></i>
                    </div>

                    <h2>Make a reservation</h2>
                    <h3>Book your table now</h3>

                    <form id="booking-form" method="get" action="#">
                        <div class="row">
                            <div class="col-md-10 col-md-push-1">
                                <div class="row">
                                    <label for="name" class="col-sm-6 unique">Name
                                        <input name="name" type="text" id="name" required>
                                    </label>
                                    <label for="email" class="col-sm-6 unique">Email
                                        <input name="email" type="email" id="email" required>
                                    </label>
                                    <label for="number" class="col-sm-6 unique">Number
                                        <input name="number" type="text" id="number" required>
                                    </label>
                                    <label for="people" class="col-sm-6 unique">How Many People
                                        <input name="people" type="number" id="people" min="1" required>
                                    </label>
                                    <label for="date" class="col-sm-6 unique">Date
                                        <input name="date" type="text" id="date" class="datepicker-here"
                                               data-language='en' required>
                                    </label>
                                    <label for="time" class="col-sm-6 unique">Time
                                        <input name="time" type="text" id="time" class="timepicker" required>
                                    </label>
                                    <label for="request" class="col-sm-12 unique">Special Request
                                        <textarea id="request" name="request" required></textarea>
                                    </label>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn-unique">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Booking Section -->


    <!-- End Booking Section -->
    <section id="contact" class="contact">
        <div id="map"></div>
        <div class="container text-center">
            <div class="form-holder">
                <header>
                    <h2>Contact Us</h2>
                    <h3>Feel free to contact us</h3>
                </header>

                <form method="get" action="#" id="contact-form">
                    <div class="row">
                        <label for="user-name" class="col-sm-6 unique">Name
                            <input type="text" name="username" id="user-name" required>
                        </label>
                        <label for="user-email" class="col-sm-6 unique">Email
                            <input type="email" name="useremail" id="user-email" required>
                        </label>
                        <label for="message" class="col-sm-12 unique">Your Message
                            <textarea name="message" id="message" required></textarea>
                        </label>
                        <div class="col-sm-12">
                            <button type="submit" class="btn-unique" id="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Booking Section -->


    <!-- Footer -->
    <footer id="mainFooter" class="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4 brief">
                    <div class="header">
                        <img src="img/logo-footer.png" alt="italiano" width="100">
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.</p>
                </div>

                <div class="col-md-4 contact">
                    <div class="header">
                        <h6>Contact</h6>
                    </div>
                    <ul class="contact list-unstyled">
                        <li><span class="icon-map text-primary"></span>Basioun, 23 July st, Egypt</li>
                        <li><a href="mailto:Italiano@Company.com"><span class="icon-phone text-primary"></span>Italiano@Company.com</a>
                        </li>
                        <li><span class="icon-mail text-primary"></span>9465 7675 294</li>
                        <li><span class="icon-printer text-primary"></span>333-999-666</li>
                    </ul>
                </div>

                <div class="col-md-4 newsletter">
                    <div class="header">
                        <h6>Newsletter</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmo.</p>
                    <form action="#" id="subscribe" class="clearfix">
                        <input type="email" name="subscribtion-email" placeholder="Enter Your Email Address"
                               class="pull-left">
                        <button type="submit" class="btn-unique has-border pull-left">Subscribe</button>
                    </form>
                </div>
            </div>

            <ul class="social list-unstyled list-inline">
                <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank" title="Skype"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>

        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Policy Privacy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-7">
                        <p>&copy; 2017 Italiano Restaurant. Template By <a href="https://bootstraptemple.com/"
                                                                           target="_blank">BootstrapTemple.com</a></p>
                        <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- scroll top btn -->
    <div id="scrollTop" class="btn-unique">
        <i class="fa fa-angle-up"></i>
    </div><!-- end scroll top btn -->


    <!-- moadal booking form -->
    <div class="reservation-overlay hidden-sm hidden-xs">
        <section id="reservation-modal" class="reservation-modal">
            <div id="close"><i class="icon-close"></i></div>

            <div class="container">
                <div class="row">
                    <div class="form-holder col-md-12 text-center">
                        <h2>Make a reservation</h2>
                        <h3>Book your table now</h3>

                        <form id="booking-form-alternative" method="get" action="#">
                            <div class="row">
                                <div class="col-md-push-1 col-sm-10">
                                    <div class="row">
                                        <label for="cname" class="col-sm-6 unique">Name
                                            <input name="clientname" type="text" id="cname" required>
                                        </label>
                                        <label for="cemail" class="col-sm-6 unique">Email
                                            <input name="clientemail" type="email" id="cemail" required>
                                        </label>
                                        <label for="cnumber" class="col-sm-6 unique">Number
                                            <input name="clientnumber" type="text" id="cnumber" required>
                                        </label>
                                        <label for="cpeople" class="col-sm-6 unique">How Many People
                                            <input name="clientpeople" type="number" id="cpeople" min="1" required>
                                        </label>
                                        <label for="cdate" class="col-sm-6 unique">Date
                                            <input name="clientdate" type="text" id="cdate" class="datepicker-here"
                                                   data-language='en' required>
                                        </label>
                                        <label for="time-alt" class="col-sm-6 unique">Time
                                            <input name="clienttime" type="text" id="time-alt" class="timepicker"
                                                   required>
                                        </label>
                                        <label for="request-alt" class="col-sm-12 unique">Special Request
                                            <textarea id="request-alt" name="clientrequest" required></textarea>
                                        </label>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn-unique">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- end modal booking form -->

<?php
require_once 'includes/footer.inc.php';
?>