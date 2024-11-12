<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Portal</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function navigateTo(url) {
            window.location.href = url;
        }
    </script>
</head>

<body>
    <div class="container">
        <h1 class="label">Welcome to the Student Portal</h1>
        <p>Choose an option below:</p>
        <div class="button-container">
            <button onclick="navigateTo('registration.php')" class="btn">Student Registration</button><br><br>
            <button onclick="navigateTo('upload_documents.php')" class="btn">Upload Documents</button><br><br>
            <button onclick="navigateTo('edit_profile.php')" class="btn">Edit Your Current Profile</button><br><br>
            <button onclick="navigateTo('index.php')" class="btn">Main form</button>
        </div>
    </div>
</body>

</html>
