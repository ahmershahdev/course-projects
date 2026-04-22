<?php
$pageKey = 'terms-of-service';
$pageTitle = 'Terms of Service | Zovita';
$pageDescription = 'Read Zovita terms of service for account usage, order processing, and platform policy rules.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Terms of service']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="terms-of-service">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container zv-content px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8">
                <span class="zv-chip">Legal policy</span>
                <h1 class="zv-page-title">Terms of service</h1>
                <p class="zv-page-lead">By using Zovita, you agree to the terms below regarding account usage, order transactions, platform conduct, and policy enforcement.</p>
                <p class="mt-3 text-sm font-semibold text-navy-900">Last updated: <?php echo date('F j, Y'); ?></p>
            </section>

            <section class="zv-section-lg space-y-4">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">1. Acceptance of terms</h2>
                    <p class="mt-2 text-sm text-slate-600">Accessing Zovita confirms acceptance of these terms and any linked policy pages.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">2. Account responsibility</h2>
                    <p class="mt-2 text-sm text-slate-600">Users must protect credentials, provide accurate profile details, and notify support about suspicious account activity.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">3. Product and pricing data</h2>
                    <p class="mt-2 text-sm text-slate-600">Product details and prices are updated regularly, but temporary listing inaccuracies can occur and may be corrected.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">4. Orders and cancellations</h2>
                    <p class="mt-2 text-sm text-slate-600">Order confirmations remain subject to stock validation, payment checks, and operational review.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">5. Acceptable usage</h2>
                    <p class="mt-2 text-sm text-slate-600">Fraudulent actions, misuse attempts, scraping abuse, and malicious activities are prohibited.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">6. Policy revisions</h2>
                    <p class="mt-2 text-sm text-slate-600">Terms may change as operations evolve. Continued use after updates indicates acceptance of revised terms.</p>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>