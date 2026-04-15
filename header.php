<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="reviun">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <?php include_once("seo.php"); ?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/container_foto.css?v=12">
    <link rel="stylesheet" href="assets/css/reviun.css?v=23">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.compat.css" />

    <script src="vendor/jquery/jquery.min.js"></script>

</head>

<?php
$page = basename($_SERVER['PHP_SELF']);

$siteurl = "";
$site_base_url = "";
$services_url = "home#services";
$services_base_url = "";
$isProd = false;

if (
    $_SERVER['SERVER_NAME'] == "www.reviun.co.uk" || $_SERVER['SERVER_NAME'] == "reviun.co.uk"
    || $_SERVER['SERVER_NAME'] == "www.reviun.co.uk" || $_SERVER['SERVER_NAME'] == "reviun.co.uk"
) {
    if (isset($_SERVER['HTTPS'])) {
        $siteurl = "https://reviun.co.uk/";
    } else {
        $siteurl = "https://reviun.co.uk/";
    }
    $services_url = "https://reviun.co.uk/home#services";
    $services_base_url = "https://reviun.co.uk/";
    $isProd = true;

    error_reporting(0);
} else {
    $siteurl = "http://{$_SERVER['SERVER_NAME']}/reviun/";
}

$dockerURL = getenv('DOCKER_SITE_URL');

if (isset($dockerURL) && $dockerURL != "") {
    //echo "Env exist >>$dockerURL<<";
    $services_url = "https://reviun.co.uk/home#services";
    $services_base_url = "https://reviun.co.uk/";
    $isProd = true;
    $site_base_url = $siteurl = $dockerURL;
} else {
    //echo "Env NOT exist";
    $site_base_url = $siteurl;
}



?>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header" style="display: block;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12  wow slideDown" data-wow-delay=".2s">
                    <marquee style="color: white;">Inert Atmosphere Glove Box Sales in UK</marquee>
                </div>
                <div class="col-md-6">
                    <ul class="right-icons">
                        <li class=" wow fadeInRight" data-wow-delay=".2s"><a target="_blank"
                                href="https://www.facebook.com/people/Reviun-Ltd/100088920520170/"><i
                                    class="fab fa-facebook"></i></a></li>

                        <li class=" wow fadeInRight" data-wow-delay=".3s"><a target="_blank"
                                href="https://mobile.twitter.com/reviunltd"><i class="fab fa-twitter"></i></a></li>
                        <li class=" wow fadeInRight" data-wow-delay=".4s"><a target="_blank"
                                href="https://www.linkedin.com/company/reviun/"><i class="fab fa-linkedin"></i></a></li>
                        <li class=" wow fadeInRight" data-wow-delay=".5s"><a target="_blank"
                                href="https://www.youtube.com/@reviunltd"><i class="fab fa-youtube"></i></a></li>
                        <li class=" wow fadeInRight" data-wow-delay=".6s" style="padding: 0px 10px"><a target="_blank"
                                href="tel:+447983839896"><i class="fas fa-phone"></i>+44 7983 839896</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="myheader">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand wow fadeInLeft" data-wow-delay=".2s" href="<?= $site_base_url ?>home">
                    <h2><img src="reviun-logo-color.jpg" style="max-width: 200px;" class="" /></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon1"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="display: none;">
                            <a class="nav-link current" href="#top">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInRight" data-wow-delay=".2s">
                            <a class="nav-link external" href="<?= $site_base_url ?>about">About</a>
                        </li>
                        <?php
                        if ($page == "index.php") {
                        ?>
                        <li class="nav-item wow fadeInRight" data-wow-delay=".3s">
                            <a class="nav-link" href="<?= $site_base_url ?>#services">Services</a>
                        </li>
                        <?php
                        } else {
                        ?>
                        <li class="nav-item wow fadeInRight" data-wow-delay=".3s">
                            <a class="nav-link external" href="<?= $services_url ?>">Services</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item wow fadeInRight" data-wow-delay=".4s">
                            <a class="nav-link external" href="<?= $site_base_url ?>products">Products</a>
                        </li>


                        <li class="nav-item wow fadeInRight" data-wow-delay=".5s">
                            <a class="nav-link external" href="<?= $site_base_url ?>resources">Resources</a>
                        </li>


                        <li class="nav-item wow fadeInRight" data-wow-delay=".6s">
                            <a class="nav-link external" href="<?= $site_base_url ?>contact">Contact</a>
                        </li>


                        <li class="nav-item-lastbtn wow fadeInRight" data-wow-delay=".7s">
                            <a class=" external" target="_blank" href="https://www.ebay.co.uk/usr/reviun_ltd"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </li>

                        <!-- <li class="nav-item">
                <a class="nav-link" href="#contactus">Contact</a>
              </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>