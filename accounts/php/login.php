<?php
include "connect.php";

if (isset($_SESSION['user_id'])) {
    header("Location: ../login.html");
    exit();
}

if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']) ? true : false;

        // Admin login
        $hashedAdminPassword = password_hash("admin", PASSWORD_DEFAULT);
        if ($email == "admin@admin.com" && password_verify($password, $hashedAdminPassword)) {
            $_SESSION['email'] = $email;

            if ($remember) {
                
            }

            header('location: admin.php');
            exit();
        } else {
            // User login
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "SELECT * FROM account WHERE email = '$email'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $row = mysqli_fetch_assoc($result);

                if ($row && password_verify($password, $row['password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $email;
                    header('Location: ../../pages/posts.html');
                    exit();
                } else {
                    $_SESSION['error_message'] = 'Email hoặc mật khẩu không đúng';
                    header('Location: ../login.html');
                    exit();
                }
            } else {
                $_SESSION['error_message'] = 'Lỗi cơ sở dữ liệu';
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