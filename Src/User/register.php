<?php
    include ('header.php');
    include ('../config.php');
?>
<ul class="nav nav-pills nav-fill bg-white my-1">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="enrollment-infor.php">THÔNG TIN TUYỂN SINH</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="training-industry.php">NGÀNH ĐÀO TẠO</a>
        </li>   
        <li class="nav-item">
                <a class="nav-link active" href="register.php">ĐĂNG KÍ XÉT TUYỂN</a>
            </li>
    </ul>

    <nav class= "bg-white px-3 py-1 my-1 text-align-center" style="height: 40px;"aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration: none; color:darkgray" href="index.php">TRANG CHỦ</a></li>
        <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration: none; color:darkgray" href="register.php">ĐĂNG KÍ XÉT TUYỂN</a></li>
    </ol>
    </nav>
<form action="process-register.php" method = "post" class = "bg-white p-5" enctype = "multipart/form-data">
    <H1 class = "p-3"><center>ĐĂNG KÍ XÉT TUYỂN HỌC BẠ ONLINE</center></H1>

    <!-- Thông tin thí sinh -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">THÔNG TIN THÍ SINH</h4>
</div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Họ và tên: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name" name = "name" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="gender" class = "col-1 col-form-label px-0">Giới tính: *</label>
        <div class= "col-7">
                <input type="radio" id="male" value="male" name = "gender" class = "px-1 mx-1" checked>Nam
                <input type="radio" id="female" value="female" name = "gender" class = "ms-5 me-1">Nữ
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="dob" class = "col-1 col-form-label px-0">Ngày sinh: *</label>
        <div class= "col-7">
            <input type="date" class = "form-control" id = "dob" name = "dob" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="aob" class = "col-1 col-form-labe px-0">Nơi sinh: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "aob" name = "aob" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="phone-number" class = "col-1 col-form-label px-0">Số điện thoại: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "phone-number" name = "phone-number" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="email" class = "col-1 col-form-label px-0">Email: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "email"  name = "email" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="ic" class = "col-1 col-form-label px-0">Số CMND/CCCD: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "ic" name = "ic" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
       <label for="" class = "col-2 col-form-label px-0">Ảnh CMND/CCCD: *</label>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
    
            <div class="col-4">
                Mặt trước: 
                <input type="file" name = "front-photo-ic" id = "front_photo_ic" accept = "image/jpg, image/jpeg, image/png" required>
            </div>
            <div class="col-4">
                Mặt sau:
                <input type="file" name = "back-photo-ic" id = "back_photo_ic" accept = "image/jpg, image/jpeg, image/png" required>
            </div>   
    </div>
    <div class="row p-2" style = "height: 250px">
        <div class = "col-2"></div>
            <div class="col-3 border border-dark border-2" id = "display_front_ic" style = "background-size: contain; background-repeat: no-repeat;">

            </div>
            <div class = "col-1"></div>
            <div class="col-3 border border-dark border-2" id = "display_back_ic" style = "background-size: contain; background-repeat: no-repeat;">
            
            </div>   
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="address" class = "col-1 col-form-label py-0 px-0">Hộ khẩu thường trú: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "address" name = "address" required>
        </div>
    </div>
    <!-- Thông tin xét tuyển -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">THÔNG TIN XÉT TUYỂN</h4>
