<?php
//Chỉnh sửa thông tin tài khoản
session_start();
$fullname = $_POST['fullname'];

$username = $_SESSION['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
$cfpassword = $_POST['cfpassword'];

$conn =  new mysqli("localhost","root","","db_nhac");
    mysqli_select_db($conn, "db_nhac");
    $sql = "SELECT * FROM user WHERE userName = '$username' AND userPassword = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        if($newpassword == $cfpassword){
            $sql1 = "UPDATE user SET userFullName = '$fullname', userPassword = '$newpassword', userEmail ='$email' WHERE userName = '$username'";
            mysqli_query($conn, $sql1);
            header("Location: ..\profile.php");

        }else{
            echo "<script>alert('Mật khẩu và xác nhận mật khẩu mới không trùng');</script>";
            header( "refresh:1;url=..\profile.php" );
        }
    }else{
            echo "<script>alert('Nhập sai mặt khẩu cũ');</script>";
            header( "refresh:1;url=..\profile.php" );
    }

    

?>