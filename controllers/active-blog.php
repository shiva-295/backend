
<?php
include "../includes/config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = 1;
    $delete = "UPDATE blogs SET status=:status WHERE id=:id";
    $stmt = $conn->prepare($delete);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('location: ../admin/active-blogs.php');
}