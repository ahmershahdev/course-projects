<?php
$pageKey = 'forgot-password';
$pageTitle = 'Forgot Password | Zovita';
$pageDescription = 'Reset your Zovita account password securely and restore access to your healthcare dashboard.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Forgot password']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="forgot-password" data-auth-page>
    <main class="zv-auth-center-shell">
        <section class="zv-auth-form-card zv-reveal">
            <div class="zv-auth-form-head">
                <a href="index.php" class="zv-auth-back-link">Back to store</a>
                <span class="zv-chip">Account recovery</span>
                <h1 class="text-3xl font-bold">Reset your password</h1>
                <p class="text-sm text-slate-600">Enter your details and we will send a secure reset link to your registered email.</p>
            </div>

            <form data-cooldown-form class="mt-5 space-y-4" method="post" action="#">
                <div>
                    <label class="zv-label" for="forgot-email">Email address</label>
                    <input id="forgot-email" type="email" class="zv-input" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div>
                    <label class="zv-label" for="forgot-phone">Phone number</label>
                    <input id="forgot-phone" type="tel" class="zv-input" autocomplete="tel" placeholder="+92 3XX XXXXXXX" required>
                </div>

                <button type="submit" class="zv-btn-primary w-full" data-default-label="Send reset link">Send reset link</button>
                <p data-form-message class="zv-cooldown-message"></p>
            </form>

            <p class="zv-auth-switch">Remembered your password? <a href="login.php">Return to login</a>.</p>
        </section>
    </main>

    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>