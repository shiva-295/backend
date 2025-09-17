<?php
include "includes/config.php";

if (!isset($_GET['id'])) {
    die("User ID is required");
}

$id = $_GET['id'];

// Fetch user data
$sql = "SELECT * FROM user WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    die("User not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit User</h2>

<form action="controllers/update-user.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $user['username']?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Password (leave empty if unchanged)</label>
        <input type="password" name="password" value="<?php echo $user['password']?>" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($user['phone']); ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
