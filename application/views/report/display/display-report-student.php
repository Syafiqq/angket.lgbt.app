<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 07 May 2017, 8:48 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');
if (!isset($profile))
{
    $profile = [];
}

if (!isset($categories))
{
    $categories = [];
}

if (!isset($result))
{
    $result = [];
}
if (!isset($answered))
{
    $answered = [];
}

$profile['school'] = $profile['school'] === null ? '-' : $profile['school'];
$profile['grade'] = $profile['grade'] === null ? '-' : $profile['grade'];
$profile['gender'] = $profile['gender'] === 'male' ? 'Laki Laki' : 'Perempuan';
$profile['address'] = $profile['address'] === null ? '-' : $profile['address'];
$profile['birthplace'] = $profile['birthplace'] === null ? '-' : $profile['birthplace'];
$profile['datebirth'] = $profile['datebirth'] === null ? '-' : Carbon::createFromFormat('Y-m-d', $profile['datebirth'])->formatLocalized('%d %B %Y');
$profile['birth'] = (($profile['birthplace'] === '-') && ($profile['datebirth'] === '-')) ? '-' : (($profile['birthplace'] === '-') ? $profile['datebirth'] : (($profile['datebirth'] === '-') ? $profile['birthplace'] : "{$profile['birthplace']}, {$profile['datebirth']}"));
$answered['answer_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $answered['answer_at'])->formatLocalized('%d %B %Y %H:%M');

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laporan</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/bootstrap3_player/css/bootstrap3_player.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/report/display/display-student.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
    <style type="text/css">
        .no-padding-side {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
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

<div class="container" id="print_container">
    <div class="row vertical-align">
        <div class="col-sm-12 text-center">
            <p id="content_title" style="font-weight: bolder; font-size: 20px; margin: 4px">INVENTORY LGBT</p>
            <p id="content_subtitle" style="font-size: 16px">(LESBIAN, GAY, BISEXUAL, DAN TRANSGENDER)</p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Nama :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $profile['name'] ?></p>
        </div>
        <div class="col-sm-3 text-right">
            <p>TTL :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $profile['birth'] ?></p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Jenis Kelamin :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $profile['gender'] ?></p>
        </div>
        <div class="col-sm-3 text-right">
            <p>Kelas :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $profile['grade'] ?></p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Sekolah :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $profile['school'] ?></p>
        </div>
        <div class="col-sm-3 text-right">
            <p>Tanggal Pengisian :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p><?php echo $answered['answer_at'] ?></p>
        </div>
    </div>
    <div class="row vertical-align" style="margin-top: 1cm">
        <div class="col-sm-12">
        </div>
    </div>
    <?php
    foreach ($result as $rv)
    {
        ?>
        <div class="row vertical-align">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2 text-right">
                <p>Variabel :</p>
            </div>
            <div class="col-sm-8  no-padding-side">
                <p><?php echo $categories[".{$rv['category']}"]['name']?></p>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2 text-right">
                <p>Prosentase :</p>
            </div>
            <div class="col-sm-8  no-padding-side">
                <p><?php printf('<td>%.4f %%</td>',$rv['value']);?></p>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 ">
            </div>
            <div class="col-sm-2 text-right">
                <p>Interpretasi :</p>
            </div>
            <div class="col-sm-8 no-padding-side text-justified">
                <ol>
                    <?php foreach ($rv['interpretation'] as $iv)
                    {
                        echo "<li>{$iv}</li>";
                    }
                        ?>
                </ol>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <?php
    }
    ?>

    <div class="row" style="margin-top: .35cm">
        <div class="col-sm-1 ">
        </div>
        <div class="col-sm-10 no-padding-side text-justified">
            <p>Hasil diatas merupakan data diri <b><?php echo $profile['name'] ?></b> dalam kecenderungannya terhadap LGBT. Apabila terdapat hasil yang pdirasa tidak sesuai atau memerlukan penjelasan lebih lanjut terkait kondisi diri anda, silahkan datang kepada konselor untuk mendiskusikan hal tersebt lebih lanjut.</p>
        </div>
        <div class="col-sm-1">
        </div>
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
<script src="<?php echo base_url('/assets/js/report/display/display-student.min.js') ?>"></script>
</body>
</html>
