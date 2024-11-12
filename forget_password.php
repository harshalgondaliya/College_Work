<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'student_portal');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Link to reset page with the email as a parameter
        $resetLink = "http://yourwebsite.com/reset_password.php?email=$email";
        
        // Email details
        $subject = "Password Reset Request";
        $message = "Click the link below to reset your password:\n$resetLink";
        mail($email, $subject, $message);  // Assumes mail() function is configured

        $success = "A password reset link has been sent to your email.";
    } else {
        $error = "No account found with that email.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form action="" method="post">
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required><br>
            <button type="submit">Send Reset Link</button>
        </form>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
        <p><a href="login.php">Back to Login</a></p>
    </div>
</body>
</html>
