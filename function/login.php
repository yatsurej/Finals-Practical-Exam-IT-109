<?php
    session_start();
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        require '../class/class_user.php';
    
        $classUser = new User();
        $resultUser = $classUser->userLogin($email, $password);
    
        if ($resultUser) {
            $_SESSION['email'] = $email;

            if ($resultUser == 'admin') {
                header("Location: ../pages/admin-page.php");
                exit();
            } elseif ($resultUser == 'customer') {
                header("Location: ../pages/customer-page.php");
                exit();
            }
        } else {
            echo "<script>alert('Invalid login details');window.location.href='../pages/login-page.php';</script>";
        }
    }
    
?>
