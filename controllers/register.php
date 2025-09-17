<?php

include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    if (isset($_FILES['avatar'])) {
        //For upload profile
        $uploadDir = "../uploads/";
        $fileTmpPath = $_FILES['avatar']['tmp_name'];
        $fileName = uniqid() . "_" . basename($_FILES['avatar']['name']);
        $destPath = $uploadDir . $fileName; #../uploads/abc.jpg

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $avatarName = $fileName;
        }
        // Check if email already exists
        $check = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $check->bindParam(":email", $email);
        $check->execute();
        if ($check->rowCount() > 0) {
            echo "Email Already exists!";
        } else {
            $sql = "INSERT INTO user(username,email,password,phone,avatar) VALUES (:username,:email,:password,:phone,:avatar)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':avatar', $avatarName);
            $stmt->execute();
            header("Location: ../index.php");
        }
    } else {

        // Check if email already exists
        $check = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $check->bindParam(":email", $email);
        $check->execute();
        if ($check->rowCount() > 0) {
            echo "Email Already exists!";
        }else{
            $sql = "INSERT INTO user(username,email,password,phone) VALUES (:username,:email,:password,:phone)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
            header("Location: ../index.php");
        }
    }




    
}
