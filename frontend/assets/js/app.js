document.addEventListener("DOMContentLoaded", function () {
  var Zovita = window.Zovita || {};
  var pageKey = document.body.getAttribute("data-page") || "";

  function optimizeImages() {
    document.querySelectorAll("img").forEach(function (image) {
      var inNavbar = image.closest(".zv-header") !== null;
      var inFooter = image.closest(".zv-footer") !== null;
      var isHero = image.hasAttribute("data-hero-rotator");

      if (!image.hasAttribute("decoding")) {
        image.setAttribute("decoding", "async");
      }

      if (isHero) {
        image.setAttribute("fetchpriority", "high");
        return;
      }

      if (!inNavbar && !inFooter && !image.hasAttribute("loading")) {
        image.setAttribute("loading", "lazy");
      }
    });
  }

  optimizeImages();

  if (Zovita.navigation && typeof Zovita.navigation.init === "function") {
    Zovita.navigation.init();
  }

  if (Zovita.search && typeof Zovita.search.init === "function") {
    Zovita.search.init();
  }

  if (Zovita.scrollTop && typeof Zovita.scrollTop.init === "function") {
    Zovita.scrollTop.init();
  }

  if (Zovita.formCooldown && typeof Zovita.formCooldown.init === "function") {
    Zovita.formCooldown.init();
  }

  if (
    pageKey === "home" &&
    Zovita.home &&
    typeof Zovita.home.init === "function"
  ) {
    Zovita.home.init();
  }

  if (
    /^shop-category-/.test(pageKey) &&
    Zovita.shop &&
    typeof Zovita.shop.init === "function"
  ) {
    Zovita.shop.init();
  }

  if (
    pageKey === "cart" &&
    Zovita.cart &&
    typeof Zovita.cart.init === "function"
  ) {
    Zovita.cart.init();
  }

  if (
    pageKey === "wishlist" &&
    Zovita.wishlist &&
    typeof Zovita.wishlist.init === "function"
  ) {
    Zovita.wishlist.init();
  }

  if (
    pageKey === "contact" &&
    Zovita.contact &&
    typeof Zovita.contact.init === "function"
  ) {
    Zovita.contact.init();
  }

  if (
    pageKey === "products" &&
    Zovita.product &&
    typeof Zovita.product.init === "function"
  ) {
    Zovita.product.init();
  }

  if (
    document.body.hasAttribute("data-auth-page") &&
    Zovita.authForms &&
    typeof Zovita.authForms.init === "function"
  ) {
    Zovita.authForms.init();
  }
});
