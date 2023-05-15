<?php
echo'
<div class="tab-pane" id="topArtManage">
<h3 class=" mt-3 mb-3" style="color: white;">Quản lí TOP Artist</h1>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100">
                <div class="form-group">
                    <label class="control-label" for="artistID">Mã nghệ sĩ</label>
                    <input type="text" class="form-control" id="artistID" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="artistName">Tên nghệ sĩ</label>
                    <input type="text" class="form-control" id="artistName" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="artistImg">Ảnh nghệ sĩ</label>
                    <input type="text" class="form-control" id="artistImg" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="artistStory">Story</label>
                    <input type="text" class="form-control" id="artistStory" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="artistAward">Thành tựu</label>
                    <input type="text" class="form-control" id="artistAward" placeholder="">
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
                    <th id="artistID">Mã nghệ sĩ</th>
                    <th id="artistName">Tên nghệ sĩ</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">

                    <!-- load top 10 artist -->';
                    
                        require_once("api/connect.php");
                        $sql = "SELECT *
                        FROM song
                        ORDER BY songLiked desc
                        limit 10";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            $artID = $row['artistID'];
                            $sql1 = "SELECT * FROM artist WHERE artistID = '$artID'";
                            $result1 = mysqli_query($conn, $sql1);
                            while($row1=$result1->fetch_assoc()){
                                echo '
                                <tr>
                                <th>'.$row1['artistID'].'</th>
                                <td>'.$row1['artistName'].'</td>
                                <td>
                                <button id="addsongBtn" type="button" class="btn btn-danger add-Song">Xóa</button>
                                <button id="updatesongBtn" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                                </td>
                                </tr>
                                ';
                            }
                        }
                    echo '
                </tbody>
            </table>


        </div> 
    </div>
</div>';
?>