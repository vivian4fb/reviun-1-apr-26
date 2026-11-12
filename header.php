<?php
include_once(__DIR__ . "/includes/config.php");
$rv_page = !empty($rv_page);
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Reviun Ltd">
    <link rel="icon" type="image/png" href="/favicon.png">
    <?php include_once("seo.php"); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php if (!$rv_page) { ?>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/container_foto.css?v=12">
    <link rel="stylesheet" href="assets/css/reviun.css?v=23">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.compat.css" />
    <script src="vendor/jquery/jquery.min.js"></script>
<?php } ?>
    <link rel="stylesheet" href="/assets/css/rv.css?v=6">
</head>

<body class="<?= $rv_page ? 'rv' : 'rv-legacy' ?>">

    <div class="rv-topbar">
        <div class="rv-wrap rv-topbar__in">
            <span class="rv-topbar__place">Reviun Ltd &middot; Leicester, United Kingdom</span>
            <span class="rv-topbar__links">
                <a href="tel:<?= $rv_phone_link ?>"><?= $rv_phone_display ?></a>
                <a href="mailto:<?= $rv_email ?>"><?= $rv_email ?></a>
            </span>
        </div>
    </div>

    <header class="rv-header">
        <div class="rv-wrap rv-header__in">
            <a class="rv-logo" href="<?= rv_url('home') ?>" aria-label="Reviun home">
                <img src="/assets/rv/img/logo-colour.png" alt="Reviun" width="150" height="34">
            </a>
            <button class="rv-burger" type="button" aria-controls="rv-nav" aria-expanded="false" aria-label="Menu"><span></span></button>
            <nav class="rv-nav" id="rv-nav" aria-label="Main">
                <a href="<?= rv_url('inert-atmosphere-systems') ?>"<?= rv_current('inert-atmosphere-systems.php') ?>>Glove boxes</a>
                <a href="<?= rv_url('products') ?>"<?= rv_current('products.php') ?>>Products</a>
                <div class="rv-nav__group">
                    <button class="rv-nav__toggle" type="button" aria-expanded="false">Services</button>
                    <div class="rv-nav__menu">
                        <a href="<?= rv_url('inert-atmosphere-systems') ?>">Inert atmosphere systems</a>
                        <a href="<?= rv_url('manufacturing-and-instrumentation') ?>">Manufacturing &amp; instrumentation</a>
                        <a href="<?= rv_url('embedded-and-control-systems') ?>">Embedded &amp; control systems</a>
                        <a href="<?= rv_url('software-and-application-development') ?>">Software &amp; application development</a>
                        <a href="<?= rv_url('technical-due-diligence') ?>">Technical due diligence</a>
                    </div>
                </div>
                <a href="<?= rv_url('resources') ?>"<?= rv_current('resources.php') ?>>Resources</a>
                <a href="<?= rv_url('about') ?>"<?= rv_current('about.php') ?>>About</a>
                <a class="rv-nav__shop" href="https://www.ebay.co.uk/usr/reviun_ltd" target="_blank" rel="noopener">eBay shop</a>
                <a class="rv-btn rv-btn--primary rv-nav__cta-m" href="<?= rv_url('contact') ?>">Request a quote</a>
            </nav>
            <a class="rv-btn rv-btn--primary rv-header__cta" href="<?= rv_url('contact') ?>">Request a quote</a>
        </div>
    </header>
