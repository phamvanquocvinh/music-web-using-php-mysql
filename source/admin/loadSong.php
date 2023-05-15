<?php
//Quản lý bài hát 
echo '
<div class="tab-pane active" id="songManage">
<!-- THEM bài hát -->
<h3 class=" mt-3 mb-3" style="color: white;">Thêm bài hát</h1>
<div class="row">
    <div class="col-md-3">
    <form action="api/admin/addSong.php" method="post" enctype="multipart/form-data" class="form-horizontal w-100">
    <div class="form-group">
        <label class="control-label" for="songName">Tên bài hát</label>
        <input type="text" class="form-control" name="songName" id="songName" placeholder="">
    </div>
    <div class="form-group mt-2">
        <label class="control-label" for="songImg">Ảnh bài hát</label>
        <input type="file" class="form-control" name="songImg" id="songImg" placeholder="">
    </div>
    <div class="form-group mt-2">
        <label class="control-label" for="songPath">File mp3</label>
        <input type="file" class="form-control" name="songPath" id="songPath" placeholder="">
    </div>
    <div class="form-group mt-2">
        <label class="control-label " for="songLyric">Lời bài hát</label>
        <input type="file" class="form-control" name="songLyric" id="songLyric" placeholder="">
    </div>
    <div class="form-group mt-2">
        <label class="control-label" for="songDuration">Thời lượng</label>
        <input type="text" class="form-control" name="songDuration" id="songDuration" placeholder="">
    </div>
    <div class="form-group mb3">
        <div class="input-group-prepend">
            <label class="control-label" for="genreID">Tên thể loại</label>
        </div>
        <select class="custom-select" name="selectGenre" id="selectGenre">
            <option selected>Chọn</option>';
            
                $sql = "SELECT * FROM genre";
                $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()){
                    echo '<option value="'.$row['genreID'].'">'.$row['genreName'].'</option>';
                }echo'
                                                                  
        </select>
    </div>                                               
    <div class="form-group mb3">
        <div class="input-group-prepend">
            <label class="control-label" for="artistID">Tên nghệ sĩ</label>
        </div>
        <select class="custom-select" name="selectArtist" id="selectArtist">
            <option selected>Chọn</option>';
            
                $sql1 = "SELECT * FROM artist";
                $result1 = mysqli_query($conn, $sql1);
                while($row1 = $result1->fetch_assoc()){
                    echo '<option value="'.$row1['artistID'].'">'.$row1['artistName'].'</option>';
                }echo'
                                                                  
        </select>
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success" name="addsongBtn">Thêm</button>
    </div>
</form>

    <!-- FORM CAP NHAT -->
        <h3 class=" mt-3 mb-3" style="color: white;">Cập nhật bài hát</h1>                
        <form class="form-horizontal w-100" action="api/admin/updatesong.php" method="POST">
            <div class="form-group">
                <label class="control-label" for="songName">Tên bài hát</label>
                <input type="text" class="form-control" id="songName1" name="songName1" placeholder="">
                <input type="hidden" class="form-control" id="songNameHide" name="songNameHide" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="songDuration">Thời lượng</label>
                <input type="text" class="form-control" id="songDuration1" name="songDuration1" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="genID">Mã thể loại</label>
                <input type="text" class="form-control" id="genID1" name="genID1" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="artID">Mã nghệ sĩ</label>
                <input type="text" class="form-control" id="artID1" name="artID1" placeholder="">
            </div>
            <div class="form-group mt-3">
                <button id="updatesongBtn-form" type="submit" class="btn btn-success update-Song">Cập nhật</button>
            </div>
        </form>
        <script>

        </script>


    </div>
     
    <div class="col-md-9">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th id="songtID" name="songID">Mã nghệ sĩ</th>
                <th id="songName">Tên bài hát</th>
                <th id="songDuration">Thời lượng</th>
                <th id="genreID">Mã thể loại</th>
                <th id="artistID">Mã nghệ sĩ</th>
                <th id="action">Hành động</th>
            </tr>
            </thead>
            <tbody id="table-body">
                    <!-- load Song -->
                    ';
                    
                        require_once("api/connect.php");
                        $i = 0;
                        $sql = "SELECT * FROM song";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            
                            echo '
                            <tr>
                            <th>'.$row['songID'].'</th>
                            <td>'.$row['songName'].'</td>
                            <td>'.$row['songDuration'].'</td>
                            <td>'.$row['genreID'].'</td>
                            <td>'.$row['artistID'].'</td>
                            <td>
                            <a href="api/admin/deleteSong.php?s='.$row['songID'].'" class="btn btn-danger delete-Song">Xóa</a>
                            <button id="updatesongBtn'.$i.'" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                            </td>
                            </tr>
                            ';
                            $i++;
                        }
                    echo '
            </tbody>
            </table>
            </div> 
            </div>
            </div>
        ';
?>