<?php
    session_start();

    $server = 'localhost';
    $user = 'root';
    $password_sever = '';
    $database = 'Xlib';

    $conn = new mysqli($server, $user, $password_sever, $database);

    if ($conn) {
        mysqli_query($conn, "SET NAMES 'utf8' ");
    }
    else{
        header('location:../../err.html');
    }
?>