<?php
require_once '../includes/header.inc.php'
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
                    <li><a href="http://www.sutitspr.com.mx/permisos/" target="_blank">Sindicato</a></li>
                </ul>
                <a href="/sindicato/" class="btn navbar-btn btn-unique hidden-xs">Editorial SUTITSPR</a>
            </div>
        </div>
    </nav>
</header><!-- End Navbar -->

<?php
require_once '../includes/footer.inc.php'
?>
