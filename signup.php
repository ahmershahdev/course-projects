<?php
$pageKey = 'signup';
$pageTitle = 'Create Account | Zovita';
$pageDescription = 'Create your Zovita account to unlock personalized shopping, faster checkout, and order tracking features.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Sign up']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="signup" data-auth-page>
    <main class="zv-auth-center-shell">
        <section class="zv-auth-form-card zv-reveal">
            <div class="zv-auth-form-head">
                <a href="index.php" class="zv-auth-back-link">Back to store</a>
                <span class="zv-chip">Account setup</span>
                <h1 class="text-3xl font-bold">Create your Zovita account</h1>
                <p class="text-sm text-slate-600">Get faster checkout, saved products, and a premium healthcare dashboard.</p>
            </div>

            <form data-cooldown-form class="mt-5 space-y-4" method="post" action="#">
                <div>
                    <label class="zv-label" for="signup-full-name">Full name</label>
                    <input id="signup-full-name" name="full_name" type="text" class="zv-input" placeholder="Ahmer Shah" autocomplete="name" required>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="zv-label" for="signup-email">Email address</label>
                        <input id="signup-email" name="email" type="email" class="zv-input" placeholder="you@example.com" autocomplete="email" required>
                    </div>
                    <div>
                        <label class="zv-label" for="signup-phone">Phone number</label>
                        <input id="signup-phone" name="phone" type="tel" class="zv-input" placeholder="+92 3XX XXXXXXX" autocomplete="tel" required>
                    </div>
                </div>

                <div>
                    <label class="zv-label" for="signup-password">Password</label>
                    <div class="zv-password-wrap">
                        <input id="signup-password" data-password-input name="password" type="password" class="zv-input pr-20" autocomplete="new-password" placeholder="Create a strong password" required>
                        <button type="button" class="zv-password-toggle" data-password-toggle data-target="signup-password" aria-label="Toggle password visibility">
                            <span data-toggle-text>Show</span>
                        </button>
                    </div>
                    <div class="password-meter" aria-hidden="true">
                        <span class="password-meter-bar" data-strength-bar></span>
                        <span class="password-meter-bar" data-strength-bar></span>
                        <span class="password-meter-bar" data-strength-bar></span>
                        <span class="password-meter-bar" data-strength-bar></span>
                    </div>
                    <p class="password-strength-text" data-strength-text>Use 8+ characters with upper/lowercase, number, and symbol.</p>
                </div>

                <div>
                    <label class="zv-label" for="signup-confirm-password">Confirm password</label>
                    <div class="zv-password-wrap">
                        <input id="signup-confirm-password" name="password_confirmation" type="password" class="zv-input pr-20" autocomplete="new-password" placeholder="Re-enter password" required>
                        <button type="button" class="zv-password-toggle" data-password-toggle data-target="signup-confirm-password" aria-label="Toggle confirm password visibility">
                            <span data-toggle-text>Show</span>
                        </button>
                    </div>
                </div>

                <label class="inline-flex items-start gap-2 text-sm leading-relaxed text-slate-600">
                    <input type="checkbox" class="mt-1 h-4 w-4 rounded border-slate-300 text-navy-700 focus:ring-navy-700" required>
                    <span>I agree to the <a href="terms-of-service.php" class="font-semibold text-navy-900">terms of service</a> and <a href="privacy-policy.php" class="font-semibold text-navy-900">privacy policy</a>.</span>
                </label>

                <button type="submit" class="zv-btn-primary w-full" data-default-label="Create account">Create account</button>
                <p data-form-message class="zv-cooldown-message"></p>
            </form>

            <p class="zv-auth-switch">Already have an account? <a href="login.php">Login now</a>.</p>
        </section>
    </main>

    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>