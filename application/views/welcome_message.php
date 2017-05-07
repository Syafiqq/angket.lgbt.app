<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LGBT</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.min.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('/assets/fonts/baked/flatify/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="<?php echo base_url('/assets/css/baked/flatify/general.min.css') ?>" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="<?php echo base_url('/assets/css/baked/flatify/custom.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/baked/flatify/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/baked/flatify/owl.theme.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/baked/flatify/style.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/baked/flatify/animate.min.css') ?>" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/baked/flatify/magnific-popup.min.css') ?>">

    <style>
        .audiojs {
            background: transparent;
            box-shadow: none;
        }

        .audiojs div {
            display: none;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>
<body id="home">

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- FullScreen -->
<div class="intro-header">
    <div class="col-xs-12 text-center abcen1">
        <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Konseling</h1>
        <h2 class="h3_home wow fadeIn" data-wow-delay="0.4s">LGBT</h2>
        <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Lesbian Gay Bisexual dan Transgender</h3>
        <?php if (!$is_logged)
        ?>
        <ul class="list-inline intro-social-buttons">
            <li>
                <a href="<?php echo site_url('auth/register') ?>" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s">
                    <span class="network-name">Daftar</span>
                </a>
            </li>
            <li id="download">
                <a href="<?php echo site_url('auth/login') ?>" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s">
                    <span class="network-name">Login</span>
                </a>
            </li>
        </ul>
        <?php
        ?>
    </div>
    <!-- /.container -->
    <div class="col-xs-12 text-center abcen wow fadeIn">
        <div class="button_down ">
            <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s" href="#whatis">
                <img class="img_scroll" src="<?php echo base_url('/assets/img/baked/flatify/icon/circle.png') ?>" alt="">
            </a>
        </div>
    </div>
</div>

<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home">Flatfy</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="menuItem">
                    <a href="#useit">Use It</a>
                </li>
                <li class="menuItem">
                    <a href="#whatis">What is?</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- Use it -->
<div id="useit" class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <img class="img-responsive " src="<?php echo base_url('/assets/img/baked/flatify/ipad.png') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                <h3 class="section-heading">Full Responsive</h3>
                <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
                    <br>
                                             sdfs sit atmet sit dolor greand fdanrh sdfs
                </div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                    Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                    uam non erat mirum sapientiae lorem cupido
                    patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                </p>

                <p>
                    <a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                    <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a>
                </p>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<div class="content-section-b">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInLeftBig">
                <div id="owl-demo-1" class="owl-carousel">
                    <a href="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" alt="">
                        </div>
                    </a>
                    <a href="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" alt="">
                        </div>
                    </a>
                    <a href="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="<?php echo base_url('/assets/img/baked/flatify/iphone.png') ?>" alt="">
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 wow fadeInRightBig" data-animation-delay="200">
                <h3 class="section-heading">Drag Gallery</h3>
                <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh
                    <br>
                                             sdfs sit atmet sit dolor greand fdanrh sdfs
                </div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                    Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                    uam non erat mirum sapientiae lorem cupido
                    patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                </p>

                <p>
                    <a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                    <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <img class="img-responsive " src="<?php echo base_url('/assets/img/baked/flatify/doge.png') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                <p class="lead">A special thanks to Death to the Stock Photo for
                                providing the photographs that you see in this template.
                </p>

                <ul class="descp lead2">
                    <li>
                        <i class="glyphicon glyphicon-signal"></i>
                        Reliable and Secure Platform
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-refresh"></i>
                        Everything is perfectly orgainized for future
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-headphones"></i>
                        Attach large file easily
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- What is -->
<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>What is?</h2>
            <p class="lead" style="margin-top:0">A special thanks to Death.</p>

        </div>

        <div class="row">

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/tweet.svg') ?>" alt="Generic placeholder image">
                <h3>Follow Me</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>

                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/picture.svg') ?>" alt="Generic placeholder image">
                <h3>Gallery</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/retina.svg') ?>" alt="Generic placeholder image">
                <h3>Retina</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/laptop.svg') ?>" alt="Generic placeholder image">
                <h3>Responsive</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/map.svg') ?>" alt="Generic placeholder image">
                <h3>Google</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/browser.svg') ?>" alt="Generic placeholder image">
                <h3>Bootstrap</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/laptop.svg') ?>" alt="Generic placeholder image">
                <h3>Responsive</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/map.svg') ?>" alt="Generic placeholder image">
                <h3>Google</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="<?php echo base_url('/assets/img/baked/flatify/icon/browser.svg') ?>" alt="Generic placeholder image">
                <h3>Bootstrap</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div>
</div>

<div class="content-section-c " style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center white">
                <h2>Get Live Updates</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="mockup-content">
                    <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                        <button type="button" style="display: none">
                            <span>Subscribe to our Newsletter</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="footer-title">Follow Me!</h3>
                <!-- LICENSE -->
                <a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
                   property="dc:title">Flatfy Theme
                </a>
                by
                <a rel="dc:creator" href="http://www.andreagalanti.it"
                   property="cc:attributionName">Andrea Galanti
                </a>
                is licensed to the public under
                <BR>
                the
                <a rel="license"
                   href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
                                                                                   Commons Attribution 3.0 License - NOT COMMERCIAL
                </a>
                .


            </div> <!-- /col-xs-7 -->

            <div class="col-md-5">
                <div class="footer-banner">
                    <h3 class="footer-title">Flatfy Theme</h3>

                    Go to:
                    <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<audio src="<?php echo base_url('/assets/audio/mp3/black_heaven.mp3') ?>" preload="auto" autoplay loop/>

<script src="<?php echo base_url('/assets/js/baked/flatify/jquery-1.10.2.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/js/baked/flatify/jquery-1.10.2.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/script.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/stickUp.min.js') ?>"></script>
<script type="text/javascript">
    jQuery(function ($)
    {
        $(document).ready(function ()
        {
            $('.navbar-default').stickUp();

        });
    });

</script>
<script src="<?php echo base_url('/assets/js/baked/flatify/jquery.corner.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/wow.min.js') ?>"></script>
<script>
    new WOW().init();
</script>
<script src="<?php echo base_url('/assets/js/baked/flatify/classie.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/uiMorphingButton_inflow.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/baked/flatify/jquery.magnific-popup.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script type="text/javascript">
    jQuery(function ($)
    {
        audiojs.events.ready(function ()
        {
            var aj = audiojs.createAll();
        });

        $(document).ready(function ()
        {
        });
    });

</script>
</body>
</html>
