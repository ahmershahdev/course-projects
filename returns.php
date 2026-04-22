<?php
$pageKey = 'returns';
$pageTitle = 'Returns and Refund Policy | Zovita';
$pageDescription = 'Learn Zovita return and refund rules, eligibility conditions, and request timelines.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Returns and refund']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="returns">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container zv-content px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8">
                <span class="zv-chip">Support policy</span>
                <h1 class="zv-page-title">Returns and refund policy</h1>
                <p class="zv-page-lead">We aim for transparent and fair return handling. This page explains return eligibility, restrictions, and refund processing expectations.</p>
                <p class="mt-3 text-sm font-semibold text-navy-900">Last updated: <?php echo date('F j, Y'); ?></p>
            </section>

            <section class="zv-section-lg space-y-4">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">1. Return request window</h2>
                    <p class="mt-2 text-sm text-slate-600">Requests should be raised within the policy-defined timeline from delivery date.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">2. Product condition</h2>
                    <p class="mt-2 text-sm text-slate-600">Items should remain in acceptable condition with original packaging and invoice details when applicable.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">3. Non-returnable categories</h2>
                    <p class="mt-2 text-sm text-slate-600">Some consumable, hygiene-sensitive, or special handling categories may not be eligible for return.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">4. Refund timeline</h2>
                    <p class="mt-2 text-sm text-slate-600">Approved refunds are processed based on payment method timelines and operational verification steps.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">5. Incorrect or damaged delivery</h2>
                    <p class="mt-2 text-sm text-slate-600">Report incorrect or damaged items quickly with clear photo proof and order details for priority support.</p>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>