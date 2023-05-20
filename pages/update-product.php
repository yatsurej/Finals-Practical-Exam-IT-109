<?php
    include '../db-conn.php';

    $ID     = $_GET['id'];
    $query  = "SELECT * FROM product WHERE ID = $ID";

    $result = mysqli_query($conn, $query);

    if($result){   
        $row            = mysqli_fetch_assoc($result);
        $description    = $row['description'];
        $price          = $row['price'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Edit Product Page</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center py-4 my-1">Edit Product</h1>
        <div class="w-50 m-auto">
            <form action="../function/product-crud.php" method="post" autocomplete="off">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="<?php echo $ID ?>">
                    <label for="description">Description</label>
                    <input class="form-control" type="text" name="description" id="description" value="<?php echo $description ?>" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="text" name="price" id="price" value="<?php echo $price ?>" required>
                </div><br>
                <button class="btn btn-primary" type="submit" name="updateProduct">Update</button>
            </form>
        </div>
    </div>
</body>
</html>