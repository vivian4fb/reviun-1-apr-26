(function () {
  var header = document.querySelector(".rv-header");
  var burger = document.querySelector(".rv-burger");
  var nav = document.getElementById("rv-nav");

  if (burger && nav) {
    burger.addEventListener("click", function () {
      var open = nav.classList.toggle("is-open");
      burger.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }

  document.querySelectorAll(".rv-nav__toggle").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var group = btn.closest(".rv-nav__group");
      var open = group.classList.toggle("is-open");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
    });
  });

  document.addEventListener("click", function (e) {
    document.querySelectorAll(".rv-nav__group.is-open").forEach(function (group) {
      if (!group.contains(e.target) && window.matchMedia("(min-width: 961px)").matches) {
        group.classList.remove("is-open");
        group.querySelector(".rv-nav__toggle").setAttribute("aria-expanded", "false");
      }
    });
  });

  document.addEventListener("keydown", function (e) {
    if (e.key !== "Escape") return;
    document.querySelectorAll(".rv-nav__group.is-open").forEach(function (group) {
      group.classList.remove("is-open");
      group.querySelector(".rv-nav__toggle").setAttribute("aria-expanded", "false");
    });
    if (nav && nav.classList.contains("is-open")) {
      nav.classList.remove("is-open");
      burger.setAttribute("aria-expanded", "false");
    }
  });

  if (header) {
    var onScroll = function () {
      header.classList.toggle("is-scrolled", window.scrollY > 8);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }
})();
