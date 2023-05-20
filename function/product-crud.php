<?php
    require '../class/class_product.php';

    $classProduct = new Product();

    if (isset($_POST['addProduct'])) {
        $description    = $_POST['description'];
        $price          = $_POST['price'];

        $result = $classProduct->adminAddProduct($description, $price);

        if($result) {
            header("location: ../pages/admin-page.php");
            exit;
        } else {
            echo "Error";
        }
    } elseif (isset($_GET['action']) && $_GET['action'] === 'deleteProduct' && isset($_GET['id']))  {
        $ID     = $_GET['id'];
        $result = $classProduct->adminDeleteProduct($ID);

        if($result){
            header("location: ../pages/admin-page.php");
        }
    } elseif (isset($_POST['updateProduct'])) {
        $ID             = $_POST['id'];
        $description    = $_POST['description'];
        $price          = $_POST['price'];
        
        $result = $classProduct->adminUpdateProduct($ID, $description, $price);

        if($result){
            header("location: ../pages/admin-page.php");
        }
        else{
            echo "Error";
        }
    }
?>
