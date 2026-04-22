<?php
$pageKey = 'privacy-policy';
$pageTitle = 'Privacy Policy | Zovita';
$pageDescription = 'Review how Zovita collects, processes, secures, and uses customer data across the platform.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Privacy policy']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="privacy-policy">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container zv-content px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8">
                <span class="zv-chip">Legal policy</span>
                <h1 class="zv-page-title">Privacy policy</h1>
                <p class="zv-page-lead">This policy explains what data Zovita collects, how it is used, and what controls protect customer privacy across account and order workflows.</p>
                <p class="mt-3 text-sm font-semibold text-navy-900">Last updated: <?php echo date('F j, Y'); ?></p>
            </section>

            <section class="zv-section-lg space-y-4">
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">1. Data we collect</h2>
                    <p class="mt-2 text-sm text-slate-600">Account details, contact information, order metadata, and support interactions required for platform operations.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">2. Data usage</h2>
                    <p class="mt-2 text-sm text-slate-600">Information supports order processing, account security, customer support, and service quality improvements.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">3. Sharing controls</h2>
                    <p class="mt-2 text-sm text-slate-600">Data is shared only with essential operational partners such as logistics and payment processors under controlled agreements.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">4. Security standards</h2>
                    <p class="mt-2 text-sm text-slate-600">Zovita follows practical safeguards to reduce unauthorized access risk and preserve platform integrity.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">5. User rights</h2>
                    <p class="mt-2 text-sm text-slate-600">Users can request profile corrections and policy clarifications by contacting support channels.</p>
                </article>
                <article class="zv-card p-6">
                    <h2 class="text-2xl font-bold">6. Policy updates</h2>
                    <p class="mt-2 text-sm text-slate-600">Privacy policy updates are posted on this page and become effective on publication date.</p>
                </article>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>