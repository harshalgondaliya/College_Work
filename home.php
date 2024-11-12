<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to Student Portal</h1>
        <p>Your registration and document upload was successful.</p>
        <a href="edit_profile.php">Edit your profile</a><br>
        <a href="upload_documents.php">Upload Documents</a><br>
        <a href="logout.php">Logout</a> <!-- Add logout functionality -->
    </div>
</body>

</html>
