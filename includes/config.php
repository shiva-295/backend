

<?php

$host = 'localhost';    
$db   = 'eco_shop';  
$user = 'root';  
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
