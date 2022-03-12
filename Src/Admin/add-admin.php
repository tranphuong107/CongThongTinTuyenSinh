<?php
    include ('header.php');
    include ('../config.php');
?>
    <div class="content">
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin">
                                    <a href="index.php">
                                        <span class=" ">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item text-admin ">
                                    <a href="mng-account.php">
                                        <span class=" ">Quản lý tài khoản </span>
                                    </a></li>
                                <li class="breadcrumb-item active text-admin">
                                    <a href="add-admin.php">
                                        <span class="">Thêm tài khoản</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;">
            <h2>Thêm tài khoản</h2>
            <form action="process-add.php" method="post">
                <div class="form-group row m-3">
                        <label for="adname" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="adname" name="UserName" >
                        </div>
                    </div>
                <div class="form-group row m-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mât khẩu</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="ad_pass" name="Passwords">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Họ và tên</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullname" name="FullName">
                    </div>
                </div>
    
                <div class="form-group row m-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ad_email" name="Email">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ad_phone" name="PhoneNumber">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="ad_types" class="col-sm-2 col-form-label" >Loại tài khoản</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="ad_type">
                            <option>Quản trị viên</option>
                            <option>Thành viên</option>
                        </select>
                    </div>   
                </div> 
    
                <div class="form-group row m-3">
                    <label for="adpassag" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-10">
                        <input type="pass" class="form-control" id="ad_passag" name="ad_passga">
                    </div>
                </div >
                <div class="row">
                    <div></div>
                                <div class="col-6"></div>
                                    <div class="col-6 d-flex justify-content-center ">
                                    <button type="submit" class="btn  text-white px-5 fs-6  " style="background-color:#2e86de; margin-left:100px;margin-bottom:10px;margin-top:20px" name ="btnadmin">Lưu</button>
                                    <a href="mng-account.php" class="btn  text-white px-5 fs-6 mx-5" style="background-color:#2e86de;margin-left:100px;margin-bottom:10px;margin-top:20px" name ="btncancel">Hủy</a>
                                    </div>
                                    </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "js/myjs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cropper/1.0.1/jquery-cropper.js" integrity="sha512-7H4tikIFoyAdYD31w/uNYvvAUL6gyunWXLwTQ7ZXkyjD+brw+PfJpLxFkANnbkKnSJzU89YpnF3fJKbpvV+QYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#content-ckeditor'))
        .catch(error => {
            console.error(error)
        });
    </script>
</body>
</html>