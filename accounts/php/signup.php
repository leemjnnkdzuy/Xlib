<?php

    include "connect.php";

    $id = "";
    $name = "name";
    $email = "email";
    $password = "password";

    $sql = "INSERT TO account(id, name, email, password)
    VALUE('$id', '$name', '$email', '$password')";
?>