<?php
session_start(); // Start a session to manage user sessions

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Simulated authentication (replace with actual logic)
    if ($username === "admin" && $password === "password") {
        $_SESSION['username'] = $username; // Set session variable
        header("Location: welcome.php"); // Redirect to a welcome page
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Login</title>
    <link rel="stylesheet" href="body.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>

            <div class="form-group">
                <p>Don't have an account? <a href="signup.html">Sign up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
