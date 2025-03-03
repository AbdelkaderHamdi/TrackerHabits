<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GainHabits | Login</title>
    <link rel="stylesheet" href="../assets/style/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-leaf"></i>
        </div>
        <h2>Welcome Back!</h2>
        <p>Enter your credentials to continue your journey</p>
        <form action="../dashboard/dashboard.php" method="POST">
            <div class="form-group">
                <label for="email-input">Email address</label>
                <input type="email" name="email" id="email-input" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label for="password-input">Password</label>
                <input type="password" name="password" id="password-input" placeholder="Enter your password" required>
            </div>
            <button type="submit">Sign In</button>
        </form>
        <p class="auth-link">Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>
</body>
</html>