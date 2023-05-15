<?php
    require_once("../connect.php");
    if(isset($_POST['adduserBtn'])){
        if(($_POST['userName0'] != "") && ($_POST['userFullName0'] != "") && ($_POST['userPassword0'] != "") && ($_POST['userEmail0'] != "")){
            $userName0 = $_POST['userName0'];
            $userFullName0 = $_POST['userFullName0'];
            $userPassword0 = $_POST['userPassword0'];
            $userEmail0 = $_POST['userEmail0'];
            $type = $_POST['type'];
    
            $sql = "INSERT INTO `user`(
                `userName`,
                `userFullName`,
                `userPassword`,
                `userEmail`,
                `userImg`,
                `userType`
            )
            VALUES(
                '$userName0',
                '$userFullName0',
                '$userPassword0',
                '$userEmail0',
                './img/default.png ',
                '$type' 
            )";
            if(mysqli_query($conn, $sql)){
                echo "Thành công";
            }
        }
        else{
            echo "Hãy nhập đầy đủ thông tin";
        }
        header("Location: ../../adminloading.php");
    }
?>