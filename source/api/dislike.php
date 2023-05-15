<?php
    require_once("connect.php");
    if(isset($_POST['songID']))
    {   
        $songID = $_POST['songID'];
        $sql = "UPDATE song SET songLiked = songLiked - 1  WHERE songID = '$songID'";
        $result = mysqli_query($conn,$sql);
        if ($result){
            $sql1 ="DELETE FROM `liked` WHERE songID = '$songID'";
            mysqli_query($conn,$sql1);
        }
        else
            echo "An error message!";
    }
?>