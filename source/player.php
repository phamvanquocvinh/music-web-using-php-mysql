<?php 
    require_once("api/connect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Player</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="star-rating-svg-master/src/jquery.star-rating-svg.js"></script>
        <link rel="stylesheet" type="text/css" href="star-rating-svg-master/src/css/star-rating-svg.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <link rel="stylesheet" href="css/player.css" />
        <link rel="stylesheet" href="css/navabar&footer.css">
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
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="music">
                        <div class="music-thumb">
                            <?php
                            //Nghe nhạc
                            $songName = $_GET['s'];
                            require_once("api/connect.php");
                            $sql = "SELECT * FROM song where songName = '$songName'";
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()) {

                                echo '<img src="'.$row['songImg'].'" alt="" />';
                                echo '</div>';
                                echo '<h3 class="music-name">'.$row['songName'].'</h3>';
                                echo '<input type="range" name="range" id="range" class="range" />';
                                echo '<audio src="'.$row['songPath'].'" id="song"></audio>';
                                
                                echo '<div class="timer">';
                                    echo '<div class="remaining">'.$row['songDuration'].'</div>';
                                    echo '<div class="duration">0:00</div>';
                                echo '</div>';
                            }
                            ?> 
                            
                        <div class="controls">
                            <ion-icon name="infinite-outline" class="play-infinite"></ion-icon>
                            <ion-icon name="play-back" class="play-back"></ion-icon>
                            <div class="play">
                            <div class="player-inner">
                                <ion-icon name="play" class="play-icon"></ion-icon>
                            </div>
                            </div>
                            <a accesskey="s"><ion-icon name="play-forward" class="play-forward"></ion-icon></a>
                            <ion-icon name="repeat-outline" class="play-repeat"></ion-icon>
                        </div><br><br>
                        
                        <?php 
                        if (isset($_SESSION["logged"])) {
                            error_reporting(E_ALL ^ E_NOTICE);  
                            require_once("api/connect.php");
														$sql = "SELECT * FROM song where songName = '$songName'";
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()) {
                                $songName = $row['songName'];
                                $_SESSION['songNameDownload'] = $songName;
                                $songID = $row['songID'];
                                $username = $_SESSION['username'];
                                echo "<div class=\"method\">";
                                        $sql9 =  "SELECT * FROM rating where songID = '$songID' AND userName = '$username'";
                                        $result9 = mysqli_query($conn, $sql9);
                                        if(mysqli_num_rows($result9) > 0){
                                            while($row9 = $result9->fetch_assoc()){
                                                $rating = $row9['ratingStar'];
                                                if($row9['userName'] == $username){
                                                    echo "<div class='my-rating-4' data-rating='".$rating."'></div>";
                                                    echo '<div id="rating-num">'.$rating.'</div>';
                                                }
                                            }
                                        }else{
                                            echo "<div class='my-rating-4'></div>";
                                            echo '<div id="rating-num">0</div>';
                                        }  
                                        $sql1 = "SELECT * FROM liked where songID = '$songID' AND userName = '$username'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        if(mysqli_num_rows($result1) > 0){
                                            while($row1 = $result1->fetch_assoc()){
                                                if($row1['userName'] == $username){
                                                    echo '<a onclick="liked(\''."$songID".'\')"><i class="fa fa-heart" id="like-btn"></i></a>';
                                                }     
                                                else{
                                                    echo '<a onclick="liked(\''."$songID".'\')"><i class="fa-regular fa-heart" id="like-btn"></i></a>';
                                                }
                                            }
                                        }else{
                                            echo '<a onclick="liked(\''."$songID".'\')"><i class="fa-regular fa-heart" id="like-btn"></i></a>';
                                        }
                                        if (isset($_SESSION["logged"])) {
                                            $userPremium = $_SESSION['username'];
                                            $sql8 = "SELECT userType FROM user WHERE userName = '$userPremium'";
                                            $result8 = mysqli_query($conn, $sql8);
                                            while($row8=$result8->fetch_assoc()){
                                                $sql9 = "SELECT userFullName FROM user WHERE userName = '$userPremium'";
                                                $result9 = mysqli_query($conn, $sql9);
                                                while($row9=$result9->fetch_assoc()){
                                                    $userFullnamePremium = $row9['userFullName'];
                                                    if($row8['userType'] == 'premium'){
                                                        echo '<a href="songs/edm/music/butterfly.mp3" download="'.$_SESSION['songNameDownload'].'.mp3"><ion-icon name="download-outline"></ion-icon></a>'; 
                                                    }else{
                                                        echo '<ion-icon name="download-outline" id="download-btn" data-bs-toggle="modal" data-bs-target="#downloadModal"></ion-icon>';           
                                                    }
                                                }
                                                
                                            }
                                        }   

                                        //echo '<ion-icon name="download-outline" id="download-btn" data-bs-toggle="modal" data-bs-target="#downloadModal"></ion-icon>';           
                                        echo '<ion-icon name="add-outline" id="addPL-btn" data-bs-toggle="modal" data-bs-target="#playlistModal"></ion-icon>';           
                                echo '</div>';
                            echo '</div>';
                            //Xem lyrics 
                        echo '<div class="lyric">';
                            echo '<b>Lời bài hát</b>';
                            echo '<embed style="padding-top: 5px; width: 100%" src="'.$row['songLyric'].'" id="lyric"></embed>';
                        }
                    }
                    ?>
                    <!-- Tải nhạc  -->
                    <!-- The Modal -->
                    <div class="modal fade" id="downloadModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tải xuống nhạc</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p><img src="img/hot.gif" style="display: inline"> Quét QR để tải nhạc - Khuyến mãi chỉ 5.000đ <img src="img/hot.gif" style="display: inline"></p>
                                    <img src="img/qr.jpg"></img><br>
                                    <form action="" method="post">
                                    <p>Nhập 4 số cuối mã giao dịch&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="key" id="key" value=""></p>
                                    <button type="submit" class="btn btn-info" style="display: block; margin-right: 30px; margin-left: auto" data-backdrop="static">Xác nhận</button>
                                    <p><img src="img/a.gif"></img>Sau khi xác nhận, bấm vào icon Tải xuống 1 lần nữa sẽ hiển thị nút "Download"</p>
                                    </form>
                                    <?php
                                    //Thanh toán online 
                                    $songname = $_GET['s'];
                                    $key = $_POST['key'];
                                    if($key == "1505"){
                                        
                                        echo '<a href="songs/edm/music/butterfly.mp3" download="'.$songname.'.mp3"><button style="display: block; margin-right: 200px; margin-left: auto"class="btn btn-success">Download</button></a>';
                                    }
                                    ?> 
                                        
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    


                    <div class="modal fade" id="playlistModal" tabindex="-1" aria-labelledby="playlistModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Danh sách playlist</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <select class="form-select" id="selectedPL" aria-label="Default select example">
                                    <option selected>Chọn playlist</option>
                                <?php
                                    require_once("api/connect.php");
                                    $userName = $_SESSION['username'];
                                    $sql = "SELECT * FROM playlist where userName = '$userName'";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = $result->fetch_assoc()){    
                                        echo '<option value="'.$row['playlistID'].'">'.$row['playlistName'].'</option>';
                                    }
                                    echo '</select>';
                                    $songName = $_GET['s'];
                                    $_SESSION['songName'] = $songName;
                                    $sql1 = "SELECT songID FROM song where songName = '$songName'";
                                    $result1 = mysqli_query($conn, $sql1);
                                    while($row1 = $result1->fetch_assoc()){ 
                                        $_SESSION['songID']= $row1['songID'];
                                    }  
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#newplaylistModal">Tạo playlist mới</button>';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>';
                                            echo '<button type="button" class="btn btn-primary" id="add-btn">Thêm</button>';
                                    echo '</div>';
                                ?>            
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="1" id="newplaylistModal">
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
                                <button type="submit" id="makeplaylist-btn" class="btn btn-primary" data-bs-target="#playlistModal">Tạo playlist</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

               
                <div class="music">
                    <?php
                    //xem bình luận
                     
                    if (isset($_SESSION["logged"])) {
                        require_once("api/connect.php");
                        $songid = $_SESSION['songID'];
                        $sql = "SELECT * FROM comment WHERE songID = '$songid'";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            echo '
                            
                            <div class="musicComment">
                            <img src="img/profile.png" alt="avatar" width="50" height="50">
                            <b>'.$row['userName'].'</b>
                            <p>'.$row['commentDetail'].'</p>
                            </div>';
                        }

                        echo'               
                        <b><br>Bình luận</b>
                        <form action="api/comment.php?s='.$_SESSION['songID'].'" method="post">
                            <input type="text" id="cmt" name="cmt" style="width: 100%; height: 55px; border-radius: 5px;">
                            <br><br>
                            <button style="width: 100%; height: 42px; border-radius: 5px;" type="submit" class="btn btn-primaryComment"><i class="fa-solid fa-paper-plane"></i></button>                   
                        </form>';
                        }
                    ?>

                </div>
                <br>
                </div>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <br>
                <h3>Charts: Top 10</h3>
                <div id="bxh">
                            <?php
                                $count = 1;
                                require_once("api/connect.php");
                                $sql0 = "SELECT songID, songLiked as songlike
                                FROM song
                                ORDER BY songlike desc
                                limit 10";
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
                                                echo '<a href="player.php?s='.$row['songName'].'&o='.$count.'">';                                            
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
                        </div>   
            </div>
        </div>
        
    </div>
    <?php
        include_once("footer.php")
    ?>
        
    
    <script src="js/app.js"></script>  


    </main>

    

    </body>
</html>