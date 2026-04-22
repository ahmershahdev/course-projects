window.Zovita = window.Zovita || {};

window.Zovita.contact = (function () {
  function initDropdown(dropdown) {
    var trigger = dropdown.querySelector("[data-dropdown-trigger]");
    var label = dropdown.querySelector("[data-dropdown-label]");
    var list = dropdown.querySelector("[data-dropdown-list]");
    var hiddenInput = dropdown.querySelector("[data-dropdown-input]");
    var options = Array.prototype.slice.call(
      dropdown.querySelectorAll("[data-dropdown-option]"),
    );

    if (!trigger || !label || !list || !hiddenInput || options.length === 0) {
      return;
    }

    function closeList() {
      dropdown.classList.remove("is-open");
      trigger.setAttribute("aria-expanded", "false");
    }

    trigger.addEventListener("click", function () {
      var willOpen = !dropdown.classList.contains("is-open");
      dropdown.classList.toggle("is-open", willOpen);
      trigger.setAttribute("aria-expanded", willOpen ? "true" : "false");
    });

    options.forEach(function (option) {
      option.addEventListener("click", function () {
        var value = option.getAttribute("data-value") || "";
        hiddenInput.value = value;
        label.textContent = value;
        closeList();
      });
    });

    document.addEventListener("click", function (event) {
      if (!dropdown.contains(event.target)) {
        closeList();
      }
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape") {
        closeList();
      }
    });
  }

  function initFileInput(root) {
    var input = root.querySelector("[data-file-input]");
    var fileName = root.querySelector("[data-file-name]");

    if (!input || !fileName) {
      return;
    }

    input.addEventListener("change", function () {
      if (!input.files || input.files.length === 0) {
        fileName.textContent = "No file selected";
        return;
      }

      fileName.textContent = input.files[0].name;
    });
  }

  function init() {
    var root = document.querySelector("[data-contact-root]");

    if (!root) {
      return;
    }

    root.querySelectorAll("[data-custom-dropdown]").forEach(initDropdown);
    initFileInput(root);
  }

  return {
    init: init,
  };
})();
