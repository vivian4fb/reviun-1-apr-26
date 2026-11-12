<?php
$rv_page = true;
include_once("header.php");
include_once(__DIR__ . "/includes/products-data.php");

$categories = [
    [
        "title" => "Glove boxes & accessories",
        "text" => "Standard and custom inert-atmosphere glove boxes, gas and solvent purifiers, feedthroughs and accessories.",
        "img" => "assets/rv/img/cat-custom-glovebox.webp",
        "alt" => "Custom glove box with antechamber",
        "href" => rv_url("inert-atmosphere-systems"),
        "contain" => false,
    ],
    [
        "title" => "Optomechanics",
        "text" => "Lens and kinematic mounts, rotation stages, mounting bases, spatial filter mounts and iris diaphragms.",
        "img" => "assets/rv/img/cat-optomechanics.webp",
        "alt" => "Reviun optomechanical mounts and stages",
        "href" => rv_url("products") . "#optomechanics",
        "contain" => false,
    ],
    [
        "title" => "R&D equipment",
        "text" => "Vacuum gauges, potentiostats, motorised stages, ozone and UV cleaners for the laboratory.",
        "img" => "assets/rv/img/cat-rnd.webp",
        "alt" => "Precision motorised two-axis stage",
        "href" => rv_url("products") . "#randd",
        "contain" => true,
    ],
    [
        "title" => "Tools & dies",
        "text" => "Progressive dies, forming dies, punch and die sets, and custom dies to your drawing.",
        "img" => "assets/rv/img/cat-tools-dies.webp",
        "alt" => "Die being worked in a machine vice",
        "href" => rv_url("products") . "#tools",
        "contain" => false,
    ],
];

$featured = [
    [
        "name" => "Kinematic mount for circular optics, 25 mm",
        "img" => "assets/rv/img/p-kinematic-25.webp",
        "pdf" => "assets/downloads/Kinematic Mount Brochure RGB.pdf",
    ],
    [
        "name" => "Manual rotation stage",
        "img" => "assets/rv/img/p-rotation-stage.webp",
        "pdf" => "assets/downloads/Manual Rotation Stage Brochure RGB.pdf",
    ],
    [
        "name" => "Spatial filter mount",
        "img" => "assets/rv/img/p-spatial-filter.webp",
        "pdf" => "assets/downloads/Spatial Filter Mount Brochure RGB.pdf",
    ],
    [
        "name" => "Unmounted iris diaphragm, 26 mm",
        "img" => "assets/rv/img/p-iris-26.webp",
        "pdf" => "assets/downloads/Unmounted Iris Diaphragm 26mm Brochure RGB.pdf",
    ],
];

$industries = [
    "Healthcare & pharmaceutical",
    "Additive manufacturing",
    "Thin-film coatings",
    "Li-ion & Na-ion battery research",
    "Semiconductor characterisation & encapsulation",
    "Organic & perovskite solar cells",
    "Materials handling & storage",
    "Energy & aerospace",
];

$services = [
    [
        "title" => "Inert atmosphere systems",
        "text" => "Glove boxes, gas and solvent purifiers, integrated equipment, service and training.",
        "href" => rv_url("inert-atmosphere-systems"),
    ],
    [
        "title" => "Manufacturing & instrumentation",
        "text" => "Additive manufacturing, sheet metal, tools and dies, and instrumentation.",
        "href" => rv_url("manufacturing-and-instrumentation"),
    ],
    [
        "title" => "Embedded & control systems",
        "text" => "From rapid prototype to production, with certification where it applies.",
        "href" => rv_url("embedded-and-control-systems"),
    ],
    [
        "title" => "Software & application development",
        "text" => "Software built around your process, from interface design to delivery.",
        "href" => rv_url("software-and-application-development"),
    ],
    [
        "title" => "Technical due diligence",
        "text" => "An assessment of a company's or project's technology, so investors see the risks and the opportunities.",
        "href" => rv_url("technical-due-diligence"),
    ],
];

$partners = [
    ["img" => "assets/images/client-05.png", "name" => "Revaron"],
    ["img" => "assets/images/client-04.png", "name" => "DNA.am"],
    ["img" => "assets/images/client-03.jpg", "name" => "Phase3D"],
    ["img" => "assets/images/client-02.jpg", "name" => "Haughton Design"],
    ["img" => "assets/images/client-01.jpg", "name" => "Optimus"],
];
?>

