window.Zovita = window.Zovita || {};

window.Zovita.formCooldown = (function () {
  function initCooldownForms() {
    document.querySelectorAll("[data-lite-cooldown]").forEach(function (form) {
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
          message.classList.remove("hidden");
          message.textContent =
            "Submitted successfully. We will contact you soon.";
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

  return {
    init: initCooldownForms,
  };
})();
