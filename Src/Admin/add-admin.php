<?php include "hearder.php"?> 
<main class="container-ad">
    <h2>Thêm tài khoản</h2>
        <form action="process-add.php" method="post">
        <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ad_name" name="UserName">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mât khẩu</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="ad_pass" name="Passwords">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Họ và tên</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" name="FullName">
                </div>
            </div>
  
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ad_email" name="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="ad_phone" name="PhoneNumber">
                </div>
            </div>
            <div class="form-group row">
                <label for="ad_types" class="col-sm-2 col-form-label">Loại tài khoản</label>
                    <div class="col-sm-10">
                    <select class="form-control">
                        <option>Quản trị viên</option>
                        <option>Thành viên</option>
                    </select>
                </div>   
            </div> 
            <form<div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ad_status" name="Status">
                </div>
            </div>>
  
            <div class="form-group row">
                <label for="adpassag" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                <div class="col-sm-10">
                    <input type="pass" class="form-control" id="ad_passag" name="ad_passga">
                </div>
            </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
                <button href="mng-account.php" class="btn btn-success">Hủy</button>
    
            </div>
            
        </form>
    </main>