</div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="school-name" class = "col-1 col-form-label  px-0">Trường THPT: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "school-name" name = "school-name" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="school-address" class = "col-1 col-form-label  px-0">Địa chỉ trường: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "school-address" name = "school-address" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="gra-year" class = "col-1 col-form-label  px-0">Năm tốt nghiệp: *</label>
        <div class= "col-7">
            <input type="number" class = "form-control" id = "gra-year" name = "gra-year" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="sum-score" class = "col-1 col-form-label  px-0">Điểm tổng kết lớp 12: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "sum-score" name = "sum-score" required>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="conduct" class = "col-1 col-form-label  px-0">Hạnh kiểm lớp 12: *</label>
        <div class= "col-7">
        <select class="form-select" aria-label="select aspiration" id = "conduct" name = "conduct" required>
                <option selected>Chọn hạnh kiểm</option>
                <option value="1">Tốt</option>
                <option value="2">Khá</option>
                <option value="3">Trung bình</option>
                <option value="4">Yếu</option>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="img-school-pro" class = "col-1 col-form-label  px-0">Ảnh học bạ: *</label>
        <div class= "col-7">
            <input type="file" class = "" id = "img_school_pro" name = "img-school-pro" accepted = ".png, .jpeg, .jpg" required>
        </div>
    </div>
    <div class="row p-2" style = "height: 250px">
    <div class = "col-2"></div>
            <div class="col-3 border border-dark border-2" id = "display_school_pro" style = "background-size: contain; background-repeat: no-repeat;">
            
            </div>  
    </div>
    <!-- Đăng kí nguyện vọng -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">ĐĂNG KÍ NGUYỆN VỌNG</h4>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="asp1" class = "col-1 col-form-label  px-0">Nguyện vọng 1: *</label>
        <div class= "col-4">
            <select class="form-select" aria-label="select aspiration" id = "asp1" name = "asp1" required>
                <option selected>Chọn ngành tuyển sinh</option>
                <option value="QTKD">Quản trị kinh doanh</option>
                <option value="KTQT">Kinh tế quốc tế</option>
                <option value="CNTT">Công nghệ thông tin</option>
                <option value="NNA">Ngôn ngữ Anh</option>
            </select>
        </div>
        <label for="obj1" class = "col-1 col-form-label  px-0">Khối tuyển sinh: *</label>
        <div class= "col-2">
        <select class="form-select" aria-label="select object" id = "obj1" name = "obj1" required>
            <option selected>Chọn khối tuyển sinh</option>
            <option value="A01">A01</option>
            <option value="A02">A02</option>
            <option value="D01">D01</option>
            <option value="D02">D02</option>
        </select>
        </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="asp2" class = "col-1 col-form-label  px-0">Nguyện vọng 2:</label>
        <div class= "col-4">
            <select class="form-select" aria-label="select aspiration" id = "asp2" name = "asp2" required>
                <option selected>Chọn ngành tuyển sinh</option>
                <option value="QTKD">Quản trị kinh doanh</option>
                <option value="KTQT">Kinh tế quốc tế</option>
                <option value="CNTT">Công nghệ thông tin</option>
                <option value="NNA">Ngôn ngữ Anh</option>
            </select>
        </div>
        <label for="obj2" class = "col-1 col-form-label  px-0">Khối tuyển sinh:</label>
        <div class= "col-2">
        <select class="form-select" aria-label="select object" id = "obj2" name = "obj2" required>
            <option selected>Chọn khối tuyển sinh</option>
            <option value="A01">A01</option>
            <option value="A02">A02</option>
            <option value="D01">D01</option>
            <option value="D02">D02</option>
        </select>
        </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="name" class = "col-2 col-form-label  px-0">Điểm các môn: *</label>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
    <label for="math" class = "col-1 col-form-label ps-5  px-0">Toán:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "math" name = "math" required>
    </div>
    <label for="literature" class = "col-1 col-form-label ps-5 px-0">Văn:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "literature" name = "literature" required>
    </div>
    <label for="english" class = "col-1 col-form-label ps-5  px-0">Anh:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "english" name = "english" required>
    </div>
    <label for="physic" class = "col-1 col-form-label ps-5 px-0">Lý:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "physic"  name = "physic" required>
    </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
    <label for="chemistry" class = "col-1 col-form-label ps-5  px-0">Hóa:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "chemistry" name = "chemistry" required>
    </div>
    <label for="history" class = "col-1 col-form-label ps-5 px-0">Sử:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "history" name = "history" required>
    </div>
    <label for="geography" class = "col-1 col-form-label ps-5  px-0">Địa:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "geography" name = "geography" required>
    </div>
    <label for="biology" class = "col-1 col-form-label ps-5 px-0">Sinh:</label>
    <div class= "col-1">
            <input type="text" class = "form-control" id = "biology" name = "biology" required>
    </div>
</div>
<div class="form-check p-3" style = "margin-left: 12rem">
  <input class="form-check-input" type="checkbox" value="" id="check" onclick = "enable()">
    Tôi xác nhận những thông tin trên là chính xác.

</div>
<div class = "row justify-content-end pe-5 me-5">
    <div class="col-2">
        <button type = "submit" class = "btn py-3 my-5 form-control rounded-3 bg-primary " id = "btn-register" name = "btn-register" disabled = "true">Đăng kí xét tuyển</button>
    </div>
    <div class="col-2">
    </div>
</div>
</form>
<script>
    function enable(){
        var check = document.getElementById("check");
        var btn = document.getElementById("btn-register");
        if(check.checked){
            btn.removeAttribute("disabled");
        }else{
            btn.disabled = "true";
        }
    }

    const image1 = document.querySelector("#front_photo_ic");
    const image2 = document.querySelector("#back_photo_ic");
    const image3 = document.querySelector("#img_school_pro");

    var upload_image1 = "";
    var upload_image2 = "";
    var upload_image3 = "";

    image1.addEventListener("change", function(){
        const reader1 = new FileReader();
        reader1.addEventListener("load", () => {
            upload_image1 = reader1.result;
            document.querySelector("#display_front_ic").style.backgroundImage = `url(${upload_image1})`;
        });
        reader1.readAsDataURL(this.files[0]);
    })

    image2.addEventListener("change", function(){
        const reader2 = new FileReader();
        reader2.addEventListener("load", () => {
            upload_image2 = reader2.result;
            document.querySelector("#display_back_ic").style.backgroundImage = `url(${upload_image2})`;
        });
        reader2.readAsDataURL(this.files[0]);
    })

    image3.addEventListener("change", function(){
        const reader3 = new FileReader();
        reader3.addEventListener("load", () => {
            upload_image3 = reader3.result;
            document.querySelector("#display_school_pro").style.backgroundImage = `url(${upload_image3})`;
        });
        reader3.readAsDataURL(this.files[0]);
    })
</script>
<?php
    include ('footer.php');
?>