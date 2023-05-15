<?php 
    require_once("api/connect.php");

    session_start();
    $usernameLogin = $_SESSION['username'];
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Library</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>        <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <link rel="stylesheet" href="css/library.css" />
        <link rel="stylesheet" href="css/navabar&footer.css">
        <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        >
        </script>
    </head>
    <body>
        <div class="bg-animation">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="stars4"></div>
        </div>
        <?php
            include_once("nav.php");
        ?>
        

        <main>
            <div class="container">
                <div class="row pt-5">
                    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                        <div class="container">
                            <ul class="nav nav-tabs">                    
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#likes">Yêu thích</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#playlist">Playlist</a></li>
                            </ul>
                            <div class="tab-content">    
                                <div class="tab-pane active" id="likes">
                                    <div class="row  g-0 rounded ">
                                        <div class="col p-4">
                                           <span>Nghe các bài hát bạn thích:</span>
                                           <div class="row pt-3">
                                            <?php
                                                require_once("api/connect.php");
                                                $sql0 = "SELECT * FROM liked";
                                                $result0 = mysqli_query($conn, $sql0);
                                                if(mysqli_num_rows($result0) > 0){
                                                    while($row0 = $result0->fetch_assoc()){
                                                        if($row0['userName'] == $usernameLogin){
                                                            $songID = $row0['songID'];
                                                            $sql = "SELECT * FROM song WHERE songID = '$songID'";
                                                            $result = mysqli_query($conn, $sql);
                                                            while($row = $result->fetch_assoc()) {
                                                                $artID = $row['artistID'];
                                                                $songImg = $row['songImg'];
                                                                $sql1 = "SELECT artistName FROM artist where artistID = '$artID'";
                                                                $result1 = mysqli_query($conn, $sql1);
                                                                while($row1 = $result1->fetch_assoc()){
                                                                    echo '<div class="col-6 col-sm-6 col-md-3 col-lg-2">';
                                                                        echo '<div class="card">';
                                                                            echo '<a href="player.php?s='.$row['songName'].'">';
                                                                            echo '<img src="'.$songImg.'" class="card-img-top" >';
                                                                            echo '<div class="p-1">';
                                                                                echo '<h5 style="color:white">'.$row['songName'].'</h5>';
                                                                            echo '</a>';
                                                                            echo '<a href="artist.php?s='.$row1['artistName'].'">';
                                                                                echo '<p style="color:white">'.$row1['artistName'].'</p>';
                                                                            echo '</a>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                }
                                                            }
                                                        }                                                   
                                                    }
                                                }else {
                                                    echo 'Chưa có bài hát yêu thích';
                                                }
                                                
                                            
                                            ?>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="playlist">
                                    <div class="row g-0 rounded">                                       
                                        <div class="col p-4">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#newplaylistModal">Tạo playlist mới</button><br>
                                            <br>
                                            <span>Nghe danh sách phát của riêng bạn và danh sách phát bạn đã thích:</span>
                                            <div class="row pt-3">
                                                <?php
                                                $sql = "SELECT * FROM playlist where userName = '$usernameLogin'";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = $result->fetch_assoc()){
                                                    $playlistID = $row["playlistID"];
                                                    $sql0 = "SELECT * FROM playlist_song where playlistID = '$playlistID'";
                                                    $result0 = mysqli_query($conn, $sql0);
                                                    while($row0 = $result0->fetch_assoc()){
                                                        $songID = $row0["songID"];
                                                            $sql1 = "SELECT songName FROM song where songID = '$songID'";
                                                            $result1 = mysqli_query($conn, $sql1);
                                                            while($row1 = $result1->fetch_assoc()){
                                                                    $rand = rand(1,10);
                                                                    $plImg = "img/playlistImg/img".$rand.".jpg";
                                                                    echo '<div class="col-6 col-sm-6 col-md-3 col-lg-2">';
                                                                        echo '<div class="card">';
                                                                            echo '<a href="playlistPlayer.php?s='.$row1['songName'].'&p='.$row["playlistID"].'&o=1">';
                                                                            echo '<img src="'."$plImg".'" class="card-img-top" >';
                                                                            echo '<div class="p-1">';
                                                                                echo '<h5>'.'#'.$row["playlistName"].'</h5>'; 
                                                                                echo '</a>';     
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';                                                                                                                           
                                                            }
                                                            break;
                                                    }
                                                    
                                                }
                                                ?>  
                                            <!-- Add Playlist  -->
                                            <div class="modal fade" tabindex="-1" id="newplaylistModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tạo playlist mới</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="makeplaylist">
                                                                <label for="newplaylistName">Tên playlist mới</label>
                                                                <input type="text" id="newplaylistName" name="newplaylistName">
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                            <button  type="submit" id="makeplaylist-btn" class="btn btn-primary" data-bs-target="#playlistModal">Tạo playlist</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add Playlist  -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>     
                </div>
            </div> 
            <?php
                include_once("footer.php")
            ?>

        </main>
    </body>
    <script>
        $("#makeplaylist-btn").on('click',function() {
        var newplaylist = "";
        $("#makeplaylist").each(function() {
            var name = $(this).find("#newplaylistName").val();
            newplaylist = name;
        });
        if(newplaylist == "")
        {
            alert("Vui lòng đặt tên cho playlist của mình");
        }
        else{
            $(function(){
            $.ajax({
            url: 'api/createnewplaylist.php',
            data: {"playlistName": newplaylist},
            type: 'post',
            success: function()
            {
                $("#playlistModal").modal('toggle');     
                alert("Tạo thành công");
                location.reload();
            }
            })
            })
        }
        });
    </script>
</html>