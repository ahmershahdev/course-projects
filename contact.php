<?php
$pageKey = 'contact';
$pageTitle = 'Contact Us | Zovita Support';
$pageDescription = 'Contact Zovita for account support, order inquiries, shipping help, and product-related questions.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Contact us']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="contact">
    <?php require __DIR__ . '/includes/navbar.php'; ?>
    <?php require __DIR__ . '/includes/breadcrumbs.php'; ?>

    <main class="zv-section-lg pb-12">
        <div class="zv-container px-2 sm:px-3">
            <section class="zv-hero p-6 sm:p-8 lg:p-10">
                <span class="zv-chip">Contact us</span>
                <h1 class="zv-page-title">We are ready to help your care journey.</h1>
                <p class="zv-page-lead">Reach us for order updates, shipping questions, account issues, and product support requests.</p>
            </section>

            <section class="zv-section-lg" data-contact-root>
                <div class="grid gap-4 lg:grid-cols-[0.9fr_1.1fr]">
                    <article class="zv-panel p-6 sm:p-8">
                        <h2 class="text-3xl font-bold">Support channels</h2>
                        <div class="mt-5 space-y-4">
                            <div class="zv-card p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Email support</p>
                                <a href="mailto:help@zovita.pk" class="mt-1 block text-lg font-bold text-navy-900">help@zovita.pk</a>
                            </div>
                            <div class="zv-card p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Phone support</p>
                                <a href="tel:+923001234567" class="mt-1 block text-lg font-bold text-navy-900">+92 300 1234567</a>
                            </div>
                            <div class="zv-card p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Support hours</p>
                                <p class="mt-1 text-sm font-semibold text-navy-900">Monday to Saturday, 10:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </article>

                    <article class="zv-panel p-6 sm:p-8">
                        <h2 class="text-3xl font-bold">Send us a message</h2>
                        <p class="mt-2 text-sm text-slate-600">Use this form and we will get back shortly.</p>
                        <form data-lite-cooldown class="mt-5 space-y-4" method="post" action="#" enctype="multipart/form-data">
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="zv-label" for="contact-name">Full name</label>
                                    <input id="contact-name" class="zv-input" type="text" placeholder="Your full name" required>
                                </div>
                                <div>
                                    <label class="zv-label" for="contact-phone">Phone number</label>
                                    <input id="contact-phone" class="zv-input" type="tel" placeholder="+92 3XX XXXXXXX" required>
                                </div>
                            </div>
                            <div>
                                <label class="zv-label" for="contact-email">Email address</label>
                                <input id="contact-email" class="zv-input" type="email" placeholder="you@example.com" required>
                            </div>
                            <div class="zv-custom-dropdown" data-custom-dropdown>
                                <label class="zv-label">Inquiry type</label>
                                <button type="button" class="zv-input zv-dropdown-trigger" data-dropdown-trigger aria-expanded="false">
                                    <span data-dropdown-label>Select inquiry type</span>
                                    <span class="zv-dropdown-arrow">v</span>
                                </button>
                                <ul class="zv-dropdown-list" data-dropdown-list>
                                    <li><button type="button" data-dropdown-option data-value="Order and delivery support">Order and delivery support</button></li>
                                    <li><button type="button" data-dropdown-option data-value="Account and login help">Account and login help</button></li>
                                    <li><button type="button" data-dropdown-option data-value="Product recommendation">Product recommendation</button></li>
                                    <li><button type="button" data-dropdown-option data-value="Refund and return request">Refund and return request</button></li>
                                    <li><button type="button" data-dropdown-option data-value="Partnership and business">Partnership and business</button></li>
                                </ul>
                                <input type="hidden" name="inquiry_type" data-dropdown-input required>
                            </div>
                            <div>
                                <label class="zv-label" for="contact-message">Message</label>
                                <textarea id="contact-message" class="zv-input resize-none" rows="5" placeholder="Write your message" required></textarea>
                            </div>
                            <div>
                                <label class="zv-label" for="contact-file">Upload image or file</label>
                                <input id="contact-file" class="zv-input" type="file" data-file-input accept=".jpg,.jpeg,.png,.webp,.pdf,.doc,.docx">
                                <p class="zv-upload-note" data-file-name>No file selected</p>
                            </div>
                            <button type="submit" class="zv-btn-primary w-full">Send message</button>
                            <p data-lite-message class="hidden rounded-lg bg-blue-50 px-3 py-2 text-sm font-semibold text-navy-800"></p>
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>