<header class="login-header">
    <h1>Internet Review Film Database</h1>
</header>

<div class="login-wrapper">

    <div class="login-box">

        <h2>Please sign in</h2>
        <p class="sub-text">Sign in with your email address and password.</p>

        <?php if (!empty($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="post">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <input type="submit" value="Sign In">

        </form>

        <p class="signup-text">
            Need an account? <a href="register.php">Create one now</a>
        </p>

    </div>

</div>