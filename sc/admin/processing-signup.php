<?php
require_once 'db-connection.php';
if (isset($_POST['btnSignup'])) {
    $user_name = mysqli_real_escape_string($conn, trim($_POST['txtFullName']));
    $user_txtEmail = mysqli_real_escape_string($conn, trim($_POST['txtEmail']));
    $user_txtPassword = mysqli_real_escape_string($conn, trim($_POST['txtPassword']));

    function generateSpecialId($length = 8)
    {
        return strtoupper(bin2hex(random_bytes($length / 2)));
    }

    $baseId = generateSpecialId();
    $randomNumber = rand(100000, 999999);

    function generateFormattedId()
    {
        $prefix = 'SSvT43';
        $randomChars = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 3);
        $randomNum = rand(100, 999);
        return $prefix . '-' . $randomChars . $randomNum . '-' . uniqid();
    }

    $id = generateFormattedId();
    $specialId = $id . '-' . $baseId;

    $sql_select = "SELECT * FROM `tbl_users` WHERE col_email = '$user_txtEmail'";
    $result = mysqli_query($conn, $sql_select);
    $sql_check = mysqli_num_rows($result);
    if ($sql_check != 0) {
        echo "
        <script type='text/javascript'>
            $(document).ready(function() {
                $('#popupAlert').show();
            });
        </script>";
    } else {
        $hashed_txtPassword = Password_hash($user_txtPassword, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO `tbl_users` (`col_fullname`, `col_email`, `col_password`, `specialId`) 
        VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $user_name, $user_txtEmail, $hashed_txtPassword, $specialId);
        if ($stmt->execute()) {
            header("Location: ./index");
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
