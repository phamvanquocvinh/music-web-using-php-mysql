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
        <link rel="stylesheet" href="css/admin.css" />
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
            <div id="myProgress">
                <div id="myBar"></div>
            </div>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 col-sm-12 col-md-7 col-lg mt-3">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#songManage">Quản lí bài hát</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#artistManage">Quản lí nghệ sĩ</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#genreManage">Quản lí thể loại</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#playlistManage">Quản lí playlist</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#topChartManage">TOP Charts</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#topArtManage">TOP Artists</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#userManage">Quản lí người dùng</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#commentManage">Quản lí bình luận</a></li>
                                
                            </ul>
                            <div class="tab-content">

                            <!-- Quản lí bài hát -->
                            <?php
                                include_once("admin/loadSong.php");
                            ?>
                            <script>
                                //them chuc nang nut cap nhat
                                for(let i = 0; i < 100; i++){
                                        let idUpdate = "#updatesongBtn".concat(i);
                                        $(idUpdate).click(function(){
                                        var currentRow=$(this).closest("tr"); 
                                        var songName1=currentRow.find("td:eq(0)").text();
                                        var songDuration1=currentRow.find("td:eq(1)").text();
                                        var genID1=currentRow.find("td:eq(2)").text();
                                        var artID1=currentRow.find("td:eq(3)").text();
                                        $('#songNameHide').val(songName1);
                                        $('#songName1').val(songName1);
                                        $('#songDuration1').val(songDuration1);
                                        $('#genID1').val(genID1);
                                        $('#artID1').val(artID1);

                                        })
                                }
                            </script>
                            
                                <!-- Quản lí nghệ sĩ -->
                                <?php
                                    include_once('admin/loadArt.php')
                                ?>
                                
                                <!-- Quản lí thể loại -->
                                <?php
                                    include_once('admin/loadGen.php')
                                ?>
                                
                                <!-- Quản lí playlist -->
                                <?php
                                    include_once('admin/loadPlaylist.php')
                                ?>

                                <!-- Quản lí TOP CHARTS -->
                                <?php
                                    include_once('admin/loadTopChart.php')
                                ?>

                                <!-- Quản lí TOP Artist -->
                                <?php
                                    include_once('admin/loadTopArt.php')
                                ?>

                                <!-- Quản lí user -->
                                <?php
                                    include_once('admin/loadUser.php')
                                ?>
                                <script>
                                    //them chuc nang nut cap nhat
                                    for(let i = 0; i < 20; i++){
                                            let idUser = "#updateUser".concat(i);
                                            $(idUser).click(function(){
                                            var currentRow=$(this).closest("tr"); 
                                            var userName1=currentRow.find("th:eq(0)").text();
                                            var userFullName1=currentRow.find("td:eq(0)").text();
                                            var userPassword1=currentRow.find("th:eq(1)").text();
                                            var userEmail1=currentRow.find("td:eq(1)").text();
                                            var userType1=currentRow.find("td:eq(2)").text();
                                            $('#userName1').val(userName1);
                                            $('#userName2').val(userName1);
                                            $('#userFullName1').val(userFullName1);
                                            $('#userPassword1').val(userPassword1);
                                            $('#userEmail1').val(userEmail1);
                                            $('#userType1').val(userType1);
                                            })
                                    }
                                </script>
                                <!-- Quản lí bình luận -->
                                <?php
                                    include_once('admin/loadCmt.php')
                                ?>
                            </div>
                        </div>
                    </div>
                </div><hr>
            </div> 
            <?php
                include_once("footer.php")
            ?>
        <script src="js/admin.js"></script>  x`
        </main>
    </body>
</html>