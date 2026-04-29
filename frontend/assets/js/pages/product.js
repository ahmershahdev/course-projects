window.Zovita = window.Zovita || {};

window.Zovita.product = (function () {
  function clampQty(value) {
    var qty = parseInt(String(value || "1"), 10);
    if (Number.isNaN(qty)) {
      return 1;
    }
    return Math.min(25, Math.max(1, qty));
  }

  function buildHref(baseUrl, qty) {
    if (!baseUrl) {
      return "";
    }
    var separator = baseUrl.indexOf("?") === -1 ? "?" : "&";
    return baseUrl + separator + "qty=" + String(qty);
  }

  function init() {
    var qtyRoot = document.querySelector("[data-product-qty]");
    var addButton = document.querySelector("[data-add-to-cart]");

    if (!qtyRoot || !addButton) {
      return;
    }

    var decreaseButton = qtyRoot.querySelector("[data-qty-decrease]");
    var increaseButton = qtyRoot.querySelector("[data-qty-increase]");
    var valueText = qtyRoot.querySelector("[data-qty-value]");
    var baseUrl = addButton.getAttribute("data-base-url") || "";

    function setQty(nextValue) {
      var nextQty = clampQty(nextValue);
      if (valueText) {
        valueText.textContent = String(nextQty);
      }
      addButton.setAttribute("href", buildHref(baseUrl, nextQty));
    }

    if (decreaseButton) {
      decreaseButton.addEventListener("click", function () {
        var current = clampQty(valueText ? valueText.textContent : 1);
        setQty(current - 1);
      });
    }

    if (increaseButton) {
      increaseButton.addEventListener("click", function () {
        var current = clampQty(valueText ? valueText.textContent : 1);
        setQty(current + 1);
      });
    }

    setQty(valueText ? valueText.textContent : 1);
  }

  return {
    init: init,
  };
})();
