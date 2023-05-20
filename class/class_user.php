<?php
    require '../db-conn.php';
    if (!class_exists('User')){
        class User {
            // sign up function
            public function userSignUp($firstName, $lastName, $birthday, $address, $email, $password, $userType){
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "SELECT * FROM user WHERE email = '$email'";
                $result = mysqli_query($db, $query);

                if (mysqli_num_rows($result) > 0) { // checks if email is taken
                    echo "<script>alert('email is already taken');window.location.href='../pages/sign-up-page.php';</script>";
                } else {
                    $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                    $query = "INSERT INTO user(firstName, lastName, birthday, address, email, password, userType) 
                    VALUES ('$firstName', '$lastName', '$birthday', '$address', '$email', '$password', '$userType')";
                    if ($db->query($query)) {
                        echo "Sign Up Successful";
                        return $db;
                    } else {
                        echo $db->error;
                    }
                }
            }
            
            // login function
            public function userLogin($email, $password) {
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                $result = mysqli_query($db, $query);
            
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $userType = $row['userType'];
                    return $userType;
                } else {
                    echo "<script>alert('Invalid login details');window.location.href='../pages/login-page.php';</script>";
                }
            }                  
        }
    }
?>