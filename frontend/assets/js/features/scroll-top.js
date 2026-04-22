window.Zovita = window.Zovita || {};

window.Zovita.scrollTop = (function () {
  function initButton() {
    var button = document.querySelector("[data-scroll-top]");
    var ticking = false;

    if (!button) {
      return;
    }

    function onScroll() {
      if (ticking) {
        return;
      }

      ticking = true;

      window.requestAnimationFrame(function () {
        var shouldShow = window.scrollY > 320;
        button.classList.toggle("visible", shouldShow);
        ticking = false;
      });
    }

    function updateState() {
      var shouldShow = window.scrollY > 320;
      button.classList.toggle("visible", shouldShow);
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    updateState();

    button.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  return {
    init: initButton,
  };
})();
