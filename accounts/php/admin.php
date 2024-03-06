<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header('location:../login.html');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Đăng Nhập
    </title>
    
    <!--icon link-->
    <link rel="shortcut icon" href="../../assets/icon.ico">

    <!--css link-->
    <link rel="stylesheet" href="../css/login-style.css">
    
    <!--remixicons link-->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

    <!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
</head>

<body>

    <header class="header">
        <a href="../index.html" class="logo">
            Xlib
            <span class="tagline">
                Code By LeeMjnnkDzuy x NhàVănHóa2VN
            </span>
        </a>
    </header>

    
    <script>
    </script>
</body>    
</html>