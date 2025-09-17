<?php
include "../includes/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM user WHERE id=:id";
    $stmt = $conn->prepare($delete);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    header("Location: ../index.php");
}

?>