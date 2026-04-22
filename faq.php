<?php
$pageKey = 'faq';
$pageTitle = 'FAQ | Zovita Help Center';
$pageDescription = 'Get answers to common questions about Zovita orders, shipping, returns, payments, and account support.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'FAQ']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="faq">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">Help center</span>
                <h1 class="zv-page-title">Frequently asked questions</h1>
                <p class="zv-page-lead">Find quick answers for account setup, order processing, tracking, returns, and support operations.</p>
            </section>

            <section class="zv-section-lg">
                <div class="zv-grid-cards cols-2">
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">How can I place an order?</h2>
                        <p class="mt-2 text-sm text-slate-600">Create an account or login, add products to cart, proceed to checkout, confirm address, and submit payment details.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">Can I sign in with Google or Facebook?</h2>
                        <p class="mt-2 text-sm text-slate-600">Yes. Both login and signup pages include Google and Facebook OAuth options for faster onboarding.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">How long does delivery take?</h2>
                        <p class="mt-2 text-sm text-slate-600">Major city deliveries usually complete in 1-3 business days. Other regions generally take 2-5 business days.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">Where can I track my order?</h2>
                        <p class="mt-2 text-sm text-slate-600">Use the order tracking page to check shipment status or contact support for manual tracking assistance.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">Do you offer returns and refunds?</h2>
                        <p class="mt-2 text-sm text-slate-600">Yes, based on product eligibility and policy conditions. See the returns policy page for complete requirements.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">How can I reset my password?</h2>
                        <p class="mt-2 text-sm text-slate-600">Open the forgot password page, submit your account details, and follow reset instructions sent to your registered email.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">Are products authentic?</h2>
                        <p class="mt-2 text-sm text-slate-600">Zovita prioritizes verified sourcing workflows and partner vetting to maintain reliability and product trust.</p>
                    </article>
                    <article class="zv-card p-6">
                        <h2 class="text-xl font-bold">How do I contact support?</h2>
                        <p class="mt-2 text-sm text-slate-600">Visit the contact page or email help@zovita.pk with your issue, order ID, and preferred callback details.</p>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>