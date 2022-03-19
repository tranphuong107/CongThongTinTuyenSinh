<?php
    include ('header.php');
    include ('../config.php');
?>
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
    <div class="content" >
        <div class="row float-end col-md-8 my-2 mt-3  py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron  text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin ">
                                    <a href="index.php">
                                        <span class=" ">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item text-admin ">
                                    <a href="mng-article.php">
                                        <span class="text-admin ">Quản lý bài viết</span>
                                    </a></li>
                                <li class="breadcrumb-item active text-admin">
                                    <a href="add-post.php">
                                        <span class="text-admin ">Thêm bài viết</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;">
                    <h4 class ="m-2 p-2 ms-3 mb-4 fw-bold">Thêm bài viết</h2>
                    <form action ="process-add-post.php" method ="post" class=" mx-3 ps-5 rounded-3 " style =" border-radius: 30px">
                        <div class="row ">
                            <div class="mb-3 col-7 ">
                                <label for="" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control border border-dark me-4" style="width:87%;" id="" name ="txt-title">
                            </div>

                            <div class="col-5">
                                <div  class = " text-begin pb-2 ">Hình ảnh: </div> 
                                <input type="file" name="txt-image" id ="imageFile" value="Chọn ảnh" onchange="chooseFile(this)" accept= "image/gif, image/jpeg, image/png"/> 
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="mb-3 col-7 pt-2 ">
                                <label class=" me-4 "for="cars">Danh mục: </label>
                                <select class ="p-2 border border-dark rounded-3 " name="txt-category" id="category">
                                <option value="" selected disabled hidden>Chọn danh mục</option>
                                <option value="Giới thiệu">Giới thiệu</option>
                                <option value="Thông tin tuyển sinh">Thông tin tuyển sinh</option>
                                <option value="Ngành đào tạo">Ngành đào tạo</option>
                                </select>
                                <div class="mb-3 col-7 mt-3">
                                <div class="mb-3 py-2">
                                    <label for="" class="form-label">ID Người tạo:</label>
                                    <input type="text" class="form-control border border-dark" style="width:87%;" id="" name ="txt-userid">
                                </div>
                            </div>
                            </div>
                            <div class="col-5">
                            <img src="" alt="" id="image" style = "width:200px; height:150px;">
                            </div>
                           
                            
                        </div>
                        <div class="row ">
                            <div class="mb-3 ">
                                <div class="mb-3 noidung ms-4">
                                    <label for="" class="form-label" style="margin-left:-20px;">Nội dung:</label>
                                    <textarea type="" class="form-control border border-dark " style="height:150px; width:70%;" id="summernote" name ="txt-content" ></textarea>
                                
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">

                            <div></div>
                            <div class="col-6"></div>
                            <div class="col-6 d-flex justify-content-center ">
                            <button type="submit" class="btn  text-white px-5 fs-6  " style="background-color:#2e86de; margin-left:80px;" name ="btnadd">Lưu</button>
                            <a href="mng-article.php" class="btn  text-white px-5 fs-6 mx-5" style="background-color:#2e86de;" name ="btncancel">Hủy</a>
                            </div>
                        </div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- <script src="../ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#content-ckeditor'))
        .catch(error => {
            console.error(error)
        });
    </script> -->
    <script>
    $(document).ready(function() {
        $("#summernote").summernote();
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>
</html>