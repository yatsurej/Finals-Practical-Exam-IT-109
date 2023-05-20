<?php
    include '../db-conn.php';
    $ID = $_GET['id'];
    $query = "SELECT * FROM product WHERE ID = '$ID'";
    $result = mysqli_query($conn, $query);

    $product = mysqli_fetch_assoc($result);

    $productID = $product['ID'];
    $description = $product['description'];
    $price = $product['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Checkout</title>
</head>
<body>
    <div class="container">
        <div class="row w-50 m-auto">
            <div class="col py-4">
                <a href="./customer-page.php" class="btn btn-primary mb-4">Back</a>
            </div>
    </div>
    <div class="w-50 m-auto">
        <h1>Checkout</h1>
        <form action="../pay.php" method="post">
            <div class="form-group">
                <label for="productID">Product ID:</label>
                <input class="form-control" type="text" id="productID" value="<?php echo $productID; ?>" readonly>
                <input type="hidden" name="price" value="<?php echo $price; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input class="form-control" type="text" id="description" value="<?php echo $description; ?>" readonly>
                <input type="hidden" name="description" value="<?php echo $description; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input class="form-control" type="text" id="price" value="<?php echo $price; ?>" readonly>
            </div><br>
            <div class="form-group">
                <label for="confirmCheckout">Proceed with checkout?</label><br>
                <input type="checkbox" id="confirmCheckout" name="confirmCheckout" required>
                <label for="confirmCheckout">Yes, I confirm</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>
    </div>
</body>
</html>
