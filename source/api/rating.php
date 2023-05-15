<?php
    session_start();
    $username = $_SESSION['username'];
    $songID = $_SESSION['songID'];
    require_once("connect.php");
    if(isset($_POST['rating']))
    {   
        $rating = $_POST['rating'];
        $sql = "SELECT * FROM rating where songID = '$songID' AND userName = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $sql1 = "UPDATE `rating` SET `ratingStar` = $rating WHERE songID = '$songID' AND userName ='$username'";
            $result1 = mysqli_query($conn,$sql1);
        }
        else{
            echo "b";
            $sql2 = "INSERT INTO `rating`(`userName`,`songID`,`ratingStar`) VALUES ('$username','$songID','$rating')";
            $result2 = mysqli_query($conn,$sql2);
        }
    }
?>