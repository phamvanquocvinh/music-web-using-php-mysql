<?php
    require_once("../connect.php");
    $songNameHide = $_POST['songNameHide'];
    $songName1 = $_POST['songName1'];
    $songDuration1 = $_POST['songDuration1'];
    $genID1 = $_POST['genID1'];
    $artID1 = $_POST['artID1'];

    $sql = "UPDATE song SET songName='$songName1', songDuration='$songDuration1', genreID='$genID1', artistID='$artID1' WHERE songName = '$songNameHide'";
    if(mysqli_query($conn, $sql)){
        header("Location: ../../admin.php");
    }
    
?>