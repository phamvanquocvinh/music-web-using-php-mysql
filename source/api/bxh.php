<?php
//Chọn bài hát theo danh sách tổng hợp bài hát (top bài hát) 
$count = 1;
require_once("connect.php");

$sql0 = "SELECT songID, songLiked as songlike
FROM song
ORDER BY songlike desc
limit 10";

//$sql0 = "SELECT * FROM playlist WHERE playlistName = 'topcharts'";
$result0 = mysqli_query($conn, $sql0);
while($row0 = $result0->fetch_assoc()){
    $songID = $row0['songID'];
    $sql = "SELECT * FROM song WHERE songID = '$songID'";
    $result = mysqli_query($conn, $sql);
    while($row = $result->fetch_assoc()) {
        $artID = $row['artistID'];
        $songImg = $row['songImg'];
        $sql1 = "SELECT artistName FROM artist where artistID = '$artID'";
        $result1 = mysqli_query($conn, $sql1);
        while($row1 = $result1->fetch_assoc()){
            echo '<div class="row g-0">';
                echo '<div class="col-1 col-sm-1 col-md-1 col-lg-1 rank1"><br>'.$count.'</div>';
                echo '<div class="col-2 col-sm-2 col-md-2 col-lg-2">';
                echo '<div class="card">';
                echo '<a href="player.php?s='.$row['songName'].'">';                                            
                    echo '<img src="'.$songImg.'" class="img-fluid" class="card-img-top">';                                                    
                echo '</div>';
                echo '</div>';
                echo '<div class="col-9 col-sm-9 col-md-9 col-lg-9" >';
                    echo '<div >';
                        echo '<h5 style="margin-left: 10px;">'.$row['songName'].'</h5>';
                        echo '</a>';
                        echo '<a href="artist.php?s='.$row1['artistName'].'">';
                        echo '<p style="margin-left: 10px;">'.$row1['artistName'].'</p>';
                        echo '</a>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            $count++;
        }
    }
}
?>               