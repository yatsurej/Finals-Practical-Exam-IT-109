<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    require '../class/class_user.php';

    $classUser = new User();
    $result = $classUser->userSignUp($firstName, $lastName, $birthday, $address, $email, $password, $userType);
    
    if($result){
        header("location: ../pages/login-page.php");
    }
?>