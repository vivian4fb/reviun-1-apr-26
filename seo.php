<?php
$page = basename($_SERVER['PHP_SELF']);

$title = "Reviun - Digital Manufacturing for Rapid Prototyping";
$description = "Reviun - Digital Manufacturing, Rapid Prototyping in United Kingdom UK";
$keywords = "Reviun, Revaron, Digital Manufacturing, Rapid Prototyping, United Kingdom, UK";



if ($page == "index.php") {
    echo "<title>$title</title>";
    echo "<meta name='description' content='$description'>";
    echo "<meta name='keywords' content='$keywords'>";
} else if ($page == "about.php") {
    echo "<title>About $title</title>";
    echo "<meta name='description' content='About $description'>";
    echo "<meta name='keywords' content='About $keywords'>";
} else if ($page == "contact.php") {
    echo "<title>Contact $title</title>";
    echo "<meta name='description' content='Contact $description'>";
    echo "<meta name='keywords' content='Contact $keywords'>";
} else if ($page == "resources.php") {
    echo "<title>Resources $title</title>";
    echo "<meta name='description' content='Resources $description'>";
    echo "<meta name='keywords' content='Resources $keywords'>";
} else if ($page == "manufacturing-and-instrumentation.php") {
    echo "<title>Manufacturing and Instrumentation $title</title>";
    echo "<meta name='description' content='Manufacturing and Instrumentation $description'>";
    echo "<meta name='keywords' content='Manufacturing and Instrumentation, $keywords'>";
} else if ($page == "software-and-application-development.php") {
    echo "<title>Software and Application Development $title</title>";
    echo "<meta name='description' content='Software and Application Development $description'>";
    echo "<meta name='keywords' content='Software and Application Development, $keywords'>";
} else if ($page == "technical-due-diligence.php") {
    echo "<title>Technical Due Diligence $title</title>";
    echo "<meta name='description' content='Technical Due Diligence $description'>";
    echo "<meta name='keywords' content='Technical Due Diligence, $keywords'>";
} else if ($page == "inert-atmosphere-systems.php") {
    echo "<title>Inert Atmosphere Systems $title</title>";
    echo "<meta name='description' content='Inert Atmosphere Systems $description'>";
    echo "<meta name='keywords' content='Inert Atmosphere Systems, $keywords'>";
} else if ($page == "embedded-and-control-systems.php") {
    echo "<title>Embedded and Control Systems $title</title>";
    echo "<meta name='description' content='Embedded and Control Systems $description'>";
    echo "<meta name='keywords' content='Embedded and Control Systems $keywords'>";
} else {
    echo "<title>$title</title>";
    echo "<meta name='description' content='$description'>";
    echo "<meta name='keywords' content='$keywords'>";
}