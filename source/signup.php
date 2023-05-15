<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/signup.css">
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
    <div class="bg-animation">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
    </div>
    <div class="header header-login width-full pt-5 pb-3" role="banner">
        <div class="container clearfix width-full text-center">
            <a href="home.php"><img src="./img/logo.png" alt="" class="logo pb-1"></a>
            <h4>Đăng Ký</h4>
        </div>
    </div>
    <main>
        <form action="" method="post">
            <div class="mb-3">
              <label for="fullname" class="form-label">Tên</label>
              <input type="text" class="form-control" class="input-field" id="fullname" name="fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>" required>
            <div class="mt-3">
              <label for="username" class="form-label">Tên người dùng</label>
              <input type="text" class="form-control" class="input-field" id="username" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required>
            </div>
            <div class="mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" class="input-field" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"\required>
            </div>
            <div class="mt-3 mb-4">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" class="input-field" id="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" required>
            </div>
            <?php
            //CHỨC NĂNG ĐĂNG KÝ
            session_start();

                        if(isset($_POST['register-btn']))
                        {
                            if($_POST['fullname'] == null)
                            {
                                echo "Please enter your full name<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                $fullname = $_POST['fullname'];
                            }
                            if($_POST['email'] == null)
                            {
                                echo "Please enter your email<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                $email = $_POST['email'];
                            }
                            if($_POST['username'] == null)
                            {
                                echo "Please enter your username<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                $username = $_POST['username'];
                            }
                            if($_POST['password'] == null)
                            {
                                echo "Please enter your password<br>";
                                echo '<br>';
                                echo '<br>';
                            }else{
                                $password = $_POST['password'];
                            }
                            if($fullname && $email && $username && $password)
                            {
                                require_once("api/connect.php");
                                $sql = "SELECT * FROM user where userName ='$username'AND userEmail = '$email'";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0)
                                {
                                    echo 'Username hoặc email đã tồn tại';
                                    echo '<br>';
                                    echo '<br>';
                                }else{
                                    $sql = "INSERT INTO user(
                                            userName,
                                            userFullName,
                                            userPassword,
                                            userEmail,
                                            userImg,
                                            userType
                                            ) VALUES (
                                            '$username',
                                            '$fullname',
                                            '$password',
                                            '$email',
                                            './img/default.png',
                                            'standard'
                                            )";
                                            mysqli_query($conn,$sql);
                                            $_SESSION['userEmail'] = $email;
                                            include_once("registersuccess.php");
                                            header("Location: signin.php");
                                            echo 'Bạn đã đăng ký thành công';
                                            echo '<br>';
                                            echo '<br>';
                                }
                            }
                        }
                    ?>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="register-btn">Đăng ký</button>
            </div>
        </form>
    </main>
    <div class="mt-3 text-center">
        <p>Bạn đã có tài khoản? <a href="signin.php">Đăng nhập.</a></p>
    </div>

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
    
</body>
</html>


                    
                    
                    