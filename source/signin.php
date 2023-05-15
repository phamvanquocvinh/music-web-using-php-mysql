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
    <title>Đăng nhập</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/signin.css">
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
        <div>
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
<body>
    <div class="bg-animation">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
    </div>
    <div class="header header-login width-full pt-5 pb-3" role="banner">
        <div class="container clearfix width-full text-center">
            <a href="home.php"><img src="./img/logo.png" alt="" class="logo pb-1"></a>
            <h4>Đăng Nhập</h4>
        </div>
    </div>
 
    <main>
        <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Tên người dùng</label>
              <input type="text" class="form-control" class="input-field" id="username" name="username" value="" required>
            <div class="mt-3 mb-4">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" class="input-field" id="password" name="password" value="" required>
            </div>
            <?php
            //Chức năng đăng nhập
                        if(isset($_POST['login-btn']))
                        {
                            if($_POST['username'] == null)
                            {
                                echo "Please enter your username<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                //SQL Injection Prevention
                                $username = mysqli_real_escape_string($conn, $_POST['username']);
                            }
                            if($_POST['password'] == null)
                            {
                                echo "Please enter your password<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                //SQL Injection Prevention
                                $password = mysqli_real_escape_string($conn, $_POST['password']);
                            }
                            if($username && $password)
                            {
                                

                                require_once("api/connect.php");
                                $sql = "SELECT * FROM user where userName ='$username' AND userPassword ='$password'";
                                $result = mysqli_query($conn, $sql);
                                while($row = $result->fetch_assoc()){
                                    $_SESSION["userType"] = $row["userType"];
                                }
                                if(mysqli_num_rows($result) == 0)
                                {
                                    echo "Tài khoản này không tồn tại";
                                    echo '<br>';
                                    echo '<br>';
                                }else{
                                    $_SESSION["logged"] = true;
                                    
                                    $_SESSION["username"] = $username;
                                    header("Location: home.php");
                                    setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
                                }
                            }
                        }
                    ?>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="login-btn">Đăng nhập</button>
            </div>
        </form>
    </main>
    <div class="mt-3 text-center">
        <p>Lần đầu bạn đến với MusicParadise? <a href="signup.php">Tạo tài khoản.</a></p>
    </div>
    <footer>
        <ul class="mt-5 text-center" style="padding: 0;">
            <li><a class="" href="home.php">Trang chủ</a></li>
            <li><a class="" href="security.php">Chính sách bảo mật</a></li>
            <li><a class="" href="adscontact.php">Liên hệ</a></li>
        </ul>
    </footer>

    
    
</body>
</html>