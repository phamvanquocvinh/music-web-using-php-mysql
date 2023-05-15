<?php
//Quản lý bình luận 
echo'
<div class="tab-pane" id="commentManage">
<h3 class=" mt-3 mb-3" style="color: white;">Quản lí bình luận</h1>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100">
                <div class="form-group">
                    <label class="control-label" for="userName">Tên người dùng</label>
                    <input type="text" class="form-control" id="userName" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="songID">Mã bài hát</label>
                    <input type="text" class="form-control" id="songID" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="commentDetail">Nội dung</label>
                    <input type="text" class="form-control" id="commentDetail" placeholder="">
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
                    <th id="userName">Tên người dùng</th>
                    <th id="songID">Mã bài hát</th>
                    <th id="commentDetail">Nội dung</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">
                    <!-- load cmt -->
                    ';
                            require_once("api/connect.php");
                            $sql = "SELECT *
                            FROM comment";
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()){
                                echo '
                                <tr>
                                <th>'.$row['userName'].'</th>
                                <td>'.$row['songID'].'</td>
                                <th>'.$row['commentDetail'].'</th>
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