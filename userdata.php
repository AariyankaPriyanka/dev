<?php
    include("function.php");
    $username = $_POST["username"];
    $password = $_POST["password"];

    $id = insertUserData($username, $password);
   // echo "Id: $id, User Name: $usertname, Password: $password";

?> 