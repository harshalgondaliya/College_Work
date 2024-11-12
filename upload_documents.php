<?php
// Include the database configuration file
include('config.php');

// Initialize an empty error message
$error_message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file is uploaded
    if (isset($_FILES['documents']) && $_FILES['documents']['error'] == 0) {
        // Get file details
        $file_name = $_FILES['documents']['name'];
        $file_tmp = $_FILES['documents']['tmp_name'];
        $file_size = $_FILES['documents']['size'];
        $file_error = $_FILES['documents']['error'];
        
        // Set the upload directory
        $upload_dir = 'uploads/';
        $file_path = $upload_dir . basename($file_name);

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($file_tmp, $file_path)) {
            // Insert file details into the database
            $user_id = 1; // Replace this with the logged-in user ID from your session
            $insert_query = "INSERT INTO documents (user_id, file_name, file_path) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("iss", $user_id, $file_name, $file_path);
            
            if ($stmt->execute()) {
                // Success: File uploaded and information saved
                $success_message = "File uploaded and saved successfully.";
            } else {
                // Error during query execution
                $error_message = "Error saving file information to the database.";
            }
            
            $stmt->close();
        } else {
            $error_message = "Error moving the uploaded file.";
        }
    } else {
        $error_message = "No file uploaded or there was an error uploading the file.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Documents</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1 class="label">Upload Documents</h1>

        <?php
        // Display success or error message after form submission
        if (!empty($success_message)) {
            echo "<p class='success'>$success_message</p>";
        }
        if (!empty($error_message)) {
            echo "<p class='error'>$error_message</p>";
        }
        ?>

        <form class="edit_form" action="upload_documents.php" method="post" enctype="multipart/form-data">
            <div class="font">Choose files to upload</div>
            <div class="file-input-container">
                <label for="file-upload" class="file-input-label">Choose files</label>
                <input type="file" id="file-upload" name="documents" multiple required>
                <span id="file-name-display">No file chosen</span>
            </div>

            <div id="upload_error" class="error"></div>

            <button type="submit">Upload</button>
        </form>
    </div>

    <script>
        document.getElementById('file-upload').addEventListener('change', function(event) {
            const fileInput = event.target;
            const fileNameDisplay = document.getElementById('file-name-display');
            if (fileInput.files.length > 0) {
                fileNameDisplay.textContent = Array.from(fileInput.files).map(file => file.name).join(', ');
            } else {
                fileNameDisplay.textContent = 'No file chosen';
            }
        });
    </script>
</body>

</html>
