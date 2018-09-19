<div class="col-md-11" style="float: right">
    <table class="table">
                        <thead class="thead-inverse" style="background-color:black; color:white">
                            <tr>
                                <th style="text-align:center; font-size:15px">Thao tác hệ thông</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:13px">
                                    <tr style="background-color: white">
                                        <td>
                                            <a href="danhsachsinhvien/danh_sach_sinh_vien">
                                                <img src='admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg'><span class="btn-link" style="color:black">
                                            Danh sach sinh vien </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr style="background-color:white">
                                        <td>
                                            <form method="POST" action="danh_sach_giang_vien">
                                                <img src='admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg'><input type="submit" class="btn-link" name="go" value="Danh Sách Giảng Viên" style="color:black"/>
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    <tr style="background-color:white">
                                        <td>
                                            <form method="POST" action="danh_sach_giao_vu">
                                                <img src='admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg'><input type="submit" class="btn-link" name="go" value="Danh Sách Giáo Vụ " style="color:black"/>
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                    <tr style="background-color:white">
                                        <td>
                                            <form method="POST" action="danh_sach_bo_mon">
                                                <img src='admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg'><input type="submit" class="btn-link" name="go" value="Danh Sách Bộ Môn" style="color:black"/>
                                             {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                    <tr style="background-color:white">
                                        <td>
                                            <form method="POST" action="change_password">
                                                <img src="admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg"><input type="submit" class="btn-link" name="go" value="Đổi mật khẩu" style="color:black"/>
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                    
                                        <tr style="background-color:white">
                                        <td><button type="button" class="btn-link" data-toggle="modal" data-target="#updateInfor"><div style="color: black"><img src="admin_acsset/bootstrap/open-iconic-master/svg/calculator.svg"> Cập nhật thông tin cá nhân</div></button></td> 
                                    </tr>
                                    <tr style="background-color:white">
                                        <td><a href="index.php" style="color:black"><img src="admin_acsset/bootstrap/open-iconic-master/svg/power-standby.svg"> Đăng Bai Viet</a></td>
                                </tr>
                                   
                                <tr style="background-color:white">
                                        <td><a href="index.php" style="color:black"><img src="admin_acsset/bootstrap/open-iconic-master/svg/power-standby.svg"> Đăng xuất</a></td>
                                </tr>
                            </tbody>
                    </table>
</div>