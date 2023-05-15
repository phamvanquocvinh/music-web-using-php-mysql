<?php
echo '
<div class="tab-pane" id="playlistManage">
<h3 class=" mt-3 mb-3" style="color: white;">Quản lí playlist</h1>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100">
                <div class="form-group">
                    <label class="control-label" for="playlistID">Mã playlist</label>
                    <input type="text" class="form-control" id="playlistID" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="platlistName">Tên playlist</label>
                    <input type="text" class="form-control" id="playlistName" placeholder="">
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
                    <th id="playlistID">Mã thể playlist</th>
                    <th id="playlistName">Tên playlist</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">
                    <!-- load playlist -->';
                    
                        require_once("api/connect.php");
                        $sql = "SELECT * FROM playlist";
                        $result = mysqli_query($conn, $sql);
                        while($row = $result->fetch_assoc()){
                            echo '
                            <tr>
                            <th>'.$row['playlistID'].'</th>
                            <td>'.$row['playlistName'].'</td>
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