<main id="main">

    <section class="rv-section rv-feature" id="oxyniti">
        <div class="rv-wrap">
        <div class="rv-feature__panel rv-frame">
            <a class="rv-ribbon" href="<?= rv_url('products') ?>#oxyniti" aria-label="New product: Oxyniti nano-bubble generators. Check it out">New</a>
            <span class="rv-sweep" aria-hidden="true"></span>
        <div class="rv-feature__grid">
            <div class="rv-feature__copy">
                <p class="rv-eyebrow"><span class="rv-badge">New</span>&nbsp; Nano-bubble aeration</p>
                <h2 class="rv-h2">Oxyniti <span class="rv-grad">nano-bubble generators</span></h2>
                <p class="rv-lead"><?= rv_e($rv_oxyniti['intro']) ?></p>
                <div class="rv-feature__models">
<?php foreach ($rv_oxyniti['models'] as $m) { ?>
                    <div class="rv-feature__model">
                        <h3><?= rv_e(str_replace("Nano Bubble Generator ", "", $m['name'])) ?></h3>
                        <dl class="rv-kv rv-kv--compact">
<?php foreach ($m['summary'] as $row) { ?>
                            <div><dt><?= rv_e($row[0]) ?></dt><dd><?= rv_e($row[1]) ?></dd></div>
<?php } ?>
                        </dl>
                    </div>
<?php } ?>
                </div>
                <ul class="rv-ticks" aria-label="Applications">
<?php foreach ($rv_oxyniti['applications'] as $a) { ?>
                    <li><?= rv_e($a) ?></li>
<?php } ?>
                </ul>
                <div class="rv-actions" style="margin-top: 28px;">
                    <a class="rv-btn rv-btn--primary" href="<?= rv_url('products') ?>#oxyniti">View specifications</a>
                    <a class="rv-btn rv-btn--ghost" href="<?= rv_url('contact') ?>">Enquire</a>
                    <a class="rv-btn rv-btn--ghost" href="<?= rv_e($rv_oxyniti['source_url']) ?>" target="_blank" rel="noopener">oxyniti.com &#8599;</a>
                </div>
            </div>
            <div class="rv-feature__media">
                <figure class="rv-feature__product rv-float">
                    <img src="<?= rv_asset($rv_oxyniti['models'][0]['img']) ?>" alt="Oxyniti nano-bubble generator, illustrative image" width="800" height="534" loading="lazy">
                    <figcaption>Illustrative image</figcaption>
                </figure>
                <figure class="rv-feature__plume rv-frame rv-float rv-float--slow">
                    <img src="<?= rv_asset($rv_oxyniti['plume']) ?>" alt="Oxygen plume from an Oxyniti outlet in a fish pond" width="480" height="854" loading="lazy">
                    <figcaption>Pond outlet, video still</figcaption>
                </figure>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="rv-hero">
        <div class="rv-wrap rv-hero__grid">
            <div>
                <p class="rv-eyebrow">Inert atmosphere &middot; Optomechanics &middot; R&amp;D equipment</p>
                <h1>Glove boxes and <span class="rv-grad">precision lab equipment</span> for research and industry</h1>
                <p class="rv-lead">Standard and custom inert-atmosphere glove boxes, gas and solvent purifiers, optomechanics and R&amp;D equipment, with engineering services from prototype to production.</p>
                <div class="rv-actions">
                    <a class="rv-btn rv-btn--primary" href="<?= rv_url('inert-atmosphere-systems') ?>">Explore glove boxes</a>
                    <a class="rv-btn rv-btn--ghost" href="<?= rv_url('products') ?>">Browse products</a>
                </div>
                <ul class="rv-ticks" aria-label="Who we supply">
                    <li>Battery research</li>
                    <li>Additive manufacturing</li>
                    <li>Manufacturing industry</li>
                    <li>Universities</li>
                </ul>
            </div>
            <figure class="rv-hero__media rv-frame rv-float">
                <img src="<?= rv_asset('assets/rv/img/glovebox-pureline.webp') ?>" alt="Standard glove box with gloveports and antechamber" width="1400" height="748" fetchpriority="high">
                <figcaption><span>Standard glove box</span><span>Inert atmosphere</span></figcaption>
            </figure>
        </div>
    </section>

    <section class="rv-section" id="products">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Products</p>
                    <h2 class="rv-h2">What we <span class="rv-grad">supply</span></h2>
                </div>
                <a class="rv-link" href="<?= rv_url('products') ?>">All products</a>
            </div>
            <div class="rv-cards">
