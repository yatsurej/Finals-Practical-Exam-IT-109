<?php
    require '../db-conn.php';
    if (!class_exists('Product')){
        class Product {
            // add product
            public function adminAddProduct($description, $price){
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "INSERT INTO product(description, price)
                            VALUES ('$description', '$price')";
                $result = mysqli_query($db, $query);
                if (($result)) {
                     echo "Product Added";
                    return $db;
                } else {
                    echo $db->error;
                }
            }
            
            // update product
            public function adminUpdateProduct($ID, $description, $price){
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "UPDATE product SET description = '$description', price = '$price' WHERE ID = $ID";
                $result = mysqli_query($db, $query);

                if ($result){
                    echo "Product Updated";
                    return $db;
                } else {
                    echo $db->error;
                }
            }
            
            // delete product
            public function adminDeleteProduct($ID){
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "DELETE FROM product WHERE ID = '$ID'";
                $result = mysqli_query($db, $query);

                if ($result) {
                    echo "Product Deleted";
                    return $db;
                } else {
                    echo $db->error;
                }
            }
        }
    }
?>