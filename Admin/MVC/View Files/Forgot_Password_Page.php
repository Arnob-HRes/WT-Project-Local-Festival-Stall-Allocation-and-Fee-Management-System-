<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../Stylesheets/Forgot_Password_Page.css"> 
    
</head>
<body>
    <img src="Images/LOGIN_PAGE_BACKGROUND.jpg" alt="BG" id="Background">

    <div class="login-card">
        <h2 class="card-title">Reset Password</h2>

        <?php if ($error): ?>
            <div class="msg error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="msg success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>

        <form method="post" id="forgotForm" novalidate>
            <input type="text" name="username" class="Input" placeholder="Username"
                   value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required>

            <input type="password" name="password" id="newPassword"
                   class="Input" placeholder="New Password" required>

            <input type="password" name="confirm_password" id="confirmPassword"
                   class="Input" placeholder="Confirm Password" required>

            <div class="requirements" id="pwReq">
                • At least 8 characters<br>
                • At least 1 uppercase, 1 lowercase, 1 number, 1 special (@$!%*?&).
            </div>

            <input type="submit" id="S1" value="Reset Password">
        </form>

        <p style="margin-top:15px; text-align:center;">
            Remembered? <a href="LOGIN_PAGE.php">Back to Login</a>
        </p>
    </div>

    <script src="JavaScript_Files/forgot_password.js"></script>
</body>
</html>