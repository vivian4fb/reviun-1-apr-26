<?php if ($page !== "contact.php") { ?>
<section class="rv-cta">
    <div class="rv-wrap rv-cta__in">
        <div>
            <h2>Need a glove box specified or a part made?</h2>
            <p>Send us a drawing, a specification or a question.</p>
        </div>
        <div class="rv-actions">
            <a class="rv-btn rv-btn--light" href="<?= rv_url('contact') ?>">Contact us</a>
            <a class="rv-btn rv-btn--outline-light" href="tel:<?= $rv_phone_link ?>">Call <?= $rv_phone_display ?></a>
        </div>
    </div>
</section>
<?php } ?>

<footer class="rv-footer">
    <div class="rv-wrap rv-footer__grid">
        <div class="rv-footer__brand">
            <img src="/reviun-logo.png" alt="Reviun" width="348" height="78">
            <p>Reviun Ltd<br>Leicester, United Kingdom</p>
            <p style="margin-top: 14px;"><a href="tel:<?= $rv_phone_link ?>"><?= $rv_phone_display ?></a><br><a href="mailto:<?= $rv_email ?>"><?= $rv_email ?></a></p>
        </div>
        <div>
            <h2>Products</h2>
            <ul>
                <li><a href="<?= rv_url('inert-atmosphere-systems') ?>">Glove boxes &amp; accessories</a></li>
                <li><a href="<?= rv_url('products') ?>#optomechanics">Optomechanics</a></li>
                <li><a href="<?= rv_url('products') ?>#randd">R&amp;D equipment</a></li>
                <li><a href="<?= rv_url('products') ?>#tools">Tools &amp; dies</a></li>
                <li><a href="https://www.ebay.co.uk/usr/reviun_ltd" target="_blank" rel="noopener">eBay shop</a></li>
            </ul>
        </div>
        <div>
            <h2>Services</h2>
            <ul>
                <li><a href="<?= rv_url('manufacturing-and-instrumentation') ?>">Manufacturing &amp; instrumentation</a></li>
                <li><a href="<?= rv_url('embedded-and-control-systems') ?>">Embedded &amp; control systems</a></li>
                <li><a href="<?= rv_url('software-and-application-development') ?>">Software &amp; applications</a></li>
                <li><a href="<?= rv_url('technical-due-diligence') ?>">Technical due diligence</a></li>
            </ul>
        </div>
        <div>
            <h2>Company</h2>
            <ul>
                <li><a href="<?= rv_url('about') ?>">About</a></li>
                <li><a href="<?= rv_url('resources') ?>">Resources</a></li>
                <li><a href="<?= rv_url('contact') ?>">Contact</a></li>
                <li><a href="<?= rv_url('privacy-policy') ?>">Privacy policy</a></li>
                <li><a href="<?= rv_url('cookie-policy') ?>">Cookie policy</a></li>
            </ul>
        </div>
    </div>
    <div class="rv-footer__bar">
        <div class="rv-wrap">
            <p>&copy; <?= $year ?> Reviun Ltd</p>
            <nav class="rv-social" aria-label="Social">
                <a href="https://www.linkedin.com/company/reviun/" target="_blank" rel="noopener">LinkedIn</a>
                <a href="https://www.youtube.com/@reviunltd" target="_blank" rel="noopener">YouTube</a>
                <a href="https://www.facebook.com/people/Reviun-Ltd/100088920520170/" target="_blank" rel="noopener">Facebook</a>
                <a href="https://twitter.com/reviunltd" target="_blank" rel="noopener">X</a>
            </nav>
        </div>
    </div>
</footer>

<?php if (!$rv_page) { ?>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/custom.js?v=4"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/wow.min.js"></script>
<script>
new WOW({ boxClass: 'wow', animateClass: 'animated', offset: 0, mobile: false, live: true }).init();
</script>
<?php } ?>
<script src="/assets/js/rv.js?v=2" defer></script>

<?php include_once("cookie-consent.php"); ?>

</body>

</html>
