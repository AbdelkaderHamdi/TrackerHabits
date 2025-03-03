<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GainHabits | Register</title>
    <link rel="stylesheet" href="../assets/style/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-leaf"></i>
        </div>
        <h2>Create Account</h2>
        <p>Join us to start building better habits</p>
        <form action="../dashboard/profile.php" method="POST">
            <div class="form-group">
                <label for="email-input">Email address</label>
                <input type="email" name="email" id="email-input" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label for="password-input">Password</label>
                <input type="password" name="password" id="password-input" placeholder="Choose a strong password" required>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <p class="auth-link">Already have an account? <a href="login.php">Sign In</a></p>
    </div>
</body>
</html>