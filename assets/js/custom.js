jQuery(document).ready(function ($) {
  "use strict";

  $(function () {
    $("#tabs").tabs();
  });

  // Page loading animation

  $("#preloader").animate(
    {
      opacity: "0",
    },
    600,
    function () {
      setTimeout(function () {
        $("#preloader").css("visibility", "hidden").fadeOut();
      }, 300);
    }
  );

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var box = $(".header-text").height();
    var header = $(".myheader").height();

    if (scroll >= header) {
      $("header").addClass("background-header");
      $(".nav-item").css("visibility", "visible");
      $(".nav-item-lastbtn").css("visibility", "visible");
      $(".navbar-brand").css("visibility", "visible");

      $(".sharebox").addClass("showSharebox");
    } else {
      $("header").removeClass("background-header");
      $(".sharebox").removeClass("showSharebox");
    }
  });
  if ($(".owl-testimonials").length) {
    $(".owl-testimonials").owlCarousel({
      loop: true,
      nav: false,
      dots: true,
      items: 1,
      margin: 30,
      autoplay: false,
      smartSpeed: 700,
      autoplayTimeout: 6000,
      responsive: {
        0: {
          items: 1,
          margin: 0,
        },
        460: {
          items: 1,
          margin: 0,
        },
        576: {
          items: 2,
          margin: 20,
        },
        992: {
          items: 2,
          margin: 30,
        },
      },
    });
  }
  if ($(".owl-partners").length) {
    $(".owl-partners").owlCarousel({
      loop: true,
      nav: false,
      dots: true,
      items: 1,
      margin: 30,
      autoplay: true,
      smartSpeed: 700,
      autoplayTimeout: 2000,
      responsive: {
        0: {
          items: 1,
          margin: 0,
        },
        460: {
          items: 1,
          margin: 0,
        },
        576: {
          items: 2,
          margin: 20,
        },
        992: {
          items: 4,
          margin: 30,
        },
      },
    });
  }

  $(".Modern-Slider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnHover: false,
    dots: true,
    pauseOnDotsHover: true,
    cssEase: "linear",
    //fade: true,
    draggable: false,
    prevArrow: '<button class="PrevArrow"></button>',
    nextArrow: '<button class="NextArrow"></button>',
  });

  function visible(partial) {
    var $t = partial,
      $w = jQuery(window),
      viewTop = $w.scrollTop(),
      viewBottom = viewTop + $w.height(),
      _top = $t.offset().top,
      _bottom = _top + $t.height(),
      compareTop = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;

    return (
      compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible")
    );
  }

  $(window).scroll(function () {
    // if (visible($('.count-digit'))) {
    //     if ($('.count-digit').hasClass('counter-loaded')) return;
    //     $('.count-digit').addClass('counter-loaded');
    //     $('.count-digit').each(function () {
    //         var $this = $(this);
    //         jQuery({
    //             Counter: 0
    //         }).animate({
    //             Counter: $this.text()
    //         }, {
    //             duration: 3000,
    //             easing: 'swing',
    //             step: function () {
    //                 $this.text(Math.ceil(this.Counter));
    //             }
    //         });
    //     });
    // }
  });
});

function openPage(page) {
  window.location.href = page;
}

function scrollToElement(element, offset) {
  $("html, body").animate(
    {
      scrollTop: $(element).offset().top - offset,
    },
    {
      easing: "easeOutCirc",
    }
  );
}

function share() {
  title = document.title;
  if (navigator.share) {
    navigator
      .share({
        title,
        url: window.location.href,
      })
      .then(() => {})
      .catch(console.error);
  } else {
    showHideShareButtons();
  }
}

function showHideShareButtons() {
  if ($(".shareboxSocial").hasClass("showShareboxSocial")) {
    $(".shareboxSocial").removeClass("showShareboxSocial");
  } else {
    $(".shareboxSocial").addClass("showShareboxSocial");
  }
}

function shareFallback(media) {
  title = document.title;
  $url = "";
  if (media == "whatsapp") {
    $url =
      "https://api.whatsapp.com/send?text=" +
      title +
      " \n\n " +
      window.location.href;
  } else if (media == "sms") {
    $url = "sms:?body= \n\n " + window.location.href;
  } else if (media == "facebook") {
    $url =
      "https://www.facebook.com/sharer/sharer.php?u=" + window.location.href;
  } else if (media == "twitter") {
    $url =
      "https://twitter.com/intent/tweet?text= \n\n " + window.location.href;
  } else if (media == "linkedin") {
    $url =
      "https://www.linkedin.com/shareArticle?mini=true&url=" +
      window.location.href +
      "&title=" +
      title +
      "&summary=" +
      title +
      "&source=LinkedIn";
  } else if (media == "email") {
    $url =
      "mailto:?subject=" +
      title +
      "&amp;body=Check out this site " +
      window.location.href;
  }

  if ($url != "") {
    window.open($url);
  }
}
