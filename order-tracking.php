<?php
$pageKey = 'order-tracking';
$pageTitle = 'Order Tracking | Zovita';
$pageDescription = 'Track your Zovita orders in real time using order ID and contact verification details.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Order tracking']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="order-tracking">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">Order support</span>
                <h1 class="zv-page-title">Track your order status</h1>
                <p class="zv-page-lead">Enter your order ID and contact details to retrieve latest shipment milestones.</p>
            </section>

            <section class="zv-section-lg grid gap-4 lg:grid-cols-[0.85fr_1.15fr]">
                <article class="zv-panel p-6 sm:p-8">
                    <h2 class="text-2xl font-bold">Track shipment</h2>
                    <form data-lite-cooldown class="mt-5 space-y-4" method="post" action="#">
                        <div>
                            <label class="zv-label" for="track-order-id">Order ID</label>
                            <input id="track-order-id" class="zv-input" type="text" placeholder="ZV-2026-000123" required>
                        </div>
                        <div>
                            <label class="zv-label" for="track-email">Email address</label>
                            <input id="track-email" class="zv-input" type="email" placeholder="you@example.com" required>
                        </div>
                        <div>
                            <label class="zv-label" for="track-phone">Phone number</label>
                            <input id="track-phone" class="zv-input" type="tel" placeholder="+92 3XX XXXXXXX" required>
                        </div>
                        <button class="zv-btn-primary w-full" type="submit">Track now</button>
                        <p data-lite-message class="hidden rounded-lg bg-blue-50 px-3 py-2 text-sm font-semibold text-navy-800"></p>
                    </form>
                </article>

                <article class="zv-panel p-6 sm:p-8">
                    <h2 class="text-2xl font-bold">Example timeline</h2>
                    <div class="mt-5 space-y-3">
                        <div class="zv-card p-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Order confirmed</p>
                            <p class="mt-1 text-sm font-semibold text-navy-900">Apr 20, 2026 - 09:10 AM</p>
                        </div>
                        <div class="zv-card p-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Packed and verified</p>
                            <p class="mt-1 text-sm font-semibold text-navy-900">Apr 20, 2026 - 01:42 PM</p>
                        </div>
                        <div class="zv-card p-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Dispatched</p>
                            <p class="mt-1 text-sm font-semibold text-navy-900">Apr 20, 2026 - 05:05 PM</p>
                        </div>
                        <div class="zv-card p-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Out for delivery</p>
                            <p class="mt-1 text-sm font-semibold text-navy-900">Expected next working day</p>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>