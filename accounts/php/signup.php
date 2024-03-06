<?php

    include "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = "";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    else{
        header('location:../../err.html');
    }


    $sql = "INSERT INTO account(id, name, email, password)
    VALUES('$id', '$name', '$email', '$password')";

    mysqli_query($conn, $sql);

     'Tạo tào khoản thành công';
?>