<?php
    session_start();
    include '../db-conn.php';

    $email = $_SESSION['email'];
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result=mysqli_query($conn, $query);
        
    while($row = mysqli_fetch_assoc($result)){
		$ID         = $row['id'];
        $firstName  = $row['firstName'];
        $lastName   = $row['lastName'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-end py-4">
                <a href="../index.php" class="btn btn-primary mb-4">Home Page</a>
                <a href="../function/logout.php" class="btn btn-secondary mb-4">Logout</a>
            </div>
    </div>
    <!-- change to products -->
    <h1 class="text-center py-4 my-1">Hello, Admin <?php echo $firstName .' ' .$lastName?>!</h1>
    <div class="lists w-75 m-auto">
        <h1 class="text-center">Products</h1> 
    <div id="lists">
    <div class="container text-end">
            <a href="./add-product.php" class="btn btn-success mb-4 mx-5">Add</a>
    </div>
    <table class="table table-hover text-center">
	<thead>
    <tr>
    	<th scope="col">Product ID</th>
    	<th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
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
                        <a class="btn btn-success btn-sm" href="./update-product.php?id=<?php echo $ID ?>" role="button">Edit</a>
                        <a class="btn btn-danger btn-sm" href="../function/product-crud.php?action=deleteProduct&id=<?php echo $ID ?>" role="button">Delete</a>
                    </td>    
                </tr>
    <?php      
            }
    ?> 
	</tbody>
	</table>
</body>
</html>