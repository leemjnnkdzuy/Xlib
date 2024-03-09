<?php
include "connect.php";

if (isset($_SESSION['user_id'])) {
    header("Location: ../login.html");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? true : false;

if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {

        // Admin login
        $hashedAdminPassword = password_hash("admin", PASSWORD_DEFAULT);
        if ($email == "admin@admin.com" && password_verify($password, $hashedAdminPassword)) {
            $_SESSION['email'] = $email;

            if ($remember == true) {
                $_SESSION['mySESSION'] = '$email';
            }
            header('location: admin.php');
            exit();
        } else {
            // User login
            $query = "SELECT * FROM account WHERE email = '$email' and password = '$password'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {

                if ($remember == true) {
                    $_SESSION['mySESSION'] = '$email';
                }

                header('Location: ../../pages/posts.php');
                exit();
            } else {
                $_SESSION['error_message'] = 'Email hoặc mật khẩu không đúng';
                header('Location: ../login.html');
                exit();
            }
        }
    } else {
    header('location:../login.html');
    exit();
    }
}
?>