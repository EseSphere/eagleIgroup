<?php
include_once('db_connect.php');

// Collect and sanitize form data
$full_name = $conn->real_escape_string($_POST['full_name']);
$email     = $conn->real_escape_string($_POST['email']);
$phone     = $conn->real_escape_string($_POST['phone']);
$position  = $conn->real_escape_string($_POST['position']);
$siaNumber = $conn->real_escape_string($_POST['siaNumber']);

// Handle file upload
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}
$cv_name = basename($_FILES['cv']['name']);
$cv_tmp  = $_FILES['cv']['tmp_name'];
$cv_path = $upload_dir . time() . '_' . $cv_name;

if (move_uploaded_file($cv_tmp, $cv_path)) {
    // Insert data into DB
    $stmt = $conn->prepare("INSERT INTO security_job_app (full_name, email, phone, position, sia_number, cv_file) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $email, $phone, $position, $siaNumber, $cv_path);

    if ($stmt->execute()) {
        header("Location: ./thank-you");
        exit();
    } else {
        echo "Database insert error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Failed to upload CV.";
}

$conn->close();
