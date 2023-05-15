<?php
echo'
<div class="tab-pane" id="topChartManage">
<h3 class=" mt-3 mb-3" style="color: white;">Quản lí TOP Chart</h1>
<div class="row">
    <div class="col-md-3">
        <form class="form-horizontal w-100">
            <div class="form-group">
                <label class="control-label" for="songID">Mã bài hát</label>
                <input type="text" class="form-control" id="songID" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="songName">Tên bài hát</label>
                <input type="text" class="form-control" id="songName" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="songImg">Ảnh bài hát</label>
                <input type="text" class="form-control" id="songImg" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="songPath">File mp3</label>
                <input type="text" class="form-control" id="songPath" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label " for="songLyric">Lời bài hát</label>
                <input type="text" class="form-control" id="songLyric" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="songDuration">Thời lượng</label>
                <input type="text" class="form-control" id="songDuration" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label " for="genreID">Mã thể loại</label>
                <input type="text" class="form-control" id="genreID" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label class="control-label" for="artistID">Mã nghệ sĩ</label>
                <input type="text" class="form-control" id="artistID" placeholder="">
            </div>

            <div class="form-group  mt-3">
                <button id="addBtn" type="button" class="btn btn-success add-Song">Thêm</button>
                <button id="updateBtn" type="submit" class="btn btn-success disabled">Cập nhật</button>
            </div>
        </form>
    </div> 
    <div class="col-md-9">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th id="songID">Mã bài hát</th>
                <th id="songName">Tên bài hát</th>
                <th id="songDuration">Thời lượng</th>
                <th id="genreID">Mã thể loại</th>
                <th id="artistID">Mã nghệ sĩ</th>
                <th id="action">Hành động</th>
            </tr>
            </thead>
            <tbody id="table-body">';
                    require_once("api/connect.php");
                    $sql = "SELECT *
                    FROM song
                    ORDER BY songLiked desc
                    limit 10";
                    $result = mysqli_query($conn, $sql);
                    while($row = $result->fetch_assoc()){
                        echo '
                        <tr>
                        <th>'.$row['songID'].'</th>
                        <td>'.$row['songName'].'</td>
                        <th>'.$row['songDuration'].'</th>
                        <td>'.$row['genreID'].'</td>
                        <th>'.$row['artistID'].'</th>
                        <td>
                        <button id="addsongBtn" type="button" class="btn btn-danger add-Song">Xóa</button>
                        <button id="updatesongBtn" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                        </td>
                        </tr>
                        ';
                    }
                echo'
            </tbody>
        </table>
    </div> 
</div>
</div>';
?>