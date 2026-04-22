<?php
$pageKey = 'account';
$pageTitle = 'My Account | Zovita';
$pageDescription = 'Manage your Zovita account profile, order history, addresses, and saved healthcare preferences.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'My account']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="account">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">Account dashboard</span>
                <h1 class="zv-page-title">Welcome back, Ahmer</h1>
                <p class="zv-page-lead">Manage profile details, saved addresses, payment preferences, and active orders from one secure dashboard.</p>
            </section>

            <section class="zv-section-lg zv-grid-cards cols-4">
                <article class="zv-card p-5">
                    <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Total orders</p>
                    <p class="mt-2 text-3xl font-bold text-navy-900">18</p>
                </article>
                <article class="zv-card p-5">
                    <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Active shipments</p>
                    <p class="mt-2 text-3xl font-bold text-navy-900">2</p>
                </article>
                <article class="zv-card p-5">
                    <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Wishlist items</p>
                    <p class="mt-2 text-3xl font-bold text-navy-900">14</p>
                </article>
                <article class="zv-card p-5">
                    <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Saved addresses</p>
                    <p class="mt-2 text-3xl font-bold text-navy-900">3</p>
                </article>
            </section>

            <section class="grid gap-4 lg:grid-cols-[1fr_1fr]">
                <article class="zv-panel p-6 sm:p-8">
                    <h2 class="text-2xl font-bold">Profile details</h2>
                    <div class="mt-4 space-y-3 text-sm text-slate-700">
                        <p><strong>Name:</strong> Ahmer Shah</p>
                        <p><strong>Email:</strong> ahmer@example.com</p>
                        <p><strong>Phone:</strong> +92 300 1234567</p>
                        <p><strong>Preferred communication:</strong> Email and SMS</p>
                    </div>
                    <a href="#" class="zv-btn-secondary mt-4">Edit profile</a>
                </article>

                <article class="zv-panel p-6 sm:p-8">
                    <h2 class="text-2xl font-bold">Recent orders</h2>
                    <div class="mt-4 space-y-3">
                        <div class="zv-card p-4">
                            <p class="text-sm font-semibold text-navy-900">ZV-2026-000123</p>
                            <p class="text-xs text-slate-600">3 items | Dispatched</p>
                        </div>
                        <div class="zv-card p-4">
                            <p class="text-sm font-semibold text-navy-900">ZV-2026-000118</p>
                            <p class="text-xs text-slate-600">2 items | Delivered</p>
                        </div>
                        <div class="zv-card p-4">
                            <p class="text-sm font-semibold text-navy-900">ZV-2026-000110</p>
                            <p class="text-xs text-slate-600">4 items | Delivered</p>
                        </div>
                    </div>
                    <a href="order-tracking.php" class="zv-btn-primary mt-4">Track orders</a>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>