window.Zovita = window.Zovita || {};

window.Zovita.home = (function () {
  function initHeroRotator() {
    var image = document.querySelector("[data-hero-rotator]");
    var timerId = null;

    if (!image) {
      return;
    }

    var images = (image.getAttribute("data-images") || "")
      .split(",")
      .map(function (item) {
        return item.trim();
      })
      .filter(Boolean);

    if (images.length < 2) {
      return;
    }

    if (
      window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
      return;
    }

    var index = 0;
    var intervalMs = 4200;

    function rotateImage() {
      index = (index + 1) % images.length;
      image.classList.add("opacity-0");

      window.setTimeout(function () {
        image.src = images[index];
        image.classList.remove("opacity-0");
      }, 220);
    }

    function startRotator() {
      if (timerId || document.visibilityState === "hidden") {
        return;
      }

      timerId = window.setInterval(rotateImage, intervalMs);
    }

    function stopRotator() {
      if (!timerId) {
        return;
      }

      window.clearInterval(timerId);
      timerId = null;
    }

    document.addEventListener("visibilitychange", function () {
      if (document.visibilityState === "hidden") {
        stopRotator();
        return;
      }

      startRotator();
    });

    startRotator();
  }

  return {
    init: function () {
      initHeroRotator();
    },
  };
})();
