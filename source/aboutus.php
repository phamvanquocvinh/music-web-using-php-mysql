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
    <title>Về chúng tôi</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/aboutus.css">
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
                <div class="col-12 col-sm-12 col-md-9 col-lg-9"> 
                    <h4>GIỚI THIỆU VỀ MUSICPARADISE</h4>
                        <div class="aboutus mt-3">
                            <p>Là nền tảng âm nhạc và âm thanh mới ra mắt, Music Paradise cho 
                                phép mọi người khám phá và thưởng thức bộ sưu tập âm nhạc tuyệt 
                                vời nhất từ cộng đồng người sáng tạo đa dạng nhất trên trái đất. 
                                Kể từ khi ra mắt vào đầu năm 2022, nền tảng này đã trở nên nổi tiếng 
                                với nội dung và tính năng độc đáo, bao gồm khả năng chia sẻ âm
                                nhạc và kết nối trực tiếp với các nghệ sĩ, cũng như khám phá các bản
                                nhạc đột phá, bản trình diễn, podcast và hơn thế nữa. Điều này có thể 
                                thực hiện được nhờ một nền tảng mở kết nối trực tiếp người sáng tạo 
                                và người hâm mộ của họ trên toàn cầu. Người sáng tạo âm nhạc và 
                                âm thanh sử dụng MusicParadise để chia sẻ và kiếm tiền từ nội dung 
                                của họ với khán giả toàn cầu, cũng như nhận số liệu thống kê và phản 
                                hồi chi tiết từ cộng đồng Music Paradise.</p>
                            <p>Bạn chưa có tài khoản?</p>
                            <button type="button" class="btnSignup"><a href="signup.php">Tạo tài khoản</a></button><br><br>
                            
                            <h5>Theo dõi chúng tôi</h5>
                            <p>Để biết tin tức mới nhất, hãy theo dõi chúng tôi trên:</p>
                            <ul class="">
                                <li><a class="" href="#">Facebook</a></li>
                                <li><a class="" href="#">Tiktok</a></li>
                                <li><a class="" href="#">Instagram</a></li>
                            </ul>

                            <h5>Sự đóng góp của cộng đồng</h5>
                            <p>Nếu bạn cần trợ giúp hoặc có câu hỏi về tài khoản của mình, hãy tìm hiểu cách
                                 bạn có thể nhận được sự hỗ trợ cần thiết bên dưới:</p>
                            <ul class="">
                                <li><a class="" href="#">Trung tâm trợ giúp. </a>Sử dụng Trung tâm trợ giúp của chúng tôi để tìm câu trả lời cho các câu hỏi thường gặp, hiểu cách tận dụng tối đa MusicParadise và liên hệ với nhóm hỗ trợ của chúng tôi.</li>
                                <li><a class="" href="#">Trợ giúp cộng đồng. </a>Tham gia cuộc trò chuyện và yêu cầu cộng đồng giúp đỡ khi bạn cần. Cộng đồng trợ giúp là nơi để bạn tương tác với MusicParadise và cộng đồng của nó.</li>
                                <li><a class="" href="#">Trung tâm Khiếu nại bản quyền. </a>Tại đây, bạn có thể tìm và tranh chấp mọi khiếu nại về bản quyền do các bên thứ ba đệ trình liên quan đến nội dung tải lên của bạn.</li>
                                <li><a class="" href="#">Báo cáo vi phạm bản quyền. </a>Nếu bạn xác định nội dung trên MusicParadise mà bạn cho rằng vi phạm bản quyền của mình, bạn có thể cho chúng tôi biết tại đây.</li>
                                <li><a class="" href="#">@mpsupport. </a>Cần giúp đỡ nhanh chóng? Tweet nhóm hỗ trợ cộng đồng của chúng tôi về vấn đề của bạn và chúng tôi sẽ giải quyết vấn đề cho bạn ngay khi có thể.</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>