<?php foreach ($categories as $c) { ?>
                <a class="rv-card" href="<?= $c['href'] ?>">
                    <div class="rv-card__img<?= $c['contain'] ? ' rv-card__img--contain' : '' ?>">
                        <img src="<?= rv_asset($c['img']) ?>" alt="<?= rv_e($c['alt']) ?>" loading="lazy">
                    </div>
                    <div class="rv-card__body">
                        <h3><?= rv_e($c['title']) ?></h3>
                        <p><?= rv_e($c['text']) ?></p>
                        <span class="rv-link">View range</span>
                    </div>
                </a>
<?php } ?>
            </div>
        </div>
    </section>

    <section class="rv-section rv-section--soft" id="optomechanics">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Reviun optomechanics</p>
                    <h2 class="rv-h2">Mounts and stages for <span class="rv-grad">optical set-ups</span></h2>
                    <p class="rv-lead">Each part has a brochure with dimensions and specifications.</p>
                </div>
                <a class="rv-link" href="<?= rv_url('products') ?>#optomechanics">All optomechanics</a>
            </div>
            <div class="rv-products">
<?php foreach ($featured as $p) { $size = rv_filesize($p['pdf']); ?>
                <article class="rv-product">
                    <div class="rv-product__img">
                        <img src="<?= rv_asset($p['img']) ?>" alt="<?= rv_e($p['name']) ?>" loading="lazy">
                    </div>
                    <div class="rv-product__body">
                        <h3><?= rv_e($p['name']) ?></h3>
                        <p class="rv-product__meta">PDF<?= $size ? ' &middot; ' . $size : '' ?></p>
                        <div class="rv-product__actions">
                            <a href="<?= rv_asset($p['pdf']) ?>" target="_blank" rel="noopener">Brochure</a>
                            <a href="<?= rv_url('contact') ?>">Enquire</a>
                        </div>
                    </div>
                </article>
<?php } ?>
            </div>
        </div>
    </section>

    <section class="rv-section rv-dark" id="industries">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Glove box applications</p>
                    <h2 class="rv-h2">Suited to <span class="rv-grad">controlled-atmosphere</span> work in</h2>
                </div>
                <a class="rv-btn rv-btn--outline-light" href="<?= rv_url('inert-atmosphere-systems') ?>">Glove box range</a>
            </div>
            <ul class="rv-industries">
<?php foreach ($industries as $i => $name) { ?>
                <li><span><?= sprintf('%02d', $i + 1) ?></span><strong><?= rv_e($name) ?></strong></li>
<?php } ?>
            </ul>
        </div>
    </section>

    <section class="rv-section" id="services">
        <div class="rv-wrap rv-split">
            <div class="rv-split__aside">
                <p class="rv-eyebrow">Services</p>
                <h2 class="rv-h2">Engineering, from first drawing to <span class="rv-grad">production</span></h2>
                <p class="rv-lead">Alongside our equipment we take on engineering work across hardware, software and manufacturing.</p>
                <a class="rv-btn rv-btn--primary" href="<?= rv_url('contact') ?>">Discuss a project</a>
            </div>
            <ul class="rv-services">
<?php foreach ($services as $i => $s) { ?>
                <li>
                    <a href="<?= $s['href'] ?>">
                        <span class="rv-services__n"><?= sprintf('%02d', $i + 1) ?></span>
                        <div>
                            <h3><?= rv_e($s['title']) ?></h3>
                            <p><?= rv_e($s['text']) ?></p>
                        </div>
                        <span class="rv-services__arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </li>
<?php } ?>
            </ul>
        </div>
    </section>

    <section class="rv-section rv-section--soft" id="partners">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Partners</p>
                    <h2 class="rv-h2">Who we <span class="rv-grad">work with</span></h2>
                </div>
            </div>
            <ul class="rv-logos">
<?php foreach ($partners as $p) { ?>
                <li><img src="<?= rv_asset($p['img']) ?>" alt="<?= rv_e($p['name']) ?>" loading="lazy"></li>
<?php } ?>
            </ul>
        </div>
    </section>

</main>

<?php
include_once("footer.php");
?>
