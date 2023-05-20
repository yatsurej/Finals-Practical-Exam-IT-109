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
    <title>Login Page</title>
</head>
<body>
    <!-- buttons for Home Page and Sign Up -->
    <div class="container">
        <div class="row">
            <div class="col text-end py-4">
                <a href="../index.php" class="btn btn-primary mb-4">Home Page</a>
                <a href="./sign-up-page.php" class="btn btn-secondary mb-4">Sign Up</a>
            </div>
    </div>

    <!-- Login form -->
    <h1 class="text-center py-4 my-1">Login</h1>
    <div class="w-50 m-auto">
    <form action="../function/login.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Enter registered email" Required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter registered password" Required>
        </div><br>
        <button class="btn btn-primary">Login</button><br><br>
    </form>
    </div>
</body>