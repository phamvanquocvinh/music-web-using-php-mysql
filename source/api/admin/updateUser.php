<?php
    require_once("../connect.php");
    $userName1 = $_POST['userName1'];
    $userName2 = $_POST['userName2'];
    $userFullName1 = $_POST['userFullName1'];
    $userPassword1 = $_POST['userPassword1'];
    $userEmail1 = $_POST['userEmail1'];
    $userType1 = $_POST['userType1'];

    $sql = "UPDATE
        `user`
    SET
        `userName` = '$userName1',
        `userFullName` = '$userFullName1',
        `userPassword` = '$userPassword1',
        `userEmail` = '$userEmail1',
        `userType` = '$userType1'
    WHERE
        `userName` = '$userName2'";
    if(mysqli_query($conn, $sql)){
        header("Location: ../../admin.php");
    }
    
?>