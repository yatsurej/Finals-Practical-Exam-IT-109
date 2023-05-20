<?php
    session_start();

    include '../db-conn.php';

    $email = $_SESSION['email'];
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
        
    while($row = mysqli_fetch_assoc($result)){
		$ID         = $row['id'];
        $firstName  = $row['firstName'];
        $lastName   = $row['lastName'];

        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>User Page</title>
</style>
</head>
<body>
    <!-- buttons for Home Page and Logout -->
    <div class="container">
        <div class="row">
            <div class="col text-end py-4">
                <a href="../index.php" class="btn btn-primary mb-4">Home Page</a>
                <a href="../function/logout.php" class="btn btn-secondary mb-4">Logout</a>
            </div>
        </div>
    </div>

    <!-- User information -->
    <h1 class="text-center py-4 my-1">Hello, Customer <?php echo $firstName .' ' .$lastName?>!</h1>
    <h3 class="text-center py-4 my-1">Product List:</h3>
    <div class="w-50 m-auto">
        <table class="table table-hover text-center">
        <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $query="SELECT * FROM product";
            $result=mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_assoc($result)){
                $ID             = $row['ID'];
                $description    = $row['description'];
                $price          = $row['price'];
                ?>
                    <tr>
                        <td><?php echo $ID   ?></td>
                        <td><?php echo $description    ?></td>
                        <td><?php echo $price     ?></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="./checkout.php?id=<?php echo $ID ?>" role="button">Checkout</a>
                        </td>
                    </tr>
        <?php      
                }
        ?> 
        </tbody>
        </table>
    </div>
</body>
</html>