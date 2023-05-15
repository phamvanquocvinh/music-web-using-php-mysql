<?php
    require_once("../connect.php");
    $userName = $_GET['s'];
    $sql = "DELETE FROM user WHERE userName = '$userName'";
    if(mysqli_query($conn, $sql)){
        header('Location: ../../admin.php');
    }else{
        echo $userName;
    }
?>