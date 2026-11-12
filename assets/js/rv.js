(function () {
  var header = document.querySelector(".rv-header");
  var burger = document.querySelector(".rv-burger");
  var nav = document.getElementById("rv-nav");
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var finePointer = window.matchMedia("(hover: hover) and (pointer: fine)").matches;
  var isNewPage = document.body.classList.contains("rv");

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

  var depth = document.querySelector(".rv-bg__depth");
  var queued = false;
  function onScroll() {
    queued = false;
    if (header) header.classList.toggle("is-scrolled", window.scrollY > 8);
    if (depth && !reduce) {
      var max = document.documentElement.scrollHeight - window.innerHeight;
      depth.style.setProperty("--p", (max > 0 ? Math.min(1, window.scrollY / max) : 0).toFixed(4));
    }
  }
  window.addEventListener("scroll", function () {
    if (!queued) { queued = true; window.requestAnimationFrame(onScroll); }
  }, { passive: true });
  onScroll();

  if (depth && !reduce && finePointer) {
    window.addEventListener("pointermove", function (e) {
      depth.style.setProperty("--tx", (((e.clientY / window.innerHeight) - 0.5) * -4).toFixed(2) + "deg");
      depth.style.setProperty("--ty", (((e.clientX / window.innerWidth) - 0.5) * 4).toFixed(2) + "deg");
    }, { passive: true });
  }

  if (!isNewPage) return;

  var revealSel = [
    ".rv-section__head", ".rv-card", ".rv-product", ".rv-model", ".rv-feature__copy", ".rv-feature__media",
    ".rv-industries", ".rv-services li", ".rv-logos li", ".rv-split__aside", ".rv-new__intro > *", ".rv-also",
    ".rv-cta__in > *", ".rv-footer__grid > *"
  ].join(",");
  var targets = Array.prototype.slice.call(document.querySelectorAll(revealSel));
  if (!reduce && "IntersectionObserver" in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add("in"); io.unobserve(en.target); }
      });
    }, { rootMargin: "0px 0px -8% 0px" });
    targets.forEach(function (el) {
      if (el.getBoundingClientRect().top < window.innerHeight) return;
      var siblings = Array.prototype.indexOf.call(el.parentElement.children, el);
      el.style.setProperty("--d", Math.min(siblings, 5) * 80 + "ms");
      el.classList.add("rv-reveal");
      io.observe(el);
    });
  }

  var tiltSel = ".rv-card, .rv-product, .rv-model, .rv-feature__model, .rv-hero__media";
  document.querySelectorAll(tiltSel).forEach(function (el) {
    if (!el.matches(".rv-hero__media")) {
      var sheen = document.createElement("span");
      sheen.className = "rv-sheen";
      sheen.setAttribute("aria-hidden", "true");
      el.appendChild(sheen);
    }
    if (reduce || !finePointer) return;
    el.classList.add("rv-tilt");
    var maxDeg = el.matches(".rv-hero__media, .rv-model") ? 4 : 7;
    el.addEventListener("pointermove", function (e) {
      var r = el.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width;
      var y = (e.clientY - r.top) / r.height;
      el.classList.add("is-tilting");
      el.style.setProperty("--ry", ((x - 0.5) * 2 * maxDeg).toFixed(2) + "deg");
      el.style.setProperty("--rx", ((0.5 - y) * 2 * maxDeg).toFixed(2) + "deg");
      el.style.setProperty("--mx", (x * 100).toFixed(1) + "%");
      el.style.setProperty("--my", (y * 100).toFixed(1) + "%");
    });
    el.addEventListener("pointerleave", function () {
      el.classList.remove("is-tilting");
      el.style.setProperty("--rx", "0deg");
      el.style.setProperty("--ry", "0deg");
    });
  });
})();
