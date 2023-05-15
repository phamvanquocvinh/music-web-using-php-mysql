<?php
    session_start();
    $username = $_SESSION['username'];
    require_once("connect.php");
    if(isset($_POST['songID']))
    {   
        $songID = $_POST['songID'];
        $sql = "UPDATE song SET songLiked = songLiked + 1  WHERE songID = '$songID'";
        $result = mysqli_query($conn,$sql);
        if ($result){
            $sql1 ="INSERT INTO `liked`(`userName`,`songID`) VALUES ('$username','$songID')";
            mysqli_query($conn,$sql1);
        }
        else
            echo "An error message!";
    }
?>