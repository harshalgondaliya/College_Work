<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'student_portal');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_GET['email'] ?? '';

if ($email) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
            
            if ($conn->query($sql) === TRUE) {
                $success = "Your password has been reset. <a href='login.php'>Login here</a>";
            } else {
                $error = "An error occurred. Please try again.";
            }
        }
    } else {
        $error = "Invalid email address.";
    }
} else {
    $error = "No email provided.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

        <?php if (!isset($success) && !isset($error)) : ?>
        <form action="" method="post">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Reset Password</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
