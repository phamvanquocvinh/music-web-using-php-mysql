<?php
    session_start();
    $username = $_SESSION['username'];
    require_once("connect.php");
    if(isset($_POST['playlistName']))
    {    
        $rand = rand(1,10000);
        $playlistID = "pl".$rand;
        $sql0 = "SELECT playlistID from playlist where playlistID = '$playlistID'";
        $result0 = mysqli_query($conn,$sql0);
        while(mysqli_num_rows($result0) > 0)
        {
            $rand = rand(1,10000);
            $playlistID = "pl".$rand;
            $sql0 = "SELECT playlistID from playlist where playlistID = '$playlistID'";
            $result0 = mysqli_query($conn,$sql0);
        }
        $playlistName = $_POST['playlistName'];
        $sql = "INSERT INTO `playlist`(`playlistName`,`playlistID`,`userName`) VALUES ('$playlistName','$playlistID','$username')";
        $result = mysqli_query($conn,$sql);
        if ($result){
            echo 'AAAAAAAAAAAAA';
        }
        else{
            echo "An error message!";  
        }
    }
?>