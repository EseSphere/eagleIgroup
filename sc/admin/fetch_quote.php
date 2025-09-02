<?php include 'db_connect.php';

// Handle Delete
if (isset($_GET['delete'])) {
    $userId = $_GET['delete'];
    $conn->query("DELETE FROM quote WHERE userId = $userId");
    header("Location: index.php");
    exit();
}

// Handle Update
if (isset($_POST['update'])) {
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $message = $_POST['message'];

    $conn->query("UPDATE quote SET name='$name', email='$email', phone='$phone', services='$services', message='$message' WHERE userId=$userId");
    header("Location: index.php");
    exit();
}

// Fetch for editing
$editQuote = null;
if (isset($_GET['edit'])) {
    $userId = $_GET['edit'];
    $result = $conn->query("SELECT * FROM quote WHERE userId = $userId");
    $editQuote = $result->fetch_assoc();
}
