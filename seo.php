<?php
$title = "Reviun - Digital Manufacturing for Rapid Prototyping";
$description = "Reviun - Digital Manufacturing, Rapid Prototyping in United Kingdom UK";
$keywords = "Reviun, Revaron, Digital Manufacturing, Rapid Prototyping, United Kingdom, UK";

$seo = [
    "index.php" => [
        "Reviun | Glove boxes, optomechanics and R&D equipment, UK",
        "Reviun Ltd, Leicester: standard and custom inert-atmosphere glove boxes, gas and solvent purifiers, optomechanics, R&D equipment and engineering services.",
        "",
    ],
    "products.php" => [
        "Products | Reviun",
        "Glove boxes and accessories, optomechanics, R&D equipment, and tools and dies from Reviun Ltd, Leicester.",
        "products",
    ],
    "inert-atmosphere-systems.php" => [
        "Inert atmosphere glove boxes | Reviun",
        "Standard and custom inert-atmosphere glove boxes, gas and solvent purifiers, accessories, service and training from Reviun Ltd, UK.",
        "inert-atmosphere-systems",
    ],
    "about.php" => ["About $title", "About $description", "about"],
    "contact.php" => ["Contact $title", "Contact $description", "contact"],
    "resources.php" => ["Resources $title", "Resources $description", "resources"],
    "manufacturing-and-instrumentation.php" => ["Manufacturing and Instrumentation $title", "Manufacturing and Instrumentation $description", "manufacturing-and-instrumentation"],
    "software-and-application-development.php" => ["Software and Application Development $title", "Software and Application Development $description", "software-and-application-development"],
    "technical-due-diligence.php" => ["Technical Due Diligence $title", "Technical Due Diligence $description", "technical-due-diligence"],
    "embedded-and-control-systems.php" => ["Embedded and Control Systems $title", "Embedded and Control Systems $description", "embedded-and-control-systems"],
    "privacy-policy.php" => ["Privacy policy | Reviun", $description, "privacy-policy"],
    "cookie-policy.php" => ["Cookie policy | Reviun", $description, "cookie-policy"],
];

if (isset($seo[$page])) {
    list($seo_title, $seo_description, $seo_path) = $seo[$page];
} else {
    $seo_title = $title;
    $seo_description = $description;
    $seo_path = null;
}

echo "<title>" . rv_e($seo_title) . "</title>\n";
echo "    <meta name=\"description\" content=\"" . rv_e($seo_description) . "\">\n";
echo "    <meta name=\"keywords\" content=\"" . rv_e($keywords) . "\">\n";
if ($seo_path !== null) {
    $canonical = "https://reviun.co.uk/" . $seo_path;
    echo "    <link rel=\"canonical\" href=\"" . rv_e($canonical) . "\">\n";
    echo "    <meta property=\"og:type\" content=\"website\">\n";
    echo "    <meta property=\"og:site_name\" content=\"Reviun\">\n";
    echo "    <meta property=\"og:title\" content=\"" . rv_e($seo_title) . "\">\n";
    echo "    <meta property=\"og:description\" content=\"" . rv_e($seo_description) . "\">\n";
    echo "    <meta property=\"og:url\" content=\"" . rv_e($canonical) . "\">\n";
    echo "    <meta property=\"og:image\" content=\"https://reviun.co.uk/assets/rv/img/og-glovebox.jpg\">\n";
}
