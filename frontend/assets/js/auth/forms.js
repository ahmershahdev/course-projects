window.Zovita = window.Zovita || {};

window.Zovita.authForms = (function () {
  function togglePasswordVisibility() {
    document
      .querySelectorAll("[data-password-toggle]")
      .forEach(function (button) {
        button.addEventListener("click", function () {
          var targetId = button.getAttribute("data-target");
          var input = targetId ? document.getElementById(targetId) : null;

          if (!input) {
            return;
          }

          var hidden = input.type === "password";
          input.type = hidden ? "text" : "password";

          var text = button.querySelector("[data-toggle-text]");
          if (text) {
            text.textContent = hidden ? "Hide" : "Show";
          }
        });
      });
  }

  function scorePassword(password) {
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
        bars: 0,
        level: "",
        label: "Use 8+ characters with upper/lowercase, number, and symbol.",
      };
    }

    if (score <= 2) {
      return { bars: 1, level: "active", label: "Weak password" };
    }

    if (score <= 4) {
      return { bars: 2, level: "active", label: "Fair password" };
    }

    if (score === 5) {
      return { bars: 3, level: "good", label: "Good password" };
    }

    return { bars: 4, level: "strong", label: "Strong password" };
  }

  function initStrengthMeter() {
    var passwordInput = document.querySelector("[data-password-input]");
    var text = document.querySelector("[data-strength-text]");
    var bars = document.querySelectorAll("[data-strength-bar]");

    if (!passwordInput || !text || bars.length === 0) {
      return;
    }

    function update() {
      var state = scorePassword(passwordInput.value);
      bars.forEach(function (bar, index) {
        bar.className = "password-meter-bar";
        if (index < state.bars) {
          bar.classList.add(state.level || "active");
        }
      });
      text.textContent = state.label;
    }

    passwordInput.addEventListener("input", update);
    update();
  }

  function initSubmitCooldown() {
    document.querySelectorAll("[data-cooldown-form]").forEach(function (form) {
      var submit = form.querySelector('button[type="submit"]');
      var message = form.querySelector("[data-form-message]");

      if (!submit) {
        return;
      }

      var defaultLabel =
        submit.getAttribute("data-default-label") || submit.textContent.trim();

      form.addEventListener("submit", function (event) {
        event.preventDefault();

        if (form.dataset.cooldownActive === "true") {
          if (message) {
            message.classList.add("visible");
            message.textContent = "Please wait before submitting again.";
          }
          return;
        }

        form.dataset.cooldownActive = "true";
        submit.disabled = true;
        submit.classList.add("opacity-70", "cursor-not-allowed");

        var remaining = 3;
        submit.textContent = "Please wait " + remaining + "s";

        if (message) {
          message.classList.add("visible");
          message.textContent = "Submitted. Button unlocks in 3 seconds.";
        }

        var timer = setInterval(function () {
          remaining -= 1;

          if (remaining > 0) {
            submit.textContent = "Please wait " + remaining + "s";
            return;
          }

          clearInterval(timer);
          form.dataset.cooldownActive = "false";
          submit.disabled = false;
          submit.classList.remove("opacity-70", "cursor-not-allowed");
          submit.textContent = defaultLabel;

          if (message) {
            message.classList.add("visible");
            message.textContent = "You can submit again now.";
          }
        }, 1000);
      });
    });
  }

  return {
    init: function () {
      togglePasswordVisibility();
      initStrengthMeter();
      initSubmitCooldown();
    },
  };
})();
