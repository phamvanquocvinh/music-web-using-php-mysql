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

                    <div >
                        <form action="search.php" method="get" class="search-bar d-flex" role="search">
                            <input id="inputsearch" class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="search">
                            <button class="btn me-5" type="submit"><img src="./img/search.png" alt=""></button>
                        </form>
                    </div>
                    <br>
                    <!-- Switcher -->
                    <label style="margin-right: 10px" class="switch">
                        <ion-icon id="dark-mode" class="dark" name="moon"></ion-icon>
                    </label>
                    <br>
                    <ul class="navbar-nav me-2o mb-2 mb-lg-0 mr-5">
                    <?php
                            if (isset($_SESSION["logged"])) {
                                echo '<a href="profile.php"><i class="fa-solid fa-user" style="color: white; width: 40px; margin-top: 12px"></i></a>';
                                echo '<br>';
                                echo '<button type="button" class="btn btn-primaryPackages" style="margin-right: 5px"><a href="premium.php" style= "color: white; text-decoration: none">Premium</a></button><br>';     
                                echo '<button type="button" class="btn btn-primary"><a href="api/logout.php" style= "color: white; text-decoration: none">Đăng Xuất</a></button>';             
                            } else {
                                
                                echo '<button type="button" class="btn btn-primary btnLogin me-2"><a href="signin.php" style= "color: white">Đăng Nhập</a></button><br>';
                                echo '<button type="button" class="btn btn-primary"><a href="signup.php" style= "color: white">Đăng Ký</a></button>';
                            }
                            ?>
                    </ul>
                    
                </div>
                

            </div>
            <script src="js/nav.js"></script>  
            
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