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
    <title>Konseling LGBT</title>
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
            <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s" href="#useit">
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
            <a class="navbar-brand" href="#home">Inventory LGBT</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="menuItem">
                    <a href="#useit">Pengantar</a>
                </li>
                <li class="menuItem">
                    <a href="#whatis">Pengembang</a>
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
                <img class="img-responsive " src="<?php echo base_url('/assets/img/ui/landing_page/lesbian.jpg') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                <h2 class="section-heading">Lesbian</h2>
                <p class="lead">
                    Menurut Sadarjoen (2005) menyatakan bahwa perempuan sesama jenis yang dapat mencapai kepuasan seksual secara optimal. Sedangkan menurut Haryanti (2016) menyatakan bahwa lesbian merupakan hubungan yang menyangkut ikatan cinta antar sesama perempuan.
                </p>
                <h3>
                    <b>Faktor Penyebab</b>
                </h3>
                <p class="lead">
                    Menurut Soetjiningsih (haryanti 2016) mengatakan bahwa beberapa penyebab lesbian, di antaranya: (a) hormonal, Masa pubertas merupakan faktor terpenting bagi pemastian seksualitas seorang wanita, (b) Pola Asuh, Pola asuh yang diberikan keluarga heteroseksual akan kurang ketika keluarga heteroseksual mengalami broken-home. Pola asuh yang diberikan orang tua sedikit terabaikan, dan (c) Trauma Kehidupan, Pengalaman hubungan heteroseksual yang tidak bahagia atau tidak kemampuan individu untuk menarik perhatian lawan jenis yang dipercaya dapat menyebabkan homoseksualitas atau lesbian.
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
                <img class="img-responsive " src="<?php echo base_url('/assets/img/ui/landing_page/gay.jpg') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInRightBig" data-animation-delay="200">
                <h2 class="section-heading">Gay</h2>
                <p class="lead">
                    Homoseksual merupakan penyimpangan seksual yang ditandai dengan timbulnya rasa suka terhadap orang lain yang memiliki jenis kelamin yang sama. Istilah homoseksual bermula pada tahun 1896 oleh Karl Maria kerbeny, seorang dokter berkebangsaan jermal-Hongaria. Istilah yang umum dikenal masyarakat ialah gay dan lesbian. Gay merupakan julukan relasi pria dengan pria, sedangkan lesbian wanita dengan wanita. Menurut Reber & Reber (2010) gay julukan untuk kaum homoseksual yang ditujukan untuk pria. Sedangkan ntuk wanita dijuluki dengan istilah lesbian. Menurut Duffy & Atwer (2005) gay adalah lelaki yang mempunyai orientasi seksual terhadap sesama lelaki. </p>
                <h3>
                    <b>Faktor Penyebab</b>
                </h3>
                <p class="lead">
                    Faktor lingkungan keluarga merupakan salah satu penyebab seseorang menjadi homoseksual. Lingkungan keluarga turut mempengaruhi terbentuknya homoseksual. Keluarga merupakan penyebab munculnya perilaku homoseksual, sebab anggota keluarga merupakan lingkungan pertama anak dan orang yang paling penting selama tahun-tahun formatif awal. Jenis pola keluarga dan siapa anggota keluarga yang ikut berperan, mempengaruhi perkembangan anak (Hurlock,1999).
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <img class="img-responsive " src="<?php echo base_url('/assets/img/ui/landing_page/bisexual.png') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                <h2 class="section-heading">Bisexual</h2>
                <p class="lead">
                    Menurut Mac.Donald (Crooks & Baur, 2005:14), individu biseksual adalah individu yang dapat terlibat dan menikmati aktivitas seksual dengan kedua jenis kelamin, yaitu jenis kelamin yang sama dan jenis kelamin yang berbeda, atau mengetahui bahwa dirinya tertarik untuk melakukan hal tersebut. Coleman (1980:2) menggolongkan biseksual ke dalam orientasi homoseksual, karena secara teori biseksual pun mengalami ketertarikan terhadap sejenis. </p>
                <h3>
                    <b>Faktor Pendorong</b>
                </h3>
                <p class="lead">
                    Menurut Widyarini (2004:14), faktor pendorong kecenderungan berorientasi biseksual akan mewujud menjadi tindakan atau perilaku biseksual yang didorong oleh beberapa keadaan, yaitu:
                <ol>
                    <li>1. Coba-coba</li>
                    <li>2. Seks bebas (free sex)</li>
                    <li>3. Kebutuhan emosial yang tak terpenuhi</li>
                    <li>4. Kebutuhan akan variasi dan kreativitas</li>
                </ol>
                </p>
            </div>
        </div>
    </div>

</div>

