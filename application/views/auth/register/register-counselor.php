<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 29 April 2017, 7:55 AM.
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
    <title>Daftar</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/auth/register-counselor.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>
<body>
<div class="container">
    <form class="form-horizontal" role="form" id="register" action="<?php echo site_url('auth/do_register') ?>" method="post" style="margin-top: 40px">
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" id="name" placeholder="Nama" name="name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="credential" class="col-sm-3 control-label">NIK/NIP</label>
            <div class="col-sm-9">
                <input type="number" id="credential" name="credential" placeholder="NIK/NIP" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="role" class="col-sm-3 control-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <select id="role" name="gender" class="form-control">
                    <option value="male">Laki Laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group">
            <label for="re-password" class="col-sm-3 control-label">Ulangi Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="re-password" placeholder="Ulangi Password" name="re_password">
            </div>
        </div>
        <div class="form-group">
            <label for="coupon" class="col-sm-3 control-label">Kupon</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="coupon" placeholder="Kupon" name="coupon">
            </div>
        </div>
        <input type="hidden" name="role" value="counselor">
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 text-left">
                <a href="<?php echo site_url('auth/register?role=student') ?>" class="text-center new-account">Anda Siswa ?</a>
            </div>
            <div class="col-sm-6 text-right">
                <a href="<?php echo site_url('auth/login?role=counselor') ?>" class="text-center new-account">Punya Akun ? Login.</a>
            </div>
        </div> <!-- /.form-group -->
    </form> <!-- /form -->
</div> <!-- ./container -->
<audio src="<?php echo base_url('/assets/audio/mp3/black_heaven.mp3') ?>" preload="auto" autoplay loop/>

<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-serialize-object/dist/jquery.serialize-object.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-backstretch/jquery.backstretch.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/audiojs/audiojs/audio.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/auth/register-counselor.min.js') ?>"></script>

</body>
</html>

