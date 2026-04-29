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
            <section class="zv-hero zv-hero-premium p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">About Zovita</span>
                <h1 class="zv-page-title">Building confidence into every healthcare purchase.</h1>
                <p class="zv-page-lead">Zovita helps families discover trusted healthcare essentials through transparent category organization, verified brand selection, and premium shopping flows designed for speed and clarity.</p>
                <ul class="zv-hero-list">
                    <li><span>01</span>
                        <div>Verified suppliers and trusted brands keep every purchase reliable.</div>
                    </li>
                    <li><span>02</span>
                        <div>Structured categories and filters make decisions faster and clearer.</div>
                    </li>
                    <li><span>03</span>
                        <div>Support-first policies keep order tracking and returns transparent.</div>
                    </li>
                </ul>
                <div class="mt-6 zv-grid-cards cols-3">
                    <div class="zv-glow-card"><strong class="block text-2xl text-navy-900">3000+</strong>
                        <p class="mt-1 text-sm text-slate-600">Healthcare products listed</p>
                    </div>
                    <div class="zv-glow-card"><strong class="block text-2xl text-navy-900">120+</strong>
                        <p class="mt-1 text-sm text-slate-600">Brand partnerships and suppliers</p>
                    </div>
                    <div class="zv-glow-card"><strong class="block text-2xl text-navy-900">24/7</strong>
                        <p class="mt-1 text-sm text-slate-600">Support-first customer approach</p>
                    </div>
                </div>
            </section>

            <section class="zv-section-lg">
                <div class="mb-4">
                    <span class="zv-chip">Our direction</span>
                    <h2 class="mt-3 text-3xl font-bold">Purpose-driven healthcare commerce</h2>
                    <p class="mt-2 text-sm text-slate-600">Every decision is anchored in trust, clarity, and long-term customer care.</p>
                </div>
                <div class="zv-grid-cards cols-3">
                    <article class="zv-glow-card">
                        <h2 class="text-2xl font-bold">Mission</h2>
                        <p class="mt-3 text-sm text-slate-600">Provide dependable healthcare commerce with practical category navigation, authentic products, and responsive customer support.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h2 class="text-2xl font-bold">Vision</h2>
                        <p class="mt-3 text-sm text-slate-600">Become Pakistan's most trusted digital destination for healthcare essentials, preventive wellness, and support-led customer experience.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h2 class="text-2xl font-bold">Values</h2>
                        <p class="mt-3 text-sm text-slate-600">Integrity in sourcing, transparent policies, security-first systems, and continuous improvements driven by customer feedback.</p>
                    </article>
                </div>
            </section>

            <section class="zv-panel zv-hero-premium p-6 sm:p-8">
                <span class="zv-chip">Quality standards</span>
                <h2 class="mt-3 text-3xl font-bold">How Zovita maintains quality standards</h2>
                <p class="mt-2 text-sm text-slate-600">We pair trustworthy sourcing with operational care so every order meets a consistent standard.</p>
                <div class="mt-4 zv-grid-cards cols-2">
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Verified sourcing</h3>
                        <p class="mt-2 text-sm text-slate-600">We prioritize procurement through recognized supplier and brand channels to preserve product reliability and traceability.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Secure handling</h3>
                        <p class="mt-2 text-sm text-slate-600">Order packaging and dispatch workflows are designed to reduce delivery risk and preserve product condition.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Transparent support</h3>
                        <p class="mt-2 text-sm text-slate-600">Policy-backed support channels for returns, tracking, refunds, and product concerns ensure clear customer communication.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Platform upgrades</h3>
                        <p class="mt-2 text-sm text-slate-600">We continuously refine search, category structure, and checkout UX to improve trust and convenience.</p>
                    </article>
                </div>
            </section>

            <section class="zv-section-lg">
                <div class="mb-4">
                    <span class="zv-chip">Care journey</span>
                    <h2 class="mt-3 text-3xl font-bold">Support that stays with every order</h2>
                    <p class="mt-2 text-sm text-slate-600">From discovery to delivery, we focus on clarity, care, and responsiveness.</p>
                </div>
                <div class="zv-grid-cards cols-3">
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Guided discovery</h3>
                        <p class="mt-2 text-sm text-slate-600">Structured categories and filters help customers find the right solution quickly.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Order clarity</h3>
                        <p class="mt-2 text-sm text-slate-600">Transparent pricing, accurate quantities, and dependable checkout flows.</p>
                    </article>
                    <article class="zv-glow-card">
                        <h3 class="text-xl font-bold">Follow-through support</h3>
                        <p class="mt-2 text-sm text-slate-600">Proactive updates, tracking, and support teams ready to assist.</p>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>