<?php
include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $uploadDir = "../uploads/blogs/";
    $fileTempPath = $_FILES['image']['tmp_name'];
    $fileName = uniqid() . "_" . basename($_FILES['image']['name']);
    $destPath = $uploadDir . $fileName;
    if (move_uploaded_file($fileTempPath, $destPath)) {
        $imageName = $fileName;
    }

    $sql = "INSERT INTO blogs (user_id,image,title,description)VALUES (:user_id,:image,:title,:description)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":image", $imageName);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
    header("Location: ../my-blogs.php");
}
