<?php
$pageKey = $pageKey ?? 'default';
$isAuthPage = in_array($pageKey, ['login', 'signup', 'forgot-password'], true);
$isShopCategoryPage = in_array($pageKey, ['shop-category-a', 'shop-category-b', 'shop-category-c'], true);
?>

<script src="frontend/assets/js/core/navigation.js"></script>
<script src="frontend/assets/js/features/search.js"></script>
<script src="frontend/assets/js/features/scroll-top.js"></script>
<script src="frontend/assets/js/features/form-cooldown.js"></script>

<?php if ($pageKey === 'home'): ?>
    <script src="frontend/assets/js/pages/home.js"></script>
<?php endif; ?>

<?php if ($isShopCategoryPage): ?>
    <script src="frontend/assets/js/pages/shop.js"></script>
<?php endif; ?>

<?php if ($pageKey === 'cart'): ?>
    <script src="frontend/assets/js/pages/cart.js"></script>
<?php endif; ?>

<?php if ($pageKey === 'wishlist'): ?>
    <script src="frontend/assets/js/pages/wishlist.js"></script>
<?php endif; ?>

<?php if ($pageKey === 'contact'): ?>
    <script src="frontend/assets/js/pages/contact.js"></script>
<?php endif; ?>

<?php if ($isAuthPage): ?>
    <script src="frontend/assets/js/auth/forms.js"></script>
<?php endif; ?>

<script src="frontend/assets/js/app.js"></script>