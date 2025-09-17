<?php
include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // If password field is filled → update password
    if (!empty($_POST["password"])) {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $sql = "UPDATE user
                SET username = :username, email = :email, password = :password, phone = :phone 
                WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":password", $password);
    } else {
        // If password left empty → don’t overwrite
        $sql = "UPDATE user1 
                SET username = :username, email = :email, phone = :phone 
                WHERE id = :id";
        $stmt = $conn->prepare($sql);
    }

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // Redirect back to user list
    header("Location: ../index.php");
    exit;
} else {
    header("Location: ../index.php");
    exit;
}
