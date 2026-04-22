<?php
$pageKey = 'about';
$pageTitle = 'About Zovita | Our Mission and Values';
$pageDescription = 'Learn about Zovita, our customer-first healthcare commerce mission, quality standards, and support commitment.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="about">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">About Zovita</span>
                <h1 class="zv-page-title">Building confidence into every healthcare purchase.</h1>
                <p class="zv-page-lead">Zovita helps families discover trusted healthcare essentials through transparent category organization, verified brand selection, and premium shopping flows designed for speed and clarity.</p>
                <div class="mt-6 zv-grid-cards cols-3">
                    <div class="zv-card p-4"><strong class="block text-2xl text-navy-900">3000+</strong>
                        <p class="mt-1 text-sm text-slate-600">Healthcare products listed</p>
                    </div>
                    <div class="zv-card p-4"><strong class="block text-2xl text-navy-900">120+</strong>
                        <p class="mt-1 text-sm text-slate-600">Brand partnerships and suppliers</p>
                    </div>
                    <div class="zv-card p-4"><strong class="block text-2xl text-navy-900">24/7</strong>
                        <p class="mt-1 text-sm text-slate-600">Support-first customer approach</p>
                    </div>
                </div>
            </section>

            <section class="zv-section-lg">
                <div class="zv-grid-cards cols-3">
                    <article class="zv-card p-6">
                        <h2 class="text-2xl font-bold">Mission</h2>
                        <p class="mt-3 text-sm text-slate-600">Provide dependable healthcare commerce with practical category navigation, authentic products, and responsive customer support.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-2xl font-bold">Vision</h2>
                        <p class="mt-3 text-sm text-slate-600">Become Pakistan's most trusted digital destination for healthcare essentials, preventive wellness, and support-led customer experience.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-2xl font-bold">Values</h2>
                        <p class="mt-3 text-sm text-slate-600">Integrity in sourcing, transparent policies, security-first systems, and continuous improvements driven by customer feedback.</p>
                    </article>
                </div>
            </section>

            <section class="zv-panel p-6 sm:p-8">
                <h2 class="text-3xl font-bold">How Zovita maintains quality standards</h2>
                <div class="mt-4 zv-grid-cards cols-2">
                    <article class="zv-card p-5">
                        <h3 class="text-xl font-bold">Verified sourcing</h3>
                        <p class="mt-2 text-sm text-slate-600">We prioritize procurement through recognized supplier and brand channels to preserve product reliability and traceability.</p>
                    </article>
                    <article class="zv-card p-5">
                        <h3 class="text-xl font-bold">Secure handling</h3>
                        <p class="mt-2 text-sm text-slate-600">Order packaging and dispatch workflows are designed to reduce delivery risk and preserve product condition.</p>
                    </article>
                    <article class="zv-card p-5">
                        <h3 class="text-xl font-bold">Transparent support</h3>
                        <p class="mt-2 text-sm text-slate-600">Policy-backed support channels for returns, tracking, refunds, and product concerns ensure clear customer communication.</p>
                    </article>
                    <article class="zv-card p-5">
                        <h3 class="text-xl font-bold">Platform upgrades</h3>
                        <p class="mt-2 text-sm text-slate-600">We continuously refine search, category structure, and checkout UX to improve trust and convenience.</p>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>