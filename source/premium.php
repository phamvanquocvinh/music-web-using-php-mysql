<?php
    require_once("api/connect.php");

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Premium</title>
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
        <link rel="stylesheet" href="css/premium.css" />
        <link rel="stylesheet" href="">
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
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 mt-3">
                        <div class="container">
                            <div class="aboutus mt-3">
                                <?php
                                    if (isset($_SESSION["logged"])) {
                                        $userPremium = $_SESSION['username'];
                                    $sql = "SELECT userType FROM user WHERE userName = '$userPremium'";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=$result->fetch_assoc()){
                                        if($row['userType'] == 'premium'){
                                          echo '
                                          <h3>Premium</h3>
                                            <p style="font-weight: bolder;">Bạn đã là thành viên Premium</p>
                                          ';  
                                        }else{
                                            echo'
                                            <h3>Nghe không giới hạn</h3>
                                <p style="font-weight: bolder;">Với gói Premium, bạn có thể nghe nhạc mọi nơi, mọi lúc, không hạn chế. Nghe nhạc không quảng cáo và tải nhạc miễn phí.</p>
                                <span style="font-size: 20px; color: yellow;">Xem các gói</span>
                                <div class="row" >
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-1">
                                        <div class="packagesDay mt-3">
                                            <p style="border: 1px solid rgba(74, 219, 54, 0.8); padding: 5px; border-radius: 5px; color: rgba(74, 219, 54, 0.8); width: fit-content;">Thanh toán một lần</p>
                                            <span style="font-weight: bolder; font-size: 30px; color: yellow;">Mini</span><br>
                                            <span>Từ 2.900đ/ngày</span><br>
                                            <span>1 tài khoản</span>
                                            <hr class="p-0">
                                            <p><i class="fa-solid fa-check"></i> Nghe nhạc không quảng cáo</p>
                                            <p><i class="fa-solid fa-check"></i> Nhóm nghe chung</p>
                                            <p><i class="fa-solid fa-check"></i> Tải nhạc thả ga</p>
                                            <br><br>
                                            <div class="text-center d-grid gap-2">
                                                <button type="button" class="btn btn-primaryPackages" data-bs-toggle="modal" data-bs-target="#packagesDay">
                                                    Mua gói
                                                  </button>
                                            </div>
                                            
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="packagesDay" tabindex="-1" aria-labelledby="packagesDayLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="packgesDayLabel" style="color: yellow;" >Thanh toán gói Mini</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <img src="img/29.jpg"></img>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                      <a href="../api/thanhtoan.php"><button type="button" class="btn btn-primary">Xác nhận</button></a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>


                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-1">
                                        <div class="packagesMonth mt-3">
                                            <p style="border: 1px solid rgba(74, 219, 54, 0.8); padding: 5px; border-radius: 5px; color: rgba(74, 219, 54, 0.8); width: fit-content;">Thanh toán một lần</p>
                                            <span style="font-weight: bolder; font-size: 30px; color: yellow;">Individual</span><br>
                                            <span>Từ 59.000đ/tháng</span><br>
                                            <span>1 tài khoản</span>
                                            <hr class="p-0">
                                            <p><i class="fa-solid fa-check"></i> Nghe nhạc không quảng cáo</p>
                                            <p><i class="fa-solid fa-check"></i> Nghe mọi nơi - ngay cả khi không có kết nối mạng</p>
                                            <p><i class="fa-solid fa-check"></i> Phát nhạc theo thứ tự bất kỳ</p>
                                            <br>
                                            <div class="text-center d-grid gap-2">
                                                <button type="button" class="btn btn-primaryPackages lg-3" data-bs-toggle="modal" data-bs-target="#packagesMonth">
                                                    Mua gói
                                                  </button>
                                            </div>
                                            
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="packagesMonth" tabindex="-1" aria-labelledby="packagesMonthLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="packgesDayLabel" style="color: yellow;">Thanh toán gói Individual</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <img src="img/59.jpg"></img>

                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                      <a href="../api/thanhtoan.php"><button type="button" class="btn btn-primary">Xác nhận</button></a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                            ';
                                        }
                                    }
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </main>
        <?php
            include_once("footer.php");
        ?>
    </body>
</html>