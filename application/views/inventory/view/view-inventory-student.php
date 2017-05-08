<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 06 May 2017, 10:27 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inventory</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/inventory/view/view-student.min.css') ?>" rel="stylesheet">

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
            <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>">
                <span class="label label-default" style="font-size: 18px; opacity: 1">LGBT</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo site_url('inventory') ?>">
                        <span class="label label-default" style="font-size: 14px; opacity: 1">Inventory</span>
                    </a>
                </li>
                <?php if ($have_entry)
                {
                    ?>
                    <li>
                        <a href="<?php echo site_url('inventory/result') ?>">
                            <span class="label label-default" style="font-size: 14px; opacity: 1">Hasil</span>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('profile') ?>">
                        <span class="label label-default" style="font-size: 14px; opacity: 1">Profile</span>
                    </a>
                </li>
                <li>
                    <a id="logout" href="<?php echo site_url('auth/do_logout') ?>">
                        <span class="label label-default" style="font-size: 14px; opacity: 1">Logout</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container" id="content_container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1><b>Petunjuk Pengisian</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <ol>
                <li>Isilah angket dengan kejujuran dan apa adanya sesuai dengan kondisi diri anda. Hasil angket ini tidak akan mempengaruhi nilai mata pelajaran apapun. Kejujuran anda dalam mengisi angket ini akan mempengaruhi pemahaman anda terkait kondisi diri anda.</li>
                <li>Isilah setiap pernyataan menurut pendapat Anda dengan memilih satu dari empat  alternatif jawaban yang telah disediakan, yaitu:</li>
                <dl class="dl-horizontal" style="margin-top: 10px; margin-bottom: 10px">
                    <dt>Sangat Sesuai</dt>
                    <dd>: Apabila kondisi yang digambarkan pada item sangat sesuai dengen diri anda</dd>
                    <dt>Sesuai</dt>
                    <dd>: Apabila kondisi yang digambarkan pada item cukup sesuai dengen diri anda</dd>
                    <dt>Kurang Sesuai</dt>
                    <dd>: Apabila kondisi yang digambarkan pada item kurang sesuai dengen diri anda</dd>
                    <dt>Tidak Sesuai</dt>
                    <dd>: Apabila kondisi yang digambarkan pada item tidak sesuai dengen diri anda</dd>
                </dl>
                <li>Periksa kembali jawaban Anda dan pastikan tidak ada jawaban yang terlewatkan.</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <?php
            if ($b_test && $b_complete)
            {
                $url = site_url('inventory/test');
                echo "<a class=\"btn btn-default\" href=\"{$url}\" role=\"button\">Mulai Mengerjakan</a>";
            }
            else if($b_complete)
            {
                echo '<h3><span class="label label-warning">Anda Tidak Diperkenankan Mengerjakan Sekarang, Atau Hubungi Counselor Anda</span></h3>';
            }
            else
            {
                echo '<h3><span class="label label-warning">Lengkapi Identitas Anda Terlebih Dahulu</span></h3>';
            }
            ?>
        </div>
    </div>
</div>
<audio src="<?php echo base_url('/assets/audio/mp3/black_heaven.mp3') ?>" preload="auto" autoplay loop/>


<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-backstretch/jquery.backstretch.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/inventory/view/view-student.min.js') ?>"></script>
</body>
</html>

