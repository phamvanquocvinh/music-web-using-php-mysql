<?php 
//Quản lý user 
echo'
<div class="tab-pane" id="userManage">
<h3 class=" mt-3 mb-3" style="color: white;">Thêm người dùng</h1>
    <div class="row">
        <div class="col-md-3">
            <form class="form-horizontal w-100" action="api/admin/addUser.php" method="POST">
                <div class="form-group">
                    <label class="control-label" for="userName">Tên người dùng</label>
                    <input type="text" class="form-control" id="userName0" name="userName0" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userFullName">Họ và tên</label>
                    <input type="text" class="form-control" id="userFullName0" name="userFullName0" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userPassword">Mật khẩu</label>
                    <input type="text" class="form-control" id="userPassword0" name="userPassword0" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userEmail">Email</label>
                    <input type="text" class="form-control" id="userEmail0" name="userEmail0" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <select name="type" id="type">
                        <option value="standard">Standard</option>
                        <option value="premium">Premium</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button name="adduserBtn" type="submit" class="btn btn-success add-Song">Thêm</button>
                </div>
            </form>
            <h3 class=" mt-3 mb-3" style="color: white;">Cập nhật người dùng</h1>
            <form class="form-horizontal w-100" action="api/admin/updateUser.php" method="POST">
                <div class="form-group">
                    <label class="control-label" for="userName">Tên người dùng</label>
                    <input type="text" class="form-control" id="userName1" name="userName1" placeholder="">
                    <input type="hidden" class="form-control" id="userName2" name="userName2" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userFullName">Họ và tên</label>
                    <input type="text" class="form-control" id="userFullName1" name="userFullName1" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userPassword">Mật khẩu</label>
                    <input type="text" class="form-control" id="userPassword1" name="userPassword1" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userEmail">Email</label>
                    <input type="text" class="form-control" id="userEmail1" name="userEmail1" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label class="control-label" for="userType">Loại</label>
                    <input type="text" class="form-control" id="userType1" name="userType1" placeholder="">
                </div>

                <div class="form-group  mt-3">
                    <button id="addBtn" type="submit" class="btn btn-success add-Song">Cập nhật</button>
                </div>
            </form>


        </div> 
        <div class="col-md-9">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th id="userName">Tên người dùng</th>
                    <th id="userFullName">Họ và tên</th>
                    <th id="userPassword">Mật khẩu</th>
                    <th id="userEmail">Email</th>
                    <th id="userType">Loại</th>
                    <th id="action">Hành động</th>
                </tr>
                </thead>
                <tbody id="table-body">
                    <!-- load user -->';
                        
                            require_once("api/connect.php");
                            $sql = "SELECT *
                            FROM user";
                            $i = 0;
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()){
                                echo '
                                <tr>
                                <th>'.$row['userName'].'</th>
                                <td>'.$row['userFullName'].'</td>
                                <th>'.$row['userPassword'].'</th>
                                <td>'.$row['userEmail'].'</td>
                                <td>'.$row['userType'].'</td>
                                <td>
                                <a href="api/admin/deleteUser.php?s='.$row['userName'].'" class="btn btn-danger delete-Song">Xóa</a>
                                <button id="updateUser'.$i.'" type="submit" class="btn btn-success update-Song">Cập nhật</button>
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
</div>';

?>