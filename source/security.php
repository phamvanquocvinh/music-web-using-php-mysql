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
    <title>Chính sách bảo mật</title>

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
                    <h4>CHÍNH SÁCH BẢO MẬT</h4>
                        <div class="aboutus mt-3">
                            <h5>Điều 1: Mục đích và phạm vi thu thập</h3>
                            <p>Khi tương tác và giao dịch trên MusicParadise, người dùng sẽ yêu cầu cung cấp các thông tin bao gồm: 
                                email, tên đăng nhập, mật khẩu đăng nhập. Đây là các thông tin mà 
                                MusicParadise yêu cầu Khách hàng cung cấp khi đăng ký sử dụng tài khoản cá nhân để lưu trữ kho nhạc cá nhân 
                                và thực hiện việc nâng cấp tài khoản nghe nhạc, bảo vệ quyền lợi cho Khách hàng.</p>
                            <p>Khách hàng sẽ tự chịu trách 
                                nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới tên đăng ký, mật khẩu và hộp thư điện tử của mình. 
                                Ngoài ra, Khách hàng có trách nhiệm thông báo kịp thời cho MusicParadise về những hành vi sử dụng trái phép, lạm dụng, 
                                vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp.</p>
                            <br>
                            <h5>Điều 2: Phạm vi sử dụng thông tin</h5>
                            <p>MusicParadise sẽ sử dụng thông tin do Khách hàng cung cấp cho các mục đích sau:</p>
                            <ul class="">
                                <li>Cung cấp dịch vụ nghe nhạc đến với Khách hàng.</a></li>
                                <li>Lưu trữ thông tin hoạt động của khách hàng trên website/Ứng dụng MusicParadise để cải thiện chất lượng dịch vụ nghe nhạc tốt hơn tới khách hàng.</li>
                                <li>Ngăn ngừa các hoạt động phá hủy tài khoản người dùng của Khách hàng hoặc các hoạt động giả mạo Khách hàng.</li>
                                <li>Liên lạc và giải quyết với Khách hàng trong những trường hợp đặc biệt.</li>
                                <li>Không sử dụng thông tin cá nhân của Khách hàng ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch mua sản phẩm trên trang MusicParadise</li>
                            </ul>
                            <br>
                            <h5>Điều 3: Thời gian lưu trữ thông tin</h5>
                            <p>Dữ liệu cá nhân của Khách hàng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự Khách hàng đăng nhập và thực hiện hủy bỏ. 
                                Còn lại trong mọi trường hợp thông tin cá nhân Khách hàng sẽ được bảo mật trên máy chủ của NhacCuaTui.com</p>
                            <br>
                            <h5>Điều 4: Địa chỉ của đơn vị thu thập, quản lý thông tin và hỗ trợ Khách hàng</h5>
                            <ul class="">
                                <li>Công ty Cổ phần VTVTS</li>
                                <li>Trụ sở chính: Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh.</li>
                                <li>Địa chỉ liên hệ: Địa chỉ: Tầng 50, Tòa nhà Landmark 81, Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh.</li>
                                <li>Hotline: 0379128127</li>
                                <li>Email: <a href="">musicparadise@mpd.vn</a></li>
                            </ul>
                            <br>
                            <h5>Điều 5: Phương tiện và công cụ quản lý thông tin Khách hàng</h5>
                            <p>Khách hàng có quyền tự kiểm tra, cập nhật, điều chỉnh thông tin cá nhân của mình bằng cách đăng nhập vào 
                                tài khoản và chỉnh sửa thông tin cá nhân hoặc yêu cầu MusicParadise thực hiện việc này bằng cách gửi email 
                                về địa chỉ email musicparadise@mpd.com hoặc qua fanpage MusicParadise.</p>
                            <p>Khi có nghi vấn về việc thông tin cá nhân bị tiết lộ hoặc có nhu cầu xóa thông tin cá nhân khỏi hệ thống MusicParadise, Khách hàng có 
                                quyền gửi yêu cầu đến Ban quản trị của MusicParadise qua email musicparadise@mpd.com. Sau khi tiếp nhận những yêu cầu này, MusicParadise 
                                sẽ ngay lập tức tiến hành xác nhận, kiểm tra, xử lý yêu cầu của Khách hàng.</p>
                            <br>
                            <h5>Điều 6: Cam kết bảo mật thông tin cá nhân Khách hàng</h5>
                            <p>Thông tin cá nhân của Khách hàng trên MusicParadise được MusicParadise cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân 
                                của MusicParadise. Việc thu thập và sử dụng thông tin của mỗi Khách hàng chỉ được thực hiện khi có sự đồng ý của Khách hàng đó, ngoại 
                                trừ những trường hợp có yêu cầu từ cơ quan có thẩm quyền. Theo đây, MusicParadise cam kết:</p>
                            <ul class="">
                                <li>Không sử dụng, chuyển giao, cung cấp hay tiết lộ cho bên thứ ba nào về thông tin cá nhân của Khách hàng khi chưa có sự cho phép hoặc đồng ý từ Khách hàng, trừ những trường hợp pháp luật có quy định khác.</li>
                                <li>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân Khách hàng, MusicParadise sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho Khách hàng được biết.</li>
                                <li>Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Khách hàng bao gồm thông tin hóa đơn, chứng từ kế toán số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của MusicParadise.</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>