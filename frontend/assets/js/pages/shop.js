window.Zovita = window.Zovita || {};

window.Zovita.shop = (function () {
  function initCatalog(catalog) {
    var queryInput = catalog.querySelector("[data-filter-query]");
    var typeInput = catalog.querySelector("[data-filter-type]");
    var sectionInput = catalog.querySelector("[data-filter-section]");
    var sortInput = catalog.querySelector("[data-filter-sort]");
    var grid = catalog.querySelector("[data-product-grid]");
    var countText = catalog.querySelector("[data-product-count]");
    var emptyState = catalog.querySelector("[data-empty-state]");
    var cards = Array.prototype.slice.call(
      catalog.querySelectorAll("[data-product-card]"),
    );

    if (!grid || cards.length === 0) {
      return;
    }

    cards.forEach(function (card, index) {
      card.setAttribute("data-original-index", String(index));
    });

    function normalize(value) {
      return String(value || "")
        .toLowerCase()
        .replace(/\s+/g, " ")
        .trim();
    }

    function updateCount(visibleCount) {
      if (countText) {
        countText.textContent =
          String(visibleCount) +
          (visibleCount === 1 ? " premium product" : " premium products");
      }

      if (emptyState) {
        emptyState.classList.toggle("is-visible", visibleCount === 0);
      }
    }

    function getSortValue(card, sortBy) {
      if (sortBy === "price-low" || sortBy === "price-high") {
        return parseInt(card.getAttribute("data-price") || "0", 10);
      }

      if (sortBy === "name") {
        return normalize(card.getAttribute("data-name"));
      }

      return parseInt(card.getAttribute("data-original-index") || "0", 10);
    }

    function applyHashSectionFilter() {
      if (!sectionInput) {
        return;
      }

      var hashSection = normalize(
        (window.location.hash || "").replace(/^#/, ""),
      );
      if (!hashSection) {
        return;
      }

      var hasMatchingOption = Array.prototype.some.call(
        sectionInput.options || [],
        function (option) {
          return normalize(option.value) === hashSection;
        },
      );

      if (hasMatchingOption) {
        sectionInput.value = hashSection;
      }
    }

    function applyFilters() {
      var query = normalize(queryInput ? queryInput.value : "");
      var type = normalize(typeInput ? typeInput.value : "all");
      var section = normalize(sectionInput ? sectionInput.value : "all");
      var sortBy = normalize(sortInput ? sortInput.value : "featured");

      var visibleCards = cards.filter(function (card) {
        var cardName = normalize(card.getAttribute("data-name"));
        var cardType = normalize(card.getAttribute("data-type"));
        var cardSection = normalize(card.getAttribute("data-section"));

        var matchQuery = query === "" || cardName.indexOf(query) !== -1;
        var matchType = type === "all" || cardType === type;
        var matchSection = section === "all" || cardSection === section;

        return matchQuery && matchType && matchSection;
      });

      visibleCards.sort(function (left, right) {
        if (sortBy === "price-low") {
          return getSortValue(left, sortBy) - getSortValue(right, sortBy);
        }

        if (sortBy === "price-high") {
          return getSortValue(right, sortBy) - getSortValue(left, sortBy);
        }

        if (sortBy === "name") {
          return getSortValue(left, sortBy).localeCompare(
            getSortValue(right, sortBy),
          );
        }

        return getSortValue(left, sortBy) - getSortValue(right, sortBy);
      });

      cards.forEach(function (card) {
        card.classList.add("is-hidden");
      });

      visibleCards.forEach(function (card) {
        card.classList.remove("is-hidden");
        grid.appendChild(card);
      });

      updateCount(visibleCards.length);
    }

    [queryInput, typeInput, sectionInput, sortInput].forEach(
      function (control) {
        if (!control) {
          return;
        }

        var eventName = control.tagName === "INPUT" ? "input" : "change";
        control.addEventListener(eventName, applyFilters);
      },
    );

    window.addEventListener("hashchange", function () {
      applyHashSectionFilter();
      applyFilters();
    });

    applyHashSectionFilter();
    applyFilters();
  }

  return {
    init: function () {
      document.querySelectorAll("[data-shop-catalog]").forEach(initCatalog);
    },
  };
})();
