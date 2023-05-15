<?php
//Đăng ký gói tài khoản Premium
    require_once("connect.php");
    session_start();
    $username = $_SESSION["username"];
    $sql = "UPDATE
    `user`
    SET
        `userType` = 'premium'
    WHERE
    `userName` = '$username'";
    if(mysqli_query($conn, $sql)){
        header("Location: ../premium.php");
    }
?>