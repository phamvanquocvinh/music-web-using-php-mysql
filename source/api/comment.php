<?php
//Bình luận (đã đăng nhập)
    session_start();
    require_once("connect.php");
    $rand = rand(10,10000);
    $cmtID = "cmt".$rand;
    $cmt = $_POST['cmt'];
    $songid = $_GET['s'];
    $songname = $_SESSION['songName'];
    $username = $_SESSION['username'];
    $sql = "INSERT INTO `comment`(`cmtID`, `userName`, `songID`, `commentDetail`) VALUES ('$cmtID', '$username','$songid','$cmt')";
    if($result= mysqli_query($conn, $sql)){
        header("Location: ../player.php?s=$songname");
    }
    


?>