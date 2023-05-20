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
    <title>Add Product Page</title>
</style>
</head>
<body>
    <!-- buttons for Home Page and Login -->
    <div class="container">
        <div class="row w-50 m-auto">
            <div class="col py-4">
                <a href="./admin-page.php" class="btn btn-primary mb-4">Back</a>
            </div>
    </div>

    <!-- Add User form -->
    <h1 class="text-center py-4 my-1">Add Product</h1>
    <div class="w-50 m-auto">
    <form action="../function/product-crud.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="description">Product Description</label>
            <input class="form-control" type="text" name="description" id="description" placeholder="Enter product description" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="number" name="price" id="price" placeholder="Enter price" required>
        </div><br>
        <button class="btn btn-primary" type="submit" name="addProduct">Add</button><br><br>
    </form>
    </div>
</body>