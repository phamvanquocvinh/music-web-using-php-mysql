<?php
    session_start();
    require_once("connect.php");
    $cmt = $_POST['cmt'];
    $songid = $_GET['s'];
    $o = $_SESSION['ooo'];
    $playlistid = $_SESSION['playlistID'];
    $songname = $_SESSION['songName'];
    $username = $_SESSION['username'];
    $sql = "INSERT INTO `comment`(`userName`, `songID`, `commentDetail`) VALUES ('$username','$songid','$cmt')";
    if($result= mysqli_query($conn, $sql)){
        header("Location: ../playlistPlayer.php?s=$songname&p=$playlistid&o=$o");
    }
    


?>