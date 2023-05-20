<?php
    include '../db-conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Sign Up Page</title>
</style>
</head>
<body>
    <!-- buttons for Home Page and Login -->
    <div class="container">
        <div class="row">
            <div class="col text-end py-4">
                <a href="../index.php" class="btn btn-primary mb-4">Home Page</a>
                <a href="./login-page.php" class="btn btn-secondary mb-4">Login</a>
            </div>
    </div>

    <!-- Sign Up form -->
    <h1 class="text-center py-4 my-1">Sign-Up</h1>
    <div class="w-50 m-auto">
    <form action="../function/sign-up.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Enter first name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter last name" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input class="form-control" type="date" name="birthday" id="birthday" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" id="address" placeholder="Enter address" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter password" required>
        </div>
        <div class="form-group">
            <label for="userType">User Type</label>
            <select class="form-control" type="text" name="userType" id="userType" placeholder="Choose user type" required>
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>
        </div><br>
        <button class="btn btn-primary">Sign Up</button><br><br>
    </form>
    </div>
</body>