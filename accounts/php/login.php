<?php
    session_start();

    if (isset($_POST['login'])) {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $remember = isset($_POST['remember']) ? true : false;


            $hashedPassword = password_hash("admin", PASSWORD_DEFAULT); 
            if ($email == "admin@admin.com" && password_verify($password, $hashedPassword)) {
                $_SESSION['email'] = $email;


                if ($remember) {
                    
                }

                header('location:admin.php');
                exit();
            } else {
                echo "Sai tài khoản hoặc mật khẩu";
                header('location:../login.html');
                exit();
            }
        }
    }
?>
