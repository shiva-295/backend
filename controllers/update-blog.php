<?php
include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $uploadDir = "../uploads/blogs/";
    $fileTempPath = $_FILES['image']['tmp_name'];
    $fileName = uniqid() . "_" . basename($_FILES['image']['name']);
    $destPath = $uploadDir . $fileName;
    if (move_uploaded_file($fileTempPath, $destPath)) {
        $imageName = $fileName;
    }

    $sql = "UPDATE blogs 
                SET title = :title, description = :description, image = :image WHERE id = :id";
    $stmt = $conn->prepare($sql);




    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $imageName);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // Redirect back to user list
    header("Location: ../my-blogs.php");
    exit;
} else {
    header("Location: ../my-blogs.php?error=invalid-request");
    exit;
}
