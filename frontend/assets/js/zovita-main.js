(function () {
  function initMobileMenu() {
    var toggleButton = document.querySelector("[data-menu-toggle]");
    var mobileMenu = document.querySelector("[data-mobile-menu]");

    if (!toggleButton || !mobileMenu) {
      return;
    }

    toggleButton.addEventListener("click", function () {
      var isHidden = mobileMenu.classList.contains("hidden");

      mobileMenu.classList.toggle("hidden");
      toggleButton.setAttribute("aria-expanded", String(isHidden));
    });
  }

  function initHeroRotator() {
    var heroImage = document.querySelector("[data-hero-rotator]");

    if (!heroImage) {
      return;
    }

    var rawImages = heroImage.getAttribute("data-images") || "";
    var images = rawImages
      .split(",")
      .map(function (item) {
        return item.trim();
      })
      .filter(Boolean);

    if (images.length <= 1) {
      return;
    }

    var currentIndex = 0;

    setInterval(function () {
      currentIndex = (currentIndex + 1) % images.length;
      heroImage.classList.add("opacity-0");

      setTimeout(function () {
        heroImage.src = images[currentIndex];
        heroImage.classList.remove("opacity-0");
      }, 260);
    }, 4200);
  }

  function initLiteCooldownForms() {
    var forms = document.querySelectorAll("[data-lite-cooldown]");

    forms.forEach(function (form) {
      var button = form.querySelector('button[type="submit"]');
      var message = form.querySelector("[data-lite-message]");

      if (!button) {
        return;
      }

      var defaultLabel = button.textContent.trim();

      form.addEventListener("submit", function (event) {
        event.preventDefault();

        if (button.disabled) {
          return;
        }

        var remaining = 3;
        button.disabled = true;
        button.classList.add("opacity-70", "cursor-not-allowed");
        button.textContent = "Please wait " + remaining + "s";

        if (message) {
          message.textContent = "Thanks, your request has been captured.";
          message.classList.remove("hidden");
        }

        var timer = setInterval(function () {
          remaining -= 1;

          if (remaining > 0) {
            button.textContent = "Please wait " + remaining + "s";
            return;
          }

          clearInterval(timer);
          button.disabled = false;
          button.classList.remove("opacity-70", "cursor-not-allowed");
          button.textContent = defaultLabel;
        }, 1000);
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    initMobileMenu();
    initHeroRotator();
    initLiteCooldownForms();
  });
})();
