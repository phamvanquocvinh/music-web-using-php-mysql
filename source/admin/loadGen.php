<?php
//Quản lý các chuyên mục/thể loại 
echo '
<div class="tab-pane" id="genreManage">
<h3 class=" mt-3 mb-3" style="color: white;">Quản lí thể loại</h1>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100">
                <div class="form-group">
                    <label class="control-label" for="genreID">Mã thể loại</label>
                    <input type="text" class="form-control" id="genreID" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="genreName">Tên thể loại</label>
                    <input type="text" class="form-control" id="genreName" placeholder="">
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
                    <th id="genreID">Mã thể loại</th>
                    <th id="genreName">Tên thể loại</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">
                    <!-- load the loai -->';
                    
                        require_once("api/connect.php");
                        $sql = "SELECT * FROM genre";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            echo '
                            <tr>
                            <th>'.$row['genreID'].'</th>
                            <td>'.$row['genreName'].'</td>
                            <td>
                            <button id="addsongBtn" type="button" class="btn btn-danger add-Song">Xóa</button>
                            <button id="updatesongBtn" type="submit" class="btn btn-success update-Song">Cập nhật</button>
                            </td>
                            </tr>
                            ';
                        }
                    echo '
                </tbody>
            </table>


        </div> 
    </div>
</div>';
?>