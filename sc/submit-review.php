<?php
// Database configuration
require_once 'db_connect.php';

// Validate POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $rating = (int)$_POST['rating'];
    $review = trim($_POST['review']);

    // Basic validation
    if (empty($name) || empty($email) || empty($rating) || empty($review)) {
        die("Please fill in all required fields.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, review) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $rating, $review);

    if ($stmt->execute()) {
        header("Location: review-submitted");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
