<?php
    require_once("../connect.php");
    $songID = $_GET['s'];

    $sql = "DELETE FROM song WHERE songID = '$songID'";
    if(mysqli_query($conn, $sql)){
        header('Location: ../../admin.php');
    }
?>