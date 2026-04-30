window.Zovita = window.Zovita || {};

window.Zovita.home = (function () {
  function initHeroRotator() {
    var image = document.querySelector("[data-hero-rotator]");
    var carousel = document.querySelector("[data-hero-carousel]");
    var prevButton = carousel
      ? carousel.querySelector("[data-hero-prev]")
      : null;
    var nextButton = carousel
      ? carousel.querySelector("[data-hero-next]")
      : null;
    var toggleButton = carousel
      ? carousel.querySelector("[data-hero-toggle]")
      : null;
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

    var prefersReduced =
      window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    var index = 0;
    var intervalMs = 4200;

    function renderToggleState(isPlaying) {
      if (!toggleButton) {
        return;
      }

      toggleButton.textContent = isPlaying ? "Pause" : "Play";
      toggleButton.setAttribute("aria-pressed", String(isPlaying));
    }

    function showImage(nextIndex) {
      index = (nextIndex + images.length) % images.length;
      image.classList.add("opacity-0");

      window.setTimeout(function () {
        image.src = images[index];
        image.classList.remove("opacity-0");
      }, 220);
    }

    function rotateImage() {
      showImage(index + 1);
    }

    function startRotator() {
      if (prefersReduced || timerId || document.visibilityState === "hidden") {
        return;
      }

      timerId = window.setInterval(rotateImage, intervalMs);
      renderToggleState(true);
    }

    function stopRotator() {
      if (!timerId) {
        return;
      }

      window.clearInterval(timerId);
      timerId = null;
      renderToggleState(false);
    }

    document.addEventListener("visibilitychange", function () {
      if (document.visibilityState === "hidden") {
        stopRotator();
        return;
      }

      startRotator();
    });

    if (prevButton) {
      prevButton.addEventListener("click", function () {
        showImage(index - 1);
      });
    }

    if (nextButton) {
      nextButton.addEventListener("click", function () {
        showImage(index + 1);
      });
    }

    if (toggleButton) {
      toggleButton.addEventListener("click", function () {
        if (timerId) {
          stopRotator();
        } else {
          startRotator();
        }
      });
    }

    if (prefersReduced) {
      renderToggleState(false);
      return;
    }

    startRotator();
  }

  return {
    init: function () {
      initHeroRotator();
    },
  };
})();
