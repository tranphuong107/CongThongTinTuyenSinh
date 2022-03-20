<?php
    include ('header.php');
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
<form action="" class = "bg-white p-5">
    <H1 class = "p-3"><center>ĐĂNG KÍ XÉT TUYỂN HỌC BẠ ONLINE</center></H1>

    <!-- Thông tin thí sinh -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">THÔNG TIN THÍ SINH</h4>
</div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Họ và tên: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Giới tính: *</label>
        <div class= "col-7">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male">
                <label class="form-check-label" for="inlineRadio1">Nam</label>
                <input class="form-check-input ms-5" type="radio" name="inlineRadioOptions" id="female" value="female">
                <label class="form-check-label" for="inlineRadio2">Nữ</label>
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Ngày sinh: *</label>
        <div class= "col-7">
            <input type="date" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-labe px-0">Nơi sinh: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Số điện thoại: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Email: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label px-0">Số CMND/CCCD: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
       <label for="name" class = "col-2 col-form-label px-0">Ảnh CMND/CCCD: *</label>
    </div>
    <div class="row p-2">
        <div class = "col-3"></div>
    
            <div class="col-4">
                Mặt trước: 
                <input type="file">
            </div>
            <div class="col-4">
                Mặt sau:
                <input type="file">
            </div>   
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label py-0 px-0">Hộ khẩu thường trú: *</label>
        <div class= "col-7">
            <input type="text" class = "form-control" id = "name">
        </div>
    </div>
    <!-- Thông tin xét tuyển -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">THÔNG TIN XÉT TUYỂN</h4>
</div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Trường THPT: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Địa chỉ trường: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Năm tốt nghiệp: *</label>
        <div class= "col-7">
            <input type="number" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Điểm tổng kết lớp 12: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Hạnh kiểm lớp 12: *</label>
        <div class= "col-7">
            <input type="email" class = "form-control" id = "name">
        </div>
    </div>
    <div class="row p-2">
        <div class = "col-2"></div>
            <label for="name" class = "col-1 col-form-label  px-0">Ảnh học bạ: *</label>
        <div class= "col-7">
            <input type="file" class = "" id = "name">
        </div>
    </div>

    <!-- Đăng kí nguyện vọng -->
<div class = "ms-5">
    <h4 class = "p-3 ms-5">ĐĂNG KÍ NGUYỆN VỌNG</h4>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="name" class = "col-1 col-form-label  px-0">Nguyện vọng 1: *</label>
        <div class= "col-4">
            <input type="text" class = "form-control" id = "name">
        </div>
        <label for="name" class = "col-1 col-form-label  px-0">Khối tuyển sinh: *</label>
        <div class= "col-2">
            <input type="text" class = "form-control" id = "name">
        </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="name" class = "col-1 col-form-label  px-0">Nguyện vọng 2:</label>
        <div class= "col-4">
            <input type="text" class = "form-control" id = "name">
        </div>
        <label for="name" class = "col-1 col-form-label  px-0">Khối tuyển sinh:</label>
        <div class= "col-2">
            <input type="text" class = "form-control" id = "name">
        </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
        <label for="name" class = "col-2 col-form-label  px-0">Điểm các môn: *</label>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
    <label for="name" class = "col-1 col-form-label ps-5  px-0">Toán:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5 px-0">Văn:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5  px-0">Anh:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5 px-0">Lý:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
</div>
<div class="row p-2">
    <div class = "col-2"></div>
    <label for="name" class = "col-1 col-form-label ps-5  px-0">Hóa:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5 px-0">Sử:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5  px-0">Địa:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
    <label for="name" class = "col-1 col-form-label ps-5 px-0">Sinh:</label>
    <div class= "col-1">
            <input type="number" class = "form-control" id = "name">
    </div>
</div>
<div class="form-check p-3" style = "margin-left: 12rem">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Tôi xác nhận những thông tin trên là chính xác.
  </label>
</div>
<div class = "row justify-content-end pe-5 me-5">
    <div class="col-2">
        <button class = "btn-primary p-3 form-control rounded-3 ">Đăng kí xét tuyển</button>
    </div>
    <div class="col-2">
    </div>
</div>
</form>

<?php
    include ('footer.php');
?>