<div class="content-section-b">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInLeftBig">
                <img class="img-responsive " src="<?php echo base_url('/assets/img/ui/landing_page/Transgendersign.png') ?>" alt="">
            </div>

            <div class="col-sm-6 wow fadeInRightBig" data-animation-delay="200">
                <h2 class="section-heading">Transgender</h2>
                <p class="lead">
                    Menurut Sue (1989 dalam as’ad, 2015:24) “Transgender yaitu kelainan seksualitas yang berlawanan dengan struktur fisiknya”. Dengan kata lain, transgender adalah kelainan seksualitas yang menyebabkan penderitanya ingin merubah struktur fisiknya sesuai jenis kelamin yang di inginkan. Sedangkan definisi lain menurut Rughea (2014:6) “Transgender merupakan suatu kelainan dimana penderita merasa tidak nyaman dan tidak sesuai dengan jenis kelamin anatomisnya sehingga penderita ingin mengganti kelaminnya (dari laki-laki menjadi wanita) dan cenderung berpenampilan menyerupai wanita”. Menurut Thomas (2016:13) “Transgender merupakan suatu kelainan kebingungan seksual memilih gender antara perempuan atau laki-laki”.
                <h3>
                    <b>Faktor Penyebab</b>
                </h3>
                <p class="lead">
                    Menurut as’ad (2015:31) adapun faktor penyebab transgender ialah (1) Psikologis: Adanya dorongan untuk selalu berperilaku dan berpakaian seperti lawan jenis, tidak adanya figur ayah/ ibu, tidak ada contoh dari saudara yang sesama jenis, (2) Sosiologis : Mempunyai pasangan seks abnormal, kurangnya mendapatkan teman yang sesama jenis. Menurut Rughea (2014:11) Faktor penyebab transgender ialah (1) Adanya dorongan dari diri yang ingin mengidentifikasi dirinya seperti lawan jenis, (2) Adanya pengaruh dari luar yang menyebabkan rasa nyaman dengan jenis kelamin yang di inginkan. </p>
            </div>
        </div>
    </div>
</div>

<!-- What is -->
<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Pengembang</h2>
            <p class="lead" style="margin-top:0"></p>

        </div>

        <div class="row">

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Prof Nur.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Prof. Dr. Hj. Nur Hidayah.M,Pd</h4>
                <p class="lead">
                    Lahir di Gresik, 17 Agustus 1959 dan Bertempat tinggal di Perum Permata Hijau D/57. Memiliki Hobby Membaca dan Motto “ Be Your Self”. Telah selesai menempuh Pendidikan S-1, S-2, S-3 jurusan Bimbingan dan Konseling dan telah menjadi dosen dan guru besar Bimbingan dan Konseling Universitas Megeri Malang
                </p>
                Email : nurhidayahum@yahoo.com, nur.hidayah.fip.um.ac.id
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Asisten Feny.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Feny Andriyanti</h4>
                <p class="lead">
                    Lahir di Sidoarjo, 17 Juni 1995 dan beralamat di Ds. Janti, Kec. Tarik,Kab.Sidoarjo. Memiliki Hobby Browsing dan Motto Inginkan yang Terbaik dan Lakukan yang Terbaik
                </p><!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    Email : Feny.andriyanti95@gmail.com
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Asisten Maghfirotul.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Maghfirotul Amalia</h4>
                <p class="lead">
                    Lahir di Malang, 06 April 1995 dan beralamat Jl Raya Pang. Sudirman No.74 Bululawang-Malang. Memiliki Hobi berwisata kuliner dan Motto Selalu Berpikir Besar dan Bertindak Mulai Sekarang
                </p>
                Email : amalia_maghfirotul@yahoo.com
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Hanifan.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Hanifan Ahadinasrikin</h4>
                <p class="lead">Lahir di Mojokerto, 14 Juli 1996 dan beralamat di Dsn.Beru, Ds.Pulorejo, kec.Dawarblandong- Mojoketo. Memiliki Hobby Cycling dan Motto Langkahku takkan terhenti.</p>
                Email : hanifan.ahadinas@gmail.com
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Cyntya.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Chintiya Dewi Andriyani </h4>
                <p class="lead">Lahir di Gresik, 12 Januari 1997 dan beralamat di Perum Citramas Raya No.i 2. Memiliki Hobi Renang dan kuliner, dan Moto Percayalah, Tuhan tak pernah salah memberi rezeki</p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                Email : Chintiya31@gmail.com
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Siti.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Siti Nur Laila</h4>
                <p class="lead">Lahir di Bojonegoro, 25 September 1997 dan beralamat di jl. Brigjen Sutoyo no.79 Bojonegoro. Memiliki Hobby Kuliner dan Motto Kebahagian orang tua nomer satu.</p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                Email : Lailalaila716@gmail.com
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/Irsalina.jpeg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Irsalina Rahmawati</h4>
                <p class="lead">Lahir di Oku Timur, 28 Juli 1997 dan beralamat di Oku Timur Sumatera Selatan. Memiliki Hobby Traveling dan Motto Gagal terjadi jika menyerah.</p>
                Email : irsarahma28@yahoo.com
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/avatar/male/boy-20.png') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Muhammad Syafiq, S.Kom</h4>
                <p class="lead">Lahir di Pasuruan, 16 Desember 1993 dan beralamat di Jl. Apel I No. 449 Bangil, Pasuruan. Memiliki Motto Hidup Bermakna seperti Larry. Telah menyelesaikan Pendidikan S-1 Teknik Informatika Universitas Brawijaya</p>
                Email : id.muhammad.syafiq@gmail.com
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate img-circle" src="<?php echo base_url('/assets/img/ui/landing_page/fix/test.jpg') ?>" alt="Generic placeholder image" width="200" height="200">
                <h4>Husni Hanafi, S.Pd</h4>
                <p class="lead">Lahir di Pasuruan, 19 Juni 1994 dan beralamat di Jl. Suro No. 40 Bangil, Pasuruan. Memiliki Motto Semua mudah di jalan yang tepat. Telah menyelesaikan Pendidikan S-1 Bimbingan dan Konseling Universitas Negeri Malang</p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                hanafihusni.19@gmail.com
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
