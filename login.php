<?php
$pageKey = 'login';
$pageTitle = 'Login | Zovita';
$pageDescription = 'Login to your Zovita account to access order tracking, saved addresses, wishlist, and secure checkout history.';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Login']
];
require __DIR__ . '/includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>

<body class="zv-shell" data-page="login" data-auth-page>
    <main class="zv-auth-center-shell">
        <section class="zv-auth-form-card zv-reveal">
            <div class="zv-auth-form-head">
                <a href="index.php" class="zv-auth-back-link">Back to store</a>
                <span class="zv-chip">Secure sign in</span>
                <h1 class="text-3xl font-bold">Login to Zovita</h1>
                <p class="text-sm text-slate-600">Sign in to manage your orders, wishlist, and checkout details.</p>
            </div>

            <form data-cooldown-form class="mt-5 space-y-4" method="post" action="#">
                <div>
                    <label class="zv-label" for="login-email">Email address</label>
                    <input id="login-email" name="email" type="email" class="zv-input" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div>
                    <label class="zv-label" for="login-password">Password</label>
                    <div class="zv-password-wrap">
                        <input id="login-password" name="password" type="password" class="zv-input pr-20" autocomplete="current-password" placeholder="Enter your password" required>
                        <button type="button" class="zv-password-toggle" data-password-toggle data-target="login-password" aria-label="Toggle password visibility">
                            <span data-toggle-text>Show</span>
                        </button>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
                    <label class="inline-flex items-center gap-2 text-slate-600">
                        <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-navy-700 focus:ring-navy-700">
                        Keep me signed in
                    </label>
                    <a href="forgot-password.php" class="font-semibold text-navy-800 hover:text-navy-900">Forgot password?</a>
                </div>

                <button type="submit" class="zv-btn-primary w-full" data-default-label="Sign in securely">Sign in securely</button>
                <p data-form-message class="zv-cooldown-message"></p>
            </form>

            <p class="zv-auth-switch">Do not have an account? <a href="signup.php">Create one now</a>.</p>
        </section>
    </main>

    <?php require __DIR__ . '/includes/scripts.php'; ?>
</body>

</html>