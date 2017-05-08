<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 06 May 2017, 12:26 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');

if (!isset($students))
{
    $students = [];
}

if (!isset($reports))
{
    $reports = [];
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Siswa</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables-autofill-bootstrap/css/autoFill.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/bower_components/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/student/report/view-counselor.min.css') ?>" rel="stylesheet">

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

<div class="container" id="content_container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="table-responsive">
                    <table id="report_tb" class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 40px">No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th style="width: 100px">Kelas</th>
                            <th style="width: 100px">Sekolah</th>
                            <th style="width: 200px">Pengisian</th>
                            <th style="width: 100px">Cetak</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        foreach ($students as $student)
                        {
                            ++$no;
                            $student['grade'] = $student['grade'] === null ? '-' : $student['grade'];
                            $student['school'] = $student['school'] === null ? '-' : $student['school'];
                            $url = site_url('report/publish');

                            echo '<tr>';
                            echo "<td>{$no}</td>";
                            echo "<td>{$student['credential']}</td>";
                            echo "<td>{$student['name']}</td>";
                            echo "<td>{$student['grade']}</td>";
                            echo "<td>{$student['school']}</td>";
                            echo "<form id=\"login\" action=\"{$url}\" method=\"get\">";
                            echo '<td>';
                            echo "<select id=\"answer\" name=\"answer\" class=\"form-control\">";
                            foreach ($student['answered'] as $answer)
                            {
                                $answer['answer_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $answer['answer_at'])->formatLocalized('%d %B %Y %H:%M');
                                echo "<option value=\"{$answer['id']}\">{$answer['answer_at']}</option>";
                            }
                            echo '</select>';
                            echo '</td>';
                            echo "<td><button type=\"submit\" class=\"btn btn-default\">Cetak</button></td>";
                            echo '</form>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-autofill/js/dataTables.autoFill.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables-autofill-bootstrap/js/autoFill.bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-buttons/js/dataTables.buttons.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-backstretch/jquery.backstretch.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/student/report/report-counselor.min.js') ?>"></script>
</body>
</html>

