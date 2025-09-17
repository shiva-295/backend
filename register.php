<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <h2>Register form!</h2>
            <a href="show-user-data.php" class="btn btn-success">Show Data</a>
        </div>
        <form method="post" action="controllers/register.php">
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Profile</label>
                <input type="file" class="form-control" id="avatar"  name="avatar">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>