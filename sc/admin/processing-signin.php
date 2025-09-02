<?php
session_start();
require_once 'db-connection.php';

if (isset($_POST['btnLogin'])) {
    if (!$conn) {
        $_SESSION['error'] = "Database connection failed.";
        header("Location: login.php");
        exit();
    }

    $txtEmail = trim($_POST['txtEmail']);
    $txtPassword = trim($_POST['txtPassword']);

    if (!filter_var($txtEmail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: login.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM `tbl_users` WHERE col_email = ?");
    $stmt->bind_param("s", $txtEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($txtPassword, $row['col_password'])) {
            $_SESSION['user_id'] = $row['userId'];
            $_SESSION['usr_username'] = $row['col_fullname'];
            $_SESSION['usr_email'] = $row['col_email'];
            $_SESSION['usr_specialId'] = $row['specialId'];
            $_SESSION['loggedin'] = true;

            header("Location: ./dashboard");
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password.";
        }
    } else {
        $_SESSION['error'] = "Email not found.";
    }

    $stmt->close();
    $conn->close();

    header("Location: login.php");
    exit();
}
