<?php 
    require_once("api/connect.php");

    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/home.css">
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
        <div class="bg-animation" style="height: 0;">
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
            <div class="row pt-3 d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>

                        </div>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="player.php?s=All%20I%20Want%20For%20Christmas%20Is%20You">
                            <img src="./img/slide1.png" class="" width="100%" alt="">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=Shut%20Down">
                            <img src="./img/slide2.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=Late%20Night%20Talking">
                            <img src="./img/slide3.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=Gone">
                            <img src="./img/slide4.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=I%20Drink%20Wine">
                            <img src="./img/slide5.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=Kaikai%20Kitan">
                            <img src="./img/slide6.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=Say%20So">
                            <img src="./img/slide7.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=2%20Be%20Loved">
                            <img src="./img/slide8.jpg" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        <div class="carousel-item">
                            <a href="player.php?s=The%20Great%20War">
                            <img src="./img/slide9.png" class="" width="100%" alt="">
                            </a>                      
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div><br><hr>

            <div class="row pt-3">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <?php
                    //Quản lý các danh sách bài hát ở trang chủ 
                    $playlistArray = array("newsong", "chill", "party", "relax", "study", "sleep");
                    $playlistNameArray = array("New Song", "Chill", "Party", "Relax", "Study", "Sleep");
                    for($i = 0; $i < sizeof($playlistArray); $i++){
                        echo '<div class="row">';
                        echo '<h4>'.$playlistNameArray[$i].'</h4>';
                        require_once("api/connect.php");
                            $sql0 = "SELECT * FROM playlist WHERE playlistName = '$playlistArray[$i]'";
                            $result0 = mysqli_query($conn, $sql0);                          
                            while($row0 = $result0->fetch_assoc()){
                                $playlistID = $row0['playlistID'];
                                $sqlA = "SELECT * FROM playlist_song WHERE playlistID = '$playlistID'";
                                $resultA = mysqli_query($conn, $sqlA);
                                while($rowA = $resultA->fetch_assoc()){
                                    $songID = $rowA['songID'];
                                    $sql = "SELECT * FROM song WHERE songID = '$songID'";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = $result->fetch_assoc()) {
                                        $artID = $row['artistID'];
                                        $songImg = $row['songImg'];
                                        $sql1 = "SELECT artistName FROM artist where artistID = '$artID'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        while($row1 = $result1->fetch_assoc()){
                                            echo '<div class="col-6 col-sm-6 col-md-3 col-lg-3">';
                                                echo '<div class="card">';
                                                    echo '<a href="player.php?s='.$row['songName'].'">';
                                                    echo '<img src="'.$songImg.'" class="card-img-top" >';
                                                    echo '<div class="p-1">';
                                                        echo '<h5>'.$row['songName'].'</h5>';
                                                    echo '</a>';
                                                    echo '<a href="artist.php?s='.$row1['artistName'].'">';
                                                        echo '<p>'.$row1['artistName'].'</p>';
                                                    echo '</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                }   
                            }
                        echo '</div><hr>'; 
                    } 
                            
                    ?>
                </div>                 
                

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 justify-content-end">
                    <div class="row">
                        <h4>Charts: Top 10</h4>
                        <div id="bxh">
                        <?php
                            require_once("api/bxh.php");
                        ?>               
                        </div>   
                    </div>

                    <div class="row">
                        <h4>Artists: Top 10</h4>
                        <div id="bxh">
                            <?php
                                require_once("api/art.php");     
                            ?>                             
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
</html>