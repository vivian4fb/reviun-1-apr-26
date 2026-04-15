<!-- Footer Starts Here -->

<div class="request-form request-form-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow bounceInLeft" data-wow-delay=".2s">
                <h2>Ready to get started?</h2>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 wow bounceInRight" data-wow-delay=".4s">
                        <a href="<?= $services_url ?>" class="filled-button-white mobile-margin-top"
                            tabindex="0">Explore
                            Services</a>
                    </div>
                    <div class="col-sm-6 wow bounceInRight" data-wow-delay=".6s">
                        <a href="<?= $site_base_url ?>contact" class="border-button" tabindex="0">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="text-center  wow bounceInUp" data-wow-delay=".2s">

    <img src="reviun-logo-color.jpg" style="max-width: 200px;" class="" />
    <br />
    <br />
    <br />

    <h2>Leicester, United Kingdom</h2>


    <h3><a href="tel:+447983839896" style="color: #333">+44 7983 839896</a></h3>

    <h3><a href="mailto:info@reviun.co" style="color: #333;">info@reviun.co</a></h3>

    <a href="<?= $site_base_url ?>privacy-policy">Privacy Policy</a> | <a
        href="<?= $site_base_url ?>cookie-policy">Cookie Policy</a>


</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; 2023 Reviun Ltd.</p>
            </div>
        </div>
    </div>
</div>

<div class="sharebox">

    <div class="iconwrapper" onclick="window.location.href='home'">
        <i class="fa fa-home"></i>
    </div>

    <div class="iconwrapper" onclick="scrollToElement('.sub-header', 100)">
        <i class="fa fa-angle-double-up"></i>
    </div>

    <div class="iconwrapper" onclick="window.location.href='contact'">
        <i class="fa fa-envelope"></i>
    </div>

    <div class="iconwrapper" onclick="share()">
        <i class="fa fa-share-alt"></i>
    </div>

</div>

<div class="shareboxSocial">
    <div class="iconwrapper" onclick="shareFallback('facebook')">
        <i class="fab fa-facebook"></i>
    </div>
    <div class="iconwrapper" onclick="shareFallback('twitter')">
        <i class="fab fa-twitter"></i>
    </div>
    <div class="iconwrapper" onclick="shareFallback('whatsapp')">
        <i class="fab fa-whatsapp"></i>
    </div>
    <div class="iconwrapper" onclick="shareFallback('linkedin')">
        <i class="fab fa-linkedin"></i>
    </div>
    <div class="iconwrapper" onclick="shareFallback('email')">
        <i class="fa fa-envelope"></i>
    </div>



</div>

<style>
@media (max-width: 768px) {
    .showSharebox {
        right: -8px !important;
    }
}
</style>

<!-- Bootstrap core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/jquery.singlePageNav.min.js"></script>
<script src="assets/js/custom.js?v=4"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/wow.min.js"></script>
<script>
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
})
wow.init();
</script>
<script>
$(function() {
    // Single Page Nav
    $('#navbarResponsive').singlePageNav({
        'offset': 100,
        'filter': ':not(.external)'
    });

    // On mobile, close the menu after nav-link click
    $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function() {
        $('#navbarResponsive').removeClass('show');
    });
});
</script>

<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
</script>

<?php include_once("cookie-consent.php"); ?>

</body>

</html>