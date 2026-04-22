<?php
$pageKey = 'warranty';
$pageTitle = 'Warranty Policy | Zovita';
$pageDescription = 'View warranty coverage guidance for eligible Zovita products and claim support steps.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Warranty policy']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="warranty">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container zv-content px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8">
                <span class="zv-chip">Support policy</span>
                <h1 class="zv-page-title">Warranty policy</h1>
                <p class="zv-page-lead">Some product categories include manufacturer-backed coverage. This page explains eligibility, required proof, and review expectations.</p>
                <p class="mt-3 text-sm font-semibold text-navy-900">Last updated: <?php echo date('F j, Y'); ?></p>
            </section>

            <section class="zv-section-lg space-y-4">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">1. Eligible products</h2>
                    <p class="mt-2 text-sm text-slate-600">Warranty applies to products explicitly marked as covered under supplier or manufacturer terms.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">2. Required claim details</h2>
                    <p class="mt-2 text-sm text-slate-600">Order proof, invoice details, product photos, and issue description are needed for proper claim review.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">3. Exclusions</h2>
                    <p class="mt-2 text-sm text-slate-600">Damage from misuse, unauthorized modifications, accidental breakage, or expiry-related issues is generally excluded.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">4. Review timeline</h2>
                    <p class="mt-2 text-sm text-slate-600">Claims are usually reviewed within 2-4 business days after complete documentation is submitted.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">5. Resolution options</h2>
                    <p class="mt-2 text-sm text-slate-600">Approved cases may be resolved through replacement, service coordination, or alternate policy-backed outcomes.</p>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>