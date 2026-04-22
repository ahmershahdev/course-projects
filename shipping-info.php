<?php
$pageKey = 'shipping-info';
$pageTitle = 'Shipping Information | Zovita';
$pageDescription = 'Read Zovita shipping timelines, dispatch standards, tracking process, and delivery coverage notes.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Shipping information']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="shipping-info">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container zv-content px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8">
                <span class="zv-chip">Support policy</span>
                <h1 class="zv-page-title">Shipping information</h1>
                <p class="zv-page-lead">This guide covers dispatch timing, expected delivery windows, shipment tracking, and operational considerations for Zovita orders.</p>
                <p class="mt-3 text-sm font-semibold text-navy-900">Last updated: <?php echo date('F j, Y'); ?></p>
            </section>

            <section class="zv-section-lg zv-grid-cards cols-3">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Major city delivery</h2>
                    <p class="mt-2 text-sm text-slate-600">Usually 1-3 business days depending on service area and order time.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Other region delivery</h2>
                    <p class="mt-2 text-sm text-slate-600">Usually 2-5 business days with route and carrier considerations.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Dispatch cutoff</h2>
                    <p class="mt-2 text-sm text-slate-600">Orders confirmed before cutoff are generally dispatched the same day.</p>
                </article>
            </section>

            <section class="space-y-4">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Packaging and handling</h2>
                    <p class="mt-2 text-sm text-slate-600">Products are packed with category-appropriate handling to improve transit protection and delivery quality.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Tracking updates</h2>
                    <p class="mt-2 text-sm text-slate-600">Shipment tracking details are shared via registered contact details after dispatch confirmation.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">Delay scenarios</h2>
                    <p class="mt-2 text-sm text-slate-600">Public holidays, route disruptions, weather, or peak demand may affect delivery timelines.</p>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>