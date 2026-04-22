(function () {
  function togglePasswordVisibility() {
    var toggleButtons = document.querySelectorAll("[data-password-toggle]");

    toggleButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        var targetId = button.getAttribute("data-target");
        var input = targetId ? document.getElementById(targetId) : null;

        if (!input) {
          return;
        }

        var isHidden = input.type === "password";
        input.type = isHidden ? "text" : "password";

        var icon = button.querySelector("[data-toggle-icon]");
        var text = button.querySelector("[data-toggle-text]");

        if (icon) {
          icon.textContent = isHidden ? "Hide" : "Show";
        }

        if (text) {
          text.textContent = isHidden ? "Hide" : "Show";
        }

        button.setAttribute("aria-pressed", String(isHidden));
      });
    });
  }

  function calculateStrength(password) {
    var checks = {
      length8: password.length >= 8,
      length12: password.length >= 12,
      uppercase: /[A-Z]/.test(password),
      lowercase: /[a-z]/.test(password),
      number: /\d/.test(password),
      symbol: /[^A-Za-z0-9]/.test(password),
    };

    var score = 0;

    Object.keys(checks).forEach(function (key) {
      if (checks[key]) {
        score += 1;
      }
    });

    if (password.length === 0) {
      return {
        barCount: 0,
        label: "Use 8+ characters with numbers and symbols.",
        levelClass: "",
      };
    }

    if (score <= 2) {
      return {
        barCount: 1,
        label: "Weak password",
        levelClass: "active",
      };
    }

    if (score <= 4) {
      return {
        barCount: 2,
        label: "Fair password",
        levelClass: "active",
      };
    }

    if (score === 5) {
      return {
        barCount: 3,
        label: "Good password",
        levelClass: "good",
      };
    }

    return {
      barCount: 4,
      label: "Strong password",
      levelClass: "strong",
    };
  }

  function initPasswordStrength() {
    var passwordInput = document.querySelector("[data-password-input]");
    var bars = document.querySelectorAll("[data-strength-bar]");
    var strengthText = document.querySelector("[data-strength-text]");

    if (!passwordInput || bars.length === 0 || !strengthText) {
      return;
    }

    function updateStrength() {
      var result = calculateStrength(passwordInput.value);

      bars.forEach(function (bar, index) {
        bar.className = "password-meter-bar";

        if (index < result.barCount) {
          bar.classList.add(result.levelClass || "active");
        }
      });

      strengthText.textContent = result.label;
    }

    passwordInput.addEventListener("input", updateStrength);
    updateStrength();
  }

  function setCooldownMessage(form, message) {
    var messageElement = form.querySelector("[data-form-message]");

    if (!messageElement) {
      return;
    }

    messageElement.textContent = message;
    messageElement.classList.add("visible");
  }

  function initSubmitCooldown() {
    var forms = document.querySelectorAll("[data-cooldown-form]");

    forms.forEach(function (form) {
      var submitButton = form.querySelector('button[type="submit"]');

      if (!submitButton) {
        return;
      }

      var defaultLabel =
        submitButton.getAttribute("data-default-label") ||
        submitButton.textContent.trim();

      form.addEventListener("submit", function (event) {
        event.preventDefault();

        if (form.dataset.cooldownActive === "true") {
          setCooldownMessage(
            form,
            "Please wait a few seconds before trying again.",
          );
          return;
        }

        form.dataset.cooldownActive = "true";
        submitButton.disabled = true;
        submitButton.classList.add("opacity-70", "cursor-not-allowed");

        var remaining = 3;
        setCooldownMessage(
          form,
          "Request submitted. Button unlocks in 3 seconds.",
        );
        submitButton.textContent = "Please wait " + remaining + "s";

        var timer = setInterval(function () {
          remaining -= 1;

          if (remaining > 0) {
            submitButton.textContent = "Please wait " + remaining + "s";
            return;
          }

          clearInterval(timer);
          submitButton.disabled = false;
          submitButton.classList.remove("opacity-70", "cursor-not-allowed");
          submitButton.textContent = defaultLabel;
          form.dataset.cooldownActive = "false";
          setCooldownMessage(form, "You can submit again now.");
        }, 1000);
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    togglePasswordVisibility();
    initPasswordStrength();
    initSubmitCooldown();
  });
})();
