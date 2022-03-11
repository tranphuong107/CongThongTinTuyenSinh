<?php
    include ('header.php');
    include ('../config.php');
?>

<div class="content "  >
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ">
                                    <a href="#">
                                        <span class="my-text ">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item  ">
                                    <a href="#">
                                        <span class="my-text ">Quản lý bài viết</span>
                                    </a></li>
                                <li class="breadcrumb-item active ">
                                    <a href="#">
                                        <span class="my-text ">Danh sách bài viết</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 800px">
            <div class="">
                <div class="">
                    <h4 class ="m-2 p-2 ms-3 mb-3 fw-bold"><img src="https://img.icons8.com/ios/30/000000/edit-property.png"/></i>  Danh sách bài viết</h2>
                </div>
                <div class=" p-3 ">
                    <form action="" method ="post">
                            <input type="search"  class="my-2 p-2 border-0 rounded-2 " style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm bài viết...">
                            <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #1e1d1d ">
                            <a href="add-post.php" id = "add-btn" style = "font-size: 2.5rem;float:right;"><i class="far fa-plus-square"></i></a>

                    </form>
                </div>
            </div>
            <div class="list-article">
                <div class="">
                    <h5><a href="#" style="color: #0073b4"></i><span>Trang chủ</span></a></h5>
                    <div class="box">
                        Box 1
                    </div>
                    <div class="box">
                        Box 2
                    </div>
                </div>
                <h5><a href="#" style="color: #0073b4"></i><span>Thông tin tuyển sinh</span></a></h5>
                <h5><a href="#" style="color: #0073b4"></i><span>Ngành đào tạo</span></a></h5>
            </div>
        </div>
</div>