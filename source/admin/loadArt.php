<?php
//Quản lý thông tin ca sĩ 
require_once("api/connect.php");
echo '
<div class="tab-pane" id="artistManage">
<h3 class=" mt-3 mb-3" style="color: white;">Thêm nghệ sĩ</h3>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100">
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
                    <button id="addBtn" type="button" class="btn btn-success add-Song">Thêm</button>                                                    </div>
            </form>
            <h3 class=" mt-3 mb-3" style="color: white;">Cập nhật nghệ sĩ</h3>
            <form class="form-horizontal w-100">
                <div class="form-group mt-2">
                    <label class="control-label" for="artistName">Tên nghệ sĩ</label>
                    <input type="text" class="form-control" id="artistName1" name="artistName1" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="artistImg">Ảnh nghệ sĩ</label>
                    <input type="text" class="form-control" id="artistImg1" placeholder="">
                </div>
                <div class="form-group  mt-3">
                    <button id="updateBtn" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                </div>
            </form>
        </div> 
        <div class="col-md-9">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th id="artistID">Mã nghệ sĩ</th>
                    <th id="artistName">Tên nghệ sĩ</th>
                    <th id="artistImg">Ảnh nghệ sĩ</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">
                    <!-- load artist -->';
                    
                        $i = 0;
                        $sql = "SELECT * FROM artist";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            echo'
                            <tr>
                            <th>'.$row['artistID'].'</th>
                            <td>'.$row['artistName'].'</td>
                            <td>'.$row['artistImg'].'</td>
                            <td>
                            <button id="addsongBtn" type="button" class="btn btn-danger add-Song">Xóa</button>
                            <button id="updatesongBtn1'.$i.'" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                            </td>
                            </tr>                          
                            ';
                            $i++;
                        }

                    echo'
                </tbody>
            </table>
        </div> 
    </div>
</div>
';

?>