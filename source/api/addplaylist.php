<?php
    session_start();
    $username = $_SESSION['username'];
    $songID = $_SESSION['songID'];
    require_once("connect.php");
    if(isset($_POST['playlistName']) && isset($_POST['playlistID']))
    {     
        $playlistID = $_POST['playlistID'];
        $playlistName = $_POST['playlistName'];
        $sql = "INSERT INTO `playlist`(`playlistName`,`playlistID`,`userName`) VALUES ('$playlistName','$playlistID','$username')";
        $sql1 = "INSERT INTO `playlist_song`(`playlistID`, `songID`) VALUES ('$playlistID','$songID')";
        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn, $sql1);
        if ($result){
            echo 'Successful!';
        }
        else
            echo "An error message!";
    }
?>