<?php 
    require_once("api/connect.php");

    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ quảng cáo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/adscontact.css">
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
            
            <div class="row pt-3 d-flex justify-content-center mt-5">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 ">
                    <h4>LIÊN HỆ QUẢNG CÁO</h4>
                    <div class="row justify-content-center pt-5 adscontact">
                        <h5>MusicParadise cung cấp các hình thức quảng cáo:</h5>
                        <div class="col-7 col-sm-5 col-md-2 col-lg-2 pt-3"> 
                            <img src="/img/display.gif" alt="">
                            <p id="title">Display Ads</p>
                        </div>
                        <br>
                        <div class="col-7 col-sm-5 col-md-2 col-lg-2 pt-3"> 
                            <img src="/img/audioads.gif" alt="">
                            <p id="title">Audio Ads</p>
                        </div>
                        <br>
                        <div class="col-7 col-sm-5 col-md-2 col-lg-2 pt-3"> 
                            <img src="/img/musicads.gif" alt="">
                            <p id="title">Music Promotion</p>
                        </div>
                        <br>
                        <div class="col-7 col-sm-5 col-md-2 col-lg-2 pt-3"> 
                            <img src="/img/connectionads.gif" alt="">
                            <p id="title">Artist Connection</p>
                        </div>
                        <br>
                    </div>

                    <div class="row justify-content-center pt-3 contact">
                        <h6>Liên hệ phòng kinh doanh để được tư vấn chi tiết:</h6>
                        <p>Hotline: (037) 912 8127<p>
                        <p>Email: <a href="">ads@mp.vn</a></p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </main>
    
</body>
</html>