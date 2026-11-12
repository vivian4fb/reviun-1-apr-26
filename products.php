<?php
$rv_page = true;
include_once("header.php");
include_once(__DIR__ . "/includes/products-data.php");

function rv_pdf_meta($pdf)
{
    $size = rv_filesize($pdf);
    return "PDF" . ($size ? " &middot; " . $size : "");
}
?>

<main id="main">

    <section class="rv-pagehead">
        <div class="rv-wrap">
            <p class="rv-eyebrow">Products</p>
            <h1><span class="rv-grad">Products</span></h1>
            <p class="rv-lead">Nano-bubble generators, glove boxes, optomechanics, R&amp;D equipment, and tools and dies. If you need something not listed here, ask us.</p>
            <nav class="rv-chips" aria-label="Product categories">
                <a href="#oxyniti">Oxyniti <span class="rv-badge">New</span></a>
                <a href="#gloveboxes">Glove boxes</a>
                <a href="#optomechanics">Optomechanics</a>
                <a href="#randd">R&amp;D equipment</a>
                <a href="#tools">Tools &amp; dies</a>
            </nav>
        </div>
    </section>

    <section class="rv-section rv-new" id="oxyniti">
        <div class="rv-wrap">
            <div class="rv-new__intro">
                <div>
                    <p class="rv-eyebrow"><span class="rv-badge">New</span>&nbsp; Nano-bubble aeration</p>
                    <h2 class="rv-h2">Oxyniti <span class="rv-grad">nano-bubble generators</span></h2>
                    <p class="rv-lead"><?= rv_e($rv_oxyniti['intro']) ?></p>
                    <ul class="rv-ticks" aria-label="Applications">
<?php foreach ($rv_oxyniti['applications'] as $a) { ?>
                        <li><?= rv_e($a) ?></li>
<?php } ?>
                    </ul>
                    <p class="rv-new__more"><a class="rv-link rv-link--ext" href="<?= rv_e($rv_oxyniti['source_url']) ?>" target="_blank" rel="noopener">See the full range on oxyniti.com</a></p>
                </div>
                <figure class="rv-new__plume rv-frame rv-float">
                    <img src="<?= rv_asset($rv_oxyniti['plume']) ?>" alt="Oxygen plume from an Oxyniti outlet in a fish pond" width="480" height="854" loading="lazy">
                    <figcaption>Oxyniti outlet in a fish pond, video still</figcaption>
                </figure>
            </div>

            <div class="rv-models">
<?php foreach ($rv_oxyniti['models'] as $m) { ?>
                <article class="rv-model">
                    <div class="rv-model__img">
                        <img src="<?= rv_asset($m['img']) ?>" alt="<?= rv_e($m['name']) ?>, illustrative image" width="800" height="534" loading="lazy">
                        <span class="rv-badge">New</span>
                    </div>
                    <div class="rv-model__body">
                        <h3><?= rv_e($m['name']) ?></h3>
                        <dl class="rv-kv">
<?php foreach ($m['summary'] as $row) { ?>
                            <div><dt><?= rv_e($row[0]) ?></dt><dd><?= rv_e($row[1]) ?></dd></div>
<?php } ?>
                        </dl>
                        <details class="rv-specs">
                            <summary>Full specifications</summary>
<?php foreach ($m['specs'] as $group => $rows) { ?>
                            <h4><?= rv_e($group) ?></h4>
                            <dl class="rv-kv rv-kv--compact">
<?php foreach ($rows as $row) { ?>
                                <div><dt><?= rv_e($row[0]) ?></dt><dd><?= rv_e($row[1]) ?></dd></div>
<?php } ?>
                            </dl>
<?php } ?>
                            <h4>Applications</h4>
                            <ul class="rv-bullets">
<?php foreach ($m['applications'] as $a) { ?>
                                <li><?= rv_e($a) ?></li>
<?php } ?>
                            </ul>
                        </details>
                        <div class="rv-model__actions">
                            <a class="rv-btn rv-btn--primary" href="<?= rv_url('contact') ?>">Enquire</a>
                            <a class="rv-btn rv-btn--ghost" href="<?= rv_e($m['url']) ?>" target="_blank" rel="noopener">oxyniti.com &#8599;</a>
                        </div>
                    </div>
                </article>
<?php } ?>
            </div>
            <p class="rv-note"><?= rv_e($rv_oxyniti['source_note']) ?></p>
        </div>
    </section>

    <section class="rv-section rv-section--soft" id="gloveboxes">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Inert atmosphere</p>
                    <h2 class="rv-h2"><?= rv_e($rv_gloveboxes['title']) ?></h2>
                    <p class="rv-lead"><?= rv_e($rv_gloveboxes['intro']) ?></p>
                </div>
                <a class="rv-link" href="<?= rv_url('inert-atmosphere-systems') ?>">Glove box range</a>
            </div>
            <div class="rv-cards">
<?php foreach ($rv_gloveboxes['items'] as $g) { ?>
                <a class="rv-card" href="<?= rv_url('inert-atmosphere-systems') ?>#<?= $g['anchor'] ?>">
                    <div class="rv-card__img"><img src="<?= rv_asset($g['img']) ?>" alt="<?= rv_e($g['name']) ?>" loading="lazy"></div>
                    <div class="rv-card__body">
                        <h3><?= rv_e($g['name']) ?></h3>
                        <span class="rv-link">View</span>
                    </div>
                </a>
<?php } ?>
            </div>
        </div>
    </section>

    <section class="rv-section" id="optomechanics">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Reviun optomechanics</p>
                    <h2 class="rv-h2"><?= rv_e($rv_optomechanics['title']) ?></h2>
                    <p class="rv-lead"><?= rv_e($rv_optomechanics['intro']) ?></p>
                </div>
            </div>
            <div class="rv-products">
<?php foreach ($rv_optomechanics['items'] as $p) { ?>
                <article class="rv-product">
                    <div class="rv-product__img"><img src="<?= rv_asset($p['img']) ?>" alt="<?= rv_e($p['name']) ?>" loading="lazy"></div>
                    <div class="rv-product__body">
                        <h3><?= rv_e($p['name']) ?></h3>
                        <p class="rv-product__meta"><?= rv_pdf_meta($p['pdf']) ?></p>
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

    <section class="rv-section rv-section--soft" id="randd">
        <div class="rv-wrap">
            <div class="rv-section__head">
                <div>
                    <p class="rv-eyebrow">Laboratory</p>
                    <h2 class="rv-h2"><?= rv_e($rv_rnd['title']) ?></h2>
                    <p class="rv-lead"><?= rv_e($rv_rnd['intro']) ?></p>
                </div>
            </div>
            <div class="rv-rnd">
<?php foreach ($rv_rnd['items'] as $p) { ?>
                <article class="rv-product rv-product--row">
                    <div class="rv-product__img rv-product__img--photo"><img src="<?= rv_asset($p['img']) ?>" alt="<?= rv_e($p['name']) ?>" loading="lazy"></div>
                    <div class="rv-product__body">
                        <h3><?= rv_e($p['name']) ?></h3>
<?php if (!empty($p['features'])) { ?>
                        <ul class="rv-bullets">
<?php foreach ($p['features'] as $f) { ?>
                            <li><?= rv_e($f) ?></li>
<?php } ?>
                        </ul>
<?php } ?>
                        <div class="rv-product__actions">
<?php if (!empty($p['pdf'])) { ?>
                            <a href="<?= rv_asset($p['pdf']) ?>" target="_blank" rel="noopener">Brochure (<?= rv_pdf_meta($p['pdf']) ?>)</a>
<?php } ?>
                            <a href="<?= rv_url('contact') ?>">Enquire</a>
                        </div>
                    </div>
                </article>
<?php } ?>
            </div>
            <div class="rv-also">
                <h3>Also available</h3>
                <ul>
<?php foreach ($rv_rnd['also'] as $a) { ?>
                    <li>
                        <span><?= rv_e($a['name']) ?></span>
<?php if (!empty($a['pdf'])) { ?>
                        <a href="<?= rv_asset($a['pdf']) ?>" target="_blank" rel="noopener">Brochure &middot; <?= rv_filesize($a['pdf']) ?></a>
<?php } else { ?>
                        <a href="<?= rv_url('contact') ?>">Enquire</a>
<?php } ?>
                    </li>
<?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="rv-section" id="tools">
        <div class="rv-wrap rv-split">
            <div class="rv-split__aside">
                <p class="rv-eyebrow">Manufacturing</p>
                <h2 class="rv-h2"><?= rv_e($rv_tools['title']) ?></h2>
                <p class="rv-lead"><?= rv_e($rv_tools['intro']) ?></p>
                <img class="rv-rounded" src="<?= rv_asset($rv_tools['img']) ?>" alt="Die being worked in a machine vice" loading="lazy">
            </div>
            <ul class="rv-services">
<?php foreach ($rv_tools['items'] as $i => $t) { ?>
                <li>
                    <a href="<?= rv_url('contact') ?>">
                        <span class="rv-services__n"><?= sprintf('%02d', $i + 1) ?></span>
                        <div>
                            <h3><?= rv_e($t['name']) ?></h3>
                            <p><?= rv_e($t['text']) ?></p>
                        </div>
                        <span class="rv-services__arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </li>
<?php } ?>
            </ul>
        </div>
    </section>

</main>

<?php
include_once("footer.php");
?>
