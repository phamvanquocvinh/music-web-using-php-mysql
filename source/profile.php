<?php 
    require_once("api/connect.php");

    session_start();
    
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Profile</title>
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
        <link rel="stylesheet" href="css/profile.css" />
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
                <div class="row d-flex justify-content-center">
                    <div class="col-5 col-sm-5 col-md-2 col-lg-2 pt-5">
                        <span><img src="./img/profile.png" alt="" class="user_avatar"></span>
                    </div>
                    <?php
                        if (isset($_SESSION["logged"])) {
                            $userPremium = $_SESSION['username'];
                            $sql = "SELECT userType FROM user WHERE userName = '$userPremium'";
                            $result = mysqli_query($conn, $sql);
                            while($row=$result->fetch_assoc()){
                                $sql1 = "SELECT userFullName FROM user WHERE userName = '$userPremium'";
                                $result1 = mysqli_query($conn, $sql1);
                                while($row1=$result1->fetch_assoc()){
                                    $userFullnamePremium = $row1['userFullName'];
                                    if($row['userType'] == 'premium'){
                                        echo '
                                        
                                        <div id="fullname" class="d-flex justify-content-center p-1" style="font-size: 30px; color: white; font-weight: bolder;"><ion-icon name="star" style="color: #f5cc3b; margin-top: 10px"></ion-icon>'.$userFullnamePremium.' - Premium<ion-icon name="star"style="color: #f5cc3b; margin-top: 10px"></ion-icon></div>
                                        
                                        ';
                                    }else{
                                        echo '
                                        <div id="fullname" class="d-flex justify-content-center p-1" style="font-size: 30px; color: white; font-weight: bolder;">'.$userFullnamePremium.'</div>
                                        ';
                                    }
                                }
                                
                            }
                        }
                    ?>
                </div><hr style="color: white;">

                <div class="row pb-5  d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-5 mt-3">
                        <div class="container">
                            <ul class="nav nav-tabs d-flex justify-content-center">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#user">Tài khoản</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#edituser">Chỉnh sửa</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="user">
                                    <div class="row border g-0 rounded shadow-sm">
                                        <div class="col p-4" style="background-color: rgba(255, 255, 255, 0.299);">
                                            <h5>| Thông tin tài khoản</h5>
                                            <?php
                                                $username = $_SESSION['username'];
                                                require_once("api/connect.php");
                                                $sql = "SELECT * FROM user where userName ='$username'";
                                                $result = mysqli_query($conn, $sql);
                                                    while($row = $result->fetch_assoc()) {
                                                        echo '<form action="" class="pt-3">';
                                                        echo '<div class="mb-3">';
                                                          echo '<label for="fullname" class="form-label">Tên hiển thị</label>';
                                                          echo '<input type="text" class="form-control" class="input-field" id="fullname" name="fullname" value="'.$row['userFullName'].'" disabled>';
                                                        echo '<div class="mt-3">';
                                                          echo '<label for="username" class="form-label">Tên người dùng</label>';
                                                          echo '<input type="text" class="form-control" class="input-field" id="username" name="username" value="'.$row["userName"].'" disabled>';
                                                        echo '</div>';
                                                        echo '<div class="mt-3">';
                                                            echo '<label for="email" class="form-label">Email</label>';
                                                            echo '<input type="email" class="form-control" class="input-field" id="email" name="email" value="'.$row["userEmail"].'" disabled>';
                                                        echo '</div>';
                                                    echo '</form>';                                                    
                                                }
                                            ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="tab-pane" id="edituser">
                                    <div class="row border g-0 rounded shadow-sm">
                                        <div class="col p-4" style="background-color: rgba(255, 255, 255, 0.299);">
                                            <h5>| Chỉnh sửa tài khoản</h5>
                                            <?php
                                                $username = $_SESSION['username'];
                                                require_once("api/connect.php");
                                                $sql1 = "SELECT * FROM user where userName ='$username'";
                                                $result1 = mysqli_query($conn, $sql1);
                                                    while($row1 = $result1->fetch_assoc()) {
                                                        echo '<form action="api/updateInfo.php" method="post" class="pt-3">';
                                                        echo '<div class="mb-3">';
                                                            echo '<label for="fullname" class="form-label">Tên hiển thị</label>';
                                                            echo '<input type="text" class="form-control" class="input-field" id="fullname" name="fullname" value="'.$row1['userFullName'].'">';
                                                        echo '<div class="mt-3">';
                                                            echo '<label for="username" class="form-label">Tên người dùng</label>';
                                                            echo '<input type="text" class="form-control" class="input-field" id="username" name="username" value="'.$row1['userName'].'" disabled>';
                                                        echo '</div>';
                                                        echo '<div class="mt-3">';
                                                            echo '<label for="email" class="form-label">Email</label>';
                                                            echo '<input type="email" class="form-control" class="input-field" id="email" name="email" value="'.$row1['userEmail'].'">';
                                                        echo '</div>';
                                                        echo '<div class="mt-3 mb-4">';
                                                            echo '<label for="newpassword" class="form-label">Mật khẩu cũ</label>';
                                                            echo '<input type="password" class="form-control" class="input-field" id="password" name="password" value="">';
                                                        echo '</div>';
                                                        echo '<div class="mt-3 mb-4">';
                                                            echo '<label for="newpassword" class="form-label">Mật khẩu mới</label>';
                                                            echo '<input type="password" class="form-control" class="input-field" id="newpassword" name="newpassword" value="">';
                                                        echo '</div>';
                                                        echo '<div class="mt-3 mb-4">';
                                                            echo '<label for="cf" class="form-label">Xác nhận mật khẩu mới</label>';
                                                            echo '<input type="password" class="form-control" class="input-field" id="cfpassword" name="cfpassword" value="" required>';
                                                        echo '</div>';
                                                    }
                                                        ?>
                                                        <div class="d-grid gap-2 pt-3">
                                                           
                                                            <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Cập nhật"></input>
                                                            
                                                        </div>
                                                          
                                                       
                                                              </div>
                                                           </div>
                                                          </div>
                                                    </form>
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
</html>