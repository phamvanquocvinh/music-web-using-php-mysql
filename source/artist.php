<?php 
    require_once("api/connect.php");

    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artist</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        <link rel="stylesheet" href="css/artist.css" />
        <link rel="stylesheet" href="css/navabar&footer.css">
    </head>
    <?php
        $artName = $_GET['s']; 
        require_once("api/connect.php");
        $sql = "SELECT * FROM artist WHERE artistName = '$artName'";
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $artistStory = $row['artistStory'];
            $artistAward = $row['artistAward'];
             echo '<body  style="background-image: linear-gradient(to right, black, #4d084f);"onload="loadDoc('."'$artistStory'".'), loadDoc1('."'$artistAward'".'), a()">';
        }
    ?>
        <div class="bg-animation">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="stars4"></div>
        </div>
        

        <nav class="navbar navbar-expand-lg nav-header">
            <div class="container">
                <a class="navbar-brand" href="home.php"><img src="./img/logo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Trang chủ</a>
                        </li>
                        <?php
                        require_once("accesskey.php");
                             if (isset($_SESSION["logged"])) {
                                if($_SESSION["userType"] == "admin"){
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link" href="library.php">Thư viện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Admin</a>
                                    </li>
                                    '; 
                                }else{
                                    echo '
                                <li class="nav-item">
                                    <a class="nav-link" href="library.php">Thư viện</a>
                                </li>
                                ';  
                                }
                                          
                              }

                        ?> 
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thể loại
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                    require_once("api/connect.php");
                                    $sql = "SELECT * FROM genre";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = $result->fetch_assoc()) {

                                        echo '<li><a class="dropdown-item" href="gen.php?s='.$row['genreID'].'">'.$row['genreName'].'</a></li>';
                                    }
                                ?>

                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse justify-content-end"  id="collapsibleNavbar">
                    <div>
                        <form action="search.php" method="get" class="search-bar d-flex" role="search">
                            <input id="inputsearch" class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="search">
                            <button class="btn me-5" type="submit"><img src="./img/search.png" alt=""></button>
                        </form>

                    </div>
                    <br>
                    <!-- Switcher -->
                    <label style="margin-right: 10px" class="switch">
                        
                        <ion-icon id="dark-mode" class="dark" name="sunny"></ion-icon>
                        </label>
                    <br>
                    <ul class="navbar-nav me-2o mb-2 mb-lg-0 mr-5">
                    <?php
                             if (isset($_SESSION["logged"])) {
                                echo '<a href="profile.php"><i class="fa-solid fa-user" style="color: white; width: 40px; margin-top: 12px"></i></a>';
                                echo '<button type="button" class="btn btn-primary" style="margin-right: 5px"><a href="premium.php" style= "color: white">Premium</a></button>';             
                                echo '<button type="button" class="btn btn-primary"><a href="api/logout.php" style= "color: white">Đăng Xuất</a></button>';             
                              } else {
                                
                                echo '<button type="button" class="btn btn-primary btnLogin me-2"><a href="signin.php" style= "color: white">Đăng Nhập</a></button><br>';
                                echo '<button type="button" class="btn btn-primary"><a href="signup.php" style= "color: white">Đăng Ký</a></button>';
                              }
                            ?>
                        
                    </ul>
                </div>

            </div>
            
        </nav>
        </div>
            <div class="snowflake">
            ❅
            </div>
            <div class="snowflake">
            ❅
            </div>
            <div class="snowflake">
            ❆
            </div>
            <div class="snowflake">
            ❄
            </div>
            <div class="snowflake">
            ❅
            </div>
            <div class="snowflake">
            ❆
            </div>
            <div class="snowflake">
            ❄
            </div>
            <div class="snowflake">
            ❅
            </div>
            <div class="snowflake">
            ❆
            </div>
            <div class="snowflake">
            ❄
            </div>
        </div>

        

        <main>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-5 col-lg-3 mt-3">
                        <?php
                            $artName = $_GET['s']; 
                            require_once("api/connect.php");
                                    $sql = "SELECT * FROM artist WHERE artistName = '$artName'";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = $result->fetch_assoc()) {

                                        echo '<img src="'.$row['artistImg'].'" class="artistavatr" alt="">';
                                    }

                        ?>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-9 mt-3">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#story">Tiểu sử</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#award">Giải thưởng</a></li>
                            </ul>
                            <div class="tab-content" >
                                <div class="tab-pane active" id="story">
                                    <div class="row border g-0 rounded shadow-sm">
                                    <?php
                                    //Xem tiểu sử ca sĩ 
                                                $artName = $_GET['s']; 
                                                require_once("api/connect.php");
                                                $sql = "SELECT * FROM artist WHERE artistName = '$artName'";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = $result->fetch_assoc()) {
                                                    $artistStory = $row['artistStory'];
                                                    echo '<div class="col p-4" style="background-color: rgba(255, 255, 255, 0.299);" onload="loadDoc('."'$artistStory'".')" >';
                                                    
                                                    echo '<h3>| Tiểu sử |</h3>';                                                  
                                                    echo '<span class="story">';
                                                    echo '<div id="story1">';
                                                    echo '<h2>Story</h2>';
                                                    echo '</div>';
                                                    echo '</span>';
                                                echo '</div>';
                                                }

                                    ?>
                                        
                                    </div>
                                </div>
        
                                
        
                                <div class="tab-pane" id="award">
                                    <div class="row border g-0 rounded shadow-sm">
                                    <?php
                                    //Xem thành tựu ca sĩ
                                                $artName = $_GET['s']; 
                                                require_once("api/connect.php");
                                                $sql = "SELECT * FROM artist WHERE artistName = '$artName'";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo '<div class="col p-4" style="background-color: rgba(255, 255, 255, 0.299);">';                             
                                                    echo '<h3>| Giải thưởng |</h3>';                                                  
                                                    echo '<span class="story">';
                                                    echo '<div id="award1">';
                                                    echo '<h2>Story</h2>';
                                                    echo '</div>';
                                                    echo '</span>';
                                                echo '</div>';
                                                }

                                    ?>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div><hr>
            </div> 
            <?php
                include_once("footer.php")
            ?>
        </main>
    </body>
    <script src="js/art.js">
    </script>  
</html>