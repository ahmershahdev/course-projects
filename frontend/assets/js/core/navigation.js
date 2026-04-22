window.Zovita = window.Zovita || {};

window.Zovita.navigation = (function () {
  function initOffcanvas() {
    var openButton = document.querySelector("[data-offcanvas-open]");
    var closeButton = document.querySelector("[data-offcanvas-close]");
    var overlay = document.querySelector("[data-offcanvas-overlay]");
    var panel = document.querySelector("[data-offcanvas]");

    if (!openButton || !closeButton || !overlay || !panel) {
      return;
    }

    panel.setAttribute("aria-hidden", "true");

    function openMenu() {
      document.body.classList.add("zv-offcanvas-open");
      openButton.setAttribute("aria-expanded", "true");
      panel.setAttribute("aria-hidden", "false");
    }

    function closeMenu() {
      document.body.classList.remove("zv-offcanvas-open");
      openButton.setAttribute("aria-expanded", "false");
      panel.setAttribute("aria-hidden", "true");
    }

    openButton.addEventListener("click", openMenu);
    closeButton.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    panel.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape") {
        closeMenu();
      }
    });
  }

  function markActiveLinks() {
    var page = (
      window.location.pathname.split("/").pop() || "index.php"
    ).toLowerCase();

    document.querySelectorAll("[data-nav-link]").forEach(function (link) {
      var href = (link.getAttribute("href") || "").toLowerCase();
      var normalized = href.split("/").pop();

      if (!normalized) {
        return;
      }

      if ((page === "" && normalized === "index.php") || normalized === page) {
        link.classList.add("is-active");
        link.setAttribute("aria-current", "page");
      }
    });
  }

  return {
    init: function () {
      initOffcanvas();
      markActiveLinks();
    },
  };
})();
