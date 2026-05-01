<div style="
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
">

    <div style="
        width:350px;
        background:white;
        padding:30px;
        border-radius:6px;
        box-shadow:0 3px 10px rgba(0,0,0,0.1);
    ">

    <!-- TITLE -->
    <h1 style="
        text-align:center;
        color:#0d6b23;
        margin-bottom:10px;
    ">
        Review Film Database
    </h1>

    <h2 style="margin-bottom:5px; text-align:center;">
        Please sign in
    </h2>

    <p style="font-size:13px; color:#777; margin-bottom:20px; text-align:center;">
        Sign in with your email address and password.
    </p>

    <?php if (!empty($error)): ?>
        <p style="color:red; margin-bottom:10px; text-align:center;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="post">

        <label>Email</label><br>
        <input type="email" name="email" required
            style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:4px;"><br>

        <label>Password</label><br>
        <input type="password" name="password" required
            style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:4px;"><br>

        <input type="submit" value="Sign In"
            onmouseover="this.style.background='#a61d1d'"
            onmouseout="this.style.background='#c62828'"
            style="width:100%; padding:10px; background:#c62828; color:white; border:none; border-radius:4px; cursor:pointer;">

    </form>

    </div>

</div>