<?php
$currentScript = $currentScript ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

if (!function_exists('zvActiveClass')) {
    function zvActiveClass($targets, $currentScript)
    {
        $files = is_array($targets) ? $targets : [$targets];
        foreach ($files as $file) {
            if ($currentScript === $file) {
                return ' is-active';
            }
        }
        return '';
    }
}

$primaryNav = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Daily Wellness', 'url' => 'shop-category-a.php'],
    ['label' => 'Skin & Derma', 'url' => 'shop-category-b.php'],
    ['label' => 'Oral & Nutrition', 'url' => 'shop-category-c.php'],
    ['label' => 'About Us', 'url' => 'about.php'],
    ['label' => 'Contact', 'url' => 'contact.php']
];
?>

<header class="zv-header">
    <div class="zv-container px-1 py-3 sm:px-2">
        <div class="zv-navbar">
            <a href="index.php" class="zv-brand">
                <img src="frontend/assets/images/logo/logo.png" alt="Zovita logo" class="zv-brand-logo">
                <span class="zv-brand-text">
                    <strong>Zovita</strong>
                    <span>Health and Wellness</span>
                </span>
            </a>

            <div class="zv-search zv-search-desktop" data-search-root>
                <span class="zv-search-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.35-4.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
                <input class="zv-search-input" type="search" data-search-input autocomplete="off" spellcheck="false" placeholder="Search medicines and products" aria-label="Search medicines and products">
                <div class="zv-suggestions" data-suggestions>
                    <div data-suggestions-list></div>
                </div>
            </div>

            <nav class="zv-nav-links" aria-label="Main navigation">
                <?php foreach ($primaryNav as $item): ?>
                    <a href="<?php echo $item['url']; ?>" data-nav-link class="zv-nav-link<?php echo zvActiveClass($item['url'], $currentScript); ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
            </nav>

            <div class="zv-nav-actions">
                <a href="wishlist.php" data-nav-link class="zv-nav-link<?php echo zvActiveClass('wishlist.php', $currentScript); ?>">Wishlist</a>
                <a href="cart.php" data-nav-link class="zv-nav-link<?php echo zvActiveClass('cart.php', $currentScript); ?>">Cart</a>
                <a href="login.php" class="zv-btn-secondary">Sign In</a>
                <a href="signup.php" class="zv-btn-primary">Create Account</a>
                <button type="button" data-offcanvas-open class="zv-menu-button" aria-label="Open menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="zv-offcanvas-overlay" data-offcanvas-overlay></div>
    <aside class="zv-offcanvas" data-offcanvas>
        <div class="zv-offcanvas-panel">
            <div class="zv-offcanvas-header">
                <div class="zv-brand-text">
                    <strong>Zovita</strong>
                    <span>Navigation</span>
                </div>
                <button type="button" class="zv-offcanvas-close" data-offcanvas-close aria-label="Close menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="zv-search zv-search-mobile" data-search-root>
                <span class="zv-search-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.35-4.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
                <input class="zv-search-input" type="search" data-search-input autocomplete="off" spellcheck="false" placeholder="Search medicines and products" aria-label="Search medicines and products">
                <div class="zv-suggestions" data-suggestions>
                    <div data-suggestions-list></div>
                </div>
            </div>

            <nav class="zv-offcanvas-links" aria-label="Mobile navigation">
                <?php foreach ($primaryNav as $item): ?>
                    <a href="<?php echo $item['url']; ?>" data-nav-link class="<?php echo zvActiveClass($item['url'], $currentScript); ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
                <a href="account.php" data-nav-link class="<?php echo zvActiveClass('account.php', $currentScript); ?>">Account</a>
                <a href="order-tracking.php" data-nav-link class="<?php echo zvActiveClass('order-tracking.php', $currentScript); ?>">Order Tracking</a>
                <a href="wishlist.php" data-nav-link class="<?php echo zvActiveClass('wishlist.php', $currentScript); ?>">Wishlist</a>
                <a href="cart.php" data-nav-link class="<?php echo zvActiveClass('cart.php', $currentScript); ?>">Cart</a>
                <a href="faq.php" data-nav-link class="<?php echo zvActiveClass('faq.php', $currentScript); ?>">FAQ</a>
                <a href="shipping-info.php" data-nav-link class="<?php echo zvActiveClass('shipping-info.php', $currentScript); ?>">Shipping info</a>
            </nav>

            <div class="mt-auto pt-3">
                <div class="zv-panel p-3">
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">Contact us</p>
                    <a class="mt-1 block text-sm font-bold text-navy-900" href="mailto:help@zovita.pk">help@zovita.pk</a>
                    <a class="mt-1 block text-sm font-bold text-navy-900" href="tel:+923001234567">+92 300 1234567</a>
                    <div class="mt-3 flex gap-2">
                        <a href="login.php" class="zv-btn-secondary w-full">Login</a>
                        <a href="signup.php" class="zv-btn-primary w-full">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</header>