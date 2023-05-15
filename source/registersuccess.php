<?php
//Gửi mail khi đăng ký 
    require_once("api/connect.php");
		require("./PHPMailer-master/src/PHPMailer.php");
		require("./PHPMailer-master/src/SMTP.php");
		require("./PHPMailer-master/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "nhattan3105.forwork@gmail.com";
    $mail->Password = "cqwttgipvawxlmpc";
    $mail->SetFrom("nhattan3105.forwork@gmail.com");
    $mail->Subject = "[Music Paradise] Congratulations, you have successfully registered!";
    $mail->Body = "Congratulations, you have successfully registered!
    MUSIC is the strongest form of Magic!
    © MUSIC PARADISE Corp. All rights reserved
    Địa chỉ: Tầng 50, Tòa nhà Landmark 81, Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh.
    Email: musicparadise@mpd.com
    ĐT: 0379128127";
    $email  = $_SESSION['userEmail'];
    $mail->AddAddress($email);
			
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
				header("Refresh:3; url=signin.php");
     } else {
        echo "Message has been sent";
				header("Refresh:3; url=signin.php");
     }
?>