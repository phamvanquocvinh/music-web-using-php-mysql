<?php
require_once("../connect.php");

if(isset($_POST["addsongBtn"])) {
    if(($_POST["songName"] != "") && ($_POST["songDuration"] != "")){
      if(($_POST["selectGenre"] != "Chọn") && ($_POST["selectArtist"] != "Chọn")){
        $songName = $_POST["songName"];
        $songDuration = $_POST["songDuration"];
        $genreID = $_POST["selectGenre"];
        $artistID = $_POST["selectArtist"];
        $sql = "SELECT * from genre WHERE genreID = '$genreID'";
        $result = mysqli_query($conn, $sql);
        while($row = $result -> fetch_assoc())
        {
            switch ($row['genreName']) {
              case "EDM":
                $genre = "edm";
                break;
              case "Electric Dance":
                $genre = "electricaDance";
                break;
              case "Kpop":
                $genre = "kpop";
                break;
              case "Nhạc Trẻ":
                $genre = "nhacTre";
                break;
              case "Nhạc Trịnh":
                $genre = "nhacTrinh";
                break;
              case "Nhạc Trữ Tình":
                $genre = "nhacTruTinh";
                break;
              case "Pop":
                $genre = "pop";
                break;
              case "R&B":
                $genre = "rAndB";
                break;
              case "Rạp Việt":
                $genre = "rapViet";
                break;
              case "Rock":
                $genre = "rock";
                break;
              default:
                echo $row['genreName'];
            }
            
            $target_dir = '../../songs/'.$genre.'/musicImg'.'/';
            $target_dir1 = '../../songs/'.$genre.'/music'.'/';
            $target_dir2 = '../../songs/'.$genre.'/musicLyric'.'/';
            $musicImg = "songs/".$genre."/musicImg"."/".basename($_FILES["songImg"]["name"]);
            $music = "songs/".$genre."/music"."/".basename($_FILES["songPath"]["name"]);
            $musicLyric = "songs/".$genre."/musicLyric"."/".basename($_FILES["songLyric"]["name"]);
            $target_file = $target_dir . basename($_FILES["songImg"]["name"]);
            $target_file1 = $target_dir1 . basename($_FILES["songPath"]["name"]);
            $target_file2 = $target_dir2 . basename($_FILES["songLyric"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $mp3FileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $txtFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            $rand = rand(150,100000);
            $songID = "song".$rand;
            

            $sql1 = "INSERT INTO `song`(
                `songID`,
                `songName`,
                `songImg`,
                `songPath`,
                `songLyric`,
                `songDuration`,
                `songLiked`,
                `genreID`,
                `artistID`,
                `ratingStarAverage`
            )
            VALUES(
                '$songID',
                '$songName',
                '$musicImg',
                '$music',
                '$musicLyric',
                '$songDuration',
                0,
                '$genreID',
                '$artistID',
                0
            )";
            if (file_exists($target_file) || file_exists($target_file1) || file_exists($target_file2)) {
                $uploadOk = 0;
              }
              
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "txt" ) {
                $uploadOk = 0;
              }
              
              if($mp3FileType != "mp3") {
                $uploadOk = 0;
              }
              
              if($txtFileType != "txt") {
                  $uploadOk = 0;
              }
              
              if ($uploadOk == 0) {
                echo "File trùng hoặc file không được hỗ trợ";
              } else {
                if (move_uploaded_file($_FILES["songImg"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["songPath"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["songLyric"]["tmp_name"], $target_file2)) {
                  $result1 = mysqli_query($conn, $sql1);
                  echo "The file has been uploaded.";
                } else {
                  echo "Sorry, there was an error uploading your file.";
                }
              }
        }
      }
      else
      {
        echo "Hãy chọn đầy đủ thông tin";
      }
    }
    else{
      echo "Hãy nhập đầy đủ thông tin";
    }
    header("Location: ../../adminloading.php");
}
?>