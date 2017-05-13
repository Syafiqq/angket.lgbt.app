<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 02 May 2017, 12:04 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="raw/css/dashboard/view/view-counselor.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/bootstrap3_player/css/bootstrap3_player.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/dashboard/view/view-counselor.min.css') ?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>
<body>
<nav class="navbar navbar-default" id="nav_container" style=" opacity: 1;background: url('/assets/img/ui/header.png');background-size: 166px 50px;background-repeat: repeat;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>"><span class="label label-default" style="font-size: 18px; opacity: 1">LGBT</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo site_url('inventory') ?>"><span class="label label-default" style="font-size: 14px; opacity: 1">Inventory</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('student') ?>"><span class="label label-default" style="font-size: 14px; opacity: 1">Siswa</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('student/report') ?>"><span class="label label-default" style="font-size: 14px; opacity: 1">Laporan</span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('profile') ?>"><span class="label label-default" style="font-size: 14px; opacity: 1">Profile</span></a>
                </li>
                <li>
                    <a id="logout" href="<?php echo site_url('auth/do_logout') ?>"><span class="label label-default" style="font-size: 14px; opacity: 1">Logout</span></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!--<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button id="coupon_generator" class="btn btn-default" data-coupon-action="<?php /*echo site_url('dashboard/do_generate_coupon') */?>" type="button">Generate Coupon</button>
        </div>
    </div>
</div>-->
<div class="jumbotron" id="content_container">
    <div class="container">
        <h1>Selamat Datang</h1>
        <h3>
            Selamat datang di Inventori LGBT
        </h3>
        <ul>
            <li style="padding: 2px">Klik <a class="btn btn-default" href="<?php echo site_url('inventory') ?>" role="button"><b>Inventory</b></a>untuk memulai memodifikasi angket</li>
            <li style="padding: 2px">Klik <a class="btn btn-default" href="<?php echo site_url('student') ?>" role="button"><b>Siswa</b></a> untuk melihat daftar siswa</li>
            <li style="padding: 2px">Klik <a class="btn btn-default" href="<?php echo site_url('student/report') ?>" role="button"><b>Laporan</b></a> untuk melihat laporan siswa</li>
            <li style="padding: 2px">Klik <button id="coupon_generator" class="btn btn-default" data-coupon-action="<?php echo site_url('dashboard/do_generate_coupon') ?>" type="button"><b>Generate Kode Registrasi</b></button> untuk men-generate kode registrasi pendaftaran</li>
        </ul>

    </div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <div class="_cs-audio">
                        <audio preload id="music" controls="controls">Browser anda tidak support untuk memutar Musik</audio>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Musik
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <ol id="plList">
                                <li data-audio="<?php echo base_url('/assets/audio/mp3/music1.mp3') ?>">Musik 1</li>
                                <li data-audio="<?php echo base_url('/assets/audio/mp3/music2.mp3') ?>">Musik 2</li>
                                <li data-audio="<?php echo base_url('/assets/audio/mp3/music3.mp3') ?>">Musik 3</li>
                            </ol>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</div>


<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-backstretch/jquery.backstretch.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/bootstrap3_player/js/bootstrap3_player.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/dashboard/view/view-counselor.min.js') ?>"></script>
</body>
</html>
