<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/style.css">
    <!--script hiện ảnh-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
        function chooseFile(fileInput) {
            if(fileInput.files && fileInput.files[0]){//kiểm tra xem đã chọn file chưa
                var reader = new FileReader();// tạo đối tượng FileReader đọc thông tin của hình đã chọn
                reader.onload = function (e){ //gắn phương thức xử lý là khi hình nạp xong thì sẽ hiển thị ảnh
                    $('#image').attr('src',e.target.result);// thay đổi giá trị của src
                }
                reader.readAsDataURL(fileInput.files[0])//thực hiện đọc dl
            }
        }
    </script>
</head>
<body style="background-color:#dcdde1;">
<style>
    .content{
        position: relative;
    }
    .breadcrumb-item + .breadcrumb-item::before         {
        color:black;
    }
    .content a{
        text-decoration: none;
        color: black;
    }
    .noidung{
        width: 90%;
    }
    .container-ad{
        width: 80%;
        margin-left:300px;
        margin-top: 10px;
        text-align: left;
        }
    .breadcrumb-item :hover{
    font-weight: bold;
    }
    .btn :hover{
        background-color: white;
        color:#2e86de;
    }

</style>
<style>
      *{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
.sidebar{
    position: fixed;
    left: 0;
    width: 250px;
    height: 100%;
    background: #042331;
}
.sidebar ul a{
    display: block;
    height: 100%;
    width:100%;
    line-height: 65px;
    font-size: 20px;
    color:white;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(255, 255, 255, .1);
    border-bottom: 1px solid black;
}
ul li :hover a{
    padding-left: 50px;
}
  </style>

    <!-- header start  -->
    <div class="sidebar">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="mng-acticle.php"></i>Quản lý bài viết</a></li>
            <li><a href="mng-account.php"></i>Quản lý tài khoản</a></li>
        </ul>
    </div>
    
    <div class="content border border-dark">
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ">
                                    <a href="index.php">
                                        <span class="my-text ">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item  ">
                                    <a href="mng-account.php">
                                        <span class="my-text ">Quản lý tài khoản </span>
                                    </a></li>
                                <li class="breadcrumb-item active ">
                                    <a href="add-admin.php">
                                        <span class="my-text ">Thêm tài khoản</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        

                       
</body>
</html>
<main class="container-ad">
    <h2>Thêm tài khoản</h2>
        <form action="process-add.php" method="post">
        <div class="form-group row">
                <label for="adname" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="adname" name="UserName" >
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
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ad_email" name="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ad_phone" name="PhoneNumber">
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
  
            <div class="form-group row">
                <label for="adpassag" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                <div class="col-sm-10">
                    <input type="pass" class="form-control" id="ad_passag" name="ad_passga">
                </div>
            </div >
            
            <div></div>
                        <div class="col-6"></div>
                            <div class="col-6 d-flex justify-content-center ">
                            <button type="submit" class="btn  text-white px-5 fs-6  " style="background-color:#2e86de; margin-left:100px;margin-bottom:10px;margin-top:20px" name ="btnadd">Lưu</button>
                            <a href="mng-account.php" class="btn  text-white px-5 fs-6 mx-5" style="background-color:#2e86de;margin-left:100px;margin-bottom:10px;margin-top:20px" name ="btncancel">Hủy</a>
                            </div>
                            </div>
            </div>
            
        </form>
    </main>
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