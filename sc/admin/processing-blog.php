<?php
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $conn->real_escape_string($_POST['txtTitle']);
    $blogerName = $_POST['blogerName'];

    function generateSpecialId($length = 8)
    {
        return strtoupper(bin2hex(random_bytes($length / 2)));
    }

    $baseId = generateSpecialId();
    $randomNumber = rand(100000, 999999);

    function generateFormattedId()
    {
        $prefix = 'Art';
        $randomChars = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 3);
        $randomNum = rand(100, 999);
        return $prefix . '-' . $randomChars . $randomNum . '-' . uniqid();
    }

    $id = generateFormattedId();
    $xu874Iu = $id . '-' . $baseId;


    $specialId = $_POST['specialId'];
    $article = $conn->real_escape_string($_POST['txtArticle']);

    $target_dir = "uploads/";
    $file_name = basename($_FILES["fileImage"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileImage"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    if (move_uploaded_file($_FILES["fileImage"]["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO articles (title, bloger, xu874Iu, specialId, article, image_path) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $title, $blogerName, $xu874Iu, $specialId, $article, $target_file);

        if ($stmt->execute()) {
            header("Location: ./blog");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        header("Location: ./blog");
        exit();
    }
}

$conn->close();
