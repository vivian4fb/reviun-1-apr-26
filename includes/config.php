<?php
date_default_timezone_set('Europe/London');

$page = basename($_SERVER['PHP_SELF']);

$siteurl = "";
$site_base_url = "";
$services_url = "home#services";
$services_base_url = "";
$isProd = false;

$host = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : "";

if ($host === "www.reviun.co.uk" || $host === "reviun.co.uk") {
    $siteurl = "https://reviun.co.uk/";
    $services_url = "https://reviun.co.uk/home#services";
    $services_base_url = "https://reviun.co.uk/";
    $isProd = true;
    error_reporting(0);
} else {
    $siteurl = "http://{$host}/reviun/";
}

$dockerURL = getenv('DOCKER_SITE_URL');

if ($dockerURL !== false && $dockerURL !== "") {
    $services_url = "https://reviun.co.uk/home#services";
    $services_base_url = "https://reviun.co.uk/";
    $isProd = true;
    $site_base_url = $siteurl = $dockerURL;
} else {
    $site_base_url = $siteurl;
}

if (getenv('RV_ENV') === 'local') {
    $isProd = false;
    error_reporting(E_ALL);
}

$year = date('Y');

$rv_phone_display = "+44 7983 839896";
$rv_phone_link = "+447983839896";
$rv_email = "info@reviun.co";

function rv_url($path = "")
{
    global $site_base_url;
    return $site_base_url . ltrim($path, "/");
}

function rv_current($file)
{
    global $page;
    return $page === $file ? ' aria-current="page"' : '';
}

function rv_e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function rv_asset($path)
{
    return "/" . ltrim(str_replace(" ", "%20", $path), "/");
}

function rv_filesize($path)
{
    $file = __DIR__ . "/../" . ltrim($path, "/");
    if (!is_file($file)) {
        trigger_error("rv_filesize: missing file " . $path, E_USER_WARNING);
        return "";
    }
    $mb = filesize($file) / 1048576;
    return $mb >= 1 ? number_format($mb, 1) . " MB" : max(1, round($mb * 1024)) . " KB";
}
