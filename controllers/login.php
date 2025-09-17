<?php
session_start();
include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email LIMIT 1");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        if ($user['role'] == 'admin') {
            // login success
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];  
            header("Location: ../admin/");
        } else {
            // login success
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['Email'] = $user['email'];
            header("Location: ../dashboard.php");
        }
        
    } else {
        $error = "Invalid email or password.";
        echo $error;
    }
}
