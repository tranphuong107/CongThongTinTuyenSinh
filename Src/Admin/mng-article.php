<?php
    include ('header.php');
    include ('../config.php');
?>
<style>
    .box{
        width: 100%;
        margin-left: 2%;
        float:left;
    
    }
    .box-img{
        width: 40%;
        float: left;
    }
    .img-responsive{
        width: 100%;
    }
    .box-text{
        width: 55%;
        height:100%;
        float: left;
        margin-left: 5%;
    }
    .box-text1{
        width: 50%;
        float: left;
    }
    .box-text p{
        margin-bottom:0.2rem;
    }
    .box1{
        width: 100%;
        float: left;
        margin-left: 2%;
    }
</style>
<div class="content "  >
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin">
                                    <a href="index.php">
                                        <span class="">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item  text-admin">
                                    <a href="#">
                                        <span class="">Quản lý bài viết</span>
                                    </a></li>
                                <li class="breadcrumb-item active text-admin ">
                                    <a href="#">
                                        <span class="">Danh sách bài viết</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 100%">
            <div class="">
                <div class="">
                    <h4 class ="m-2 p-2 ms-3 fw-bold"><img src="https://img.icons8.com/ios/30/000000/edit-property.png"/></i>  Danh sách bài viết</h2>
                </div>
                <div class=" p-3 ">
                    <p>
                <form action="search.php" method="get">
                <input type="text"  class="my-2 p-2 border-0 rounded-2 " style="width: 300px; background-color:#f1f2f6;" name="search" placeholder="Tìm kiếm bài viết..."value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>">
                <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #1e1d1d ">
                <a href="add-post.php" id = "add-btn" style = "font-size: 2.5rem;float:right;"><i class="far fa-plus-square"></i></a>
                  </p> 
            </form>
                </div>
            </div>
            
            <div class="list-article">
                <div class="">
                    <h5><a href="index.php" style="color: #0073b4"></i><span>Trang chủ</span></a></h5>
                    <?php
                            //kết nối csdl
                            //thực hiện truy vấn
                            $sql = "SELECT * FROM posts p,users u where Category = 'Giới thiệu' and p.UserID = u.UserID";
                            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5  px-4 pb-5">';
                while($row = mysqli_fetch_assoc($result)){?>
<!-- start thang -->
<!--                     <div class="col-6 d-flex"> -->
<!--                     <div class="box1"> -->
<!--                     <div class="box-img me-4"> -->
<!--                         <img src="../Images/<?php echo $row['Image']?>" alt="Ảnh" class="img-responsive"> -->
<!--                     </div> -->
<!--                     <div class="box-text1"> -->
<!--                         <h6>   <?php echo $row['Title']?></h6> -->
<!--                         <p style="color:#878787"><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>    <?php echo $row['CreatedAt']?></p> -->
<!--                         <p style="color:#878787"><i class="fa fa-user" aria-hidden="true" style="color:#FF5F5D"></i>    <?php echo $row['UserName']?></p> -->
                  <!--icon sửa     <p style="color:#878787"><i class="bi bi-pencil-square" aria-hidden="true" style="color:#FF5F5D;font-size: 1.25rem"></i>-->
                   <!--icon xóa     <a href="delete.php?id=<?php echo $row['PostID'];?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" name="delete" style = "font-size: 1.25rem;float:right;color:#FF5F5D;margin-right:100px"><i class="bi bi-trash"></i></a>-->
<!-- end thang -->
                    <div class="col-6 d-flex  pe-0">
                        <div class="box">
                            <div class="box-img  ">
                                <img src="../Images/<?php echo $row['Image']?>" alt="Ảnh" class="img-responsive">
                            </div>
                            <div class="box-text  ">
                                <h6>   <?php echo $row['Title']?></h6>
                                <p style="color:#878787; "><i class="fa fa-calendar pe-1" aria-hidden="true" style="color:#FF5F5D"></i><?php echo $row['CreatedAt']?></p>
                                <p style="color:#878787;"><i class="fa fa-user pe-1" aria-hidden="true" style="color:#FF5F5D"></i>    <?php echo $row['UserName']?></p>
                                <div class="row">
                                    <div class="col-6 ">
                                        <a href="update-post.php?id=<?php echo $row['PostID']?>" class="float-end" style="color:#878787"><i class="fa fa-edit" aria-hidden="true" style="color:#FF5F5D"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" style="color:#878787"><i class="fa fa-trash-alt" aria-hidden="true" style="color:#FF5F5D"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
               <?php }
                echo'</div>';
            }
                            
                        ?>
                    <!-- <div class="box">
                        <div class="box-img">
                            <img src="https://phothongcaodang.fpt.edu.vn/wp-content/uploads/AU0U5527-2-1024x683.jpg" alt="Ảnh" class="img-responsive">
                        </div>
                        <div class="box-text">
                            <h6>PHƯƠNG ÁN TUYỂN SINH ĐẠI HỌC CHÍNH QUY</h6>
                            <p style="color:#878787"><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>  1 tuần trước</p>
                            <p style="color:#878787"><i class="fa fa-eye" aria-hidden="true" style="color:#FF5F5D"></i>  3024</p>
                            <p style="color:#878787"><i class="fa fa-user" aria-hidden="true" style="color:#FF5F5D"></i>  Bá Tân</p>
                            <p style="color:#878787"><i class="fa fa-comment" aria-hidden="true" style="color:#FF5F5D"></i>  15</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-img">
                            <img src="https://thucte.vn/uploads/images/2021/04/07/hs-danbao-1617786537.jpg" alt="Ảnh" class="img-responsive">
                            </div>
                            <div class="box-text">
                                <h6>KẾT QUẢ XÉT TUYỂN VÀ NHẬP HỌC</h6>
                                <p style="color:#878787"><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>  2 ngày trước</p>
                                <p style="color:#878787"><i class="fa fa-eye" aria-hidden="true" style="color:#FF5F5D"></i>  945</p>
                                <p style="color:#878787"><i class="fa fa-user" aria-hidden="true" style="color:#FF5F5D"></i>  Đức Hải</p>
                                <p style="color:#878787"><i class="fa fa-comment" aria-hidden="true" style="color:#FF5F5D"></i>  234</p>
                            </div>
                        </div>
                </div> -->
                <div>
                    <h5><a href="index.php" style="color: #0073b4"></i><span>Thông tin tuyển sinh</span></a></h5>
                    <?php
                            //kết nối csdl
                            //thực hiện truy vấn
                            $sql = "SELECT * FROM posts p,users u where Category = 'Thông tin tuyển sinh' and p.UserID = u.UserID";
                            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5 px-4 pb-5">';
                while($row = mysqli_fetch_assoc($result)){?>
                    <div class="col-6 d-flex  pe-0">
                    <div class="box">
                    <div class="box-img ">
                        <img src="../Images/<?php echo $row['Image']?>"  alt="Ảnh" class="img-responsive">
                    </div>
<!-- thang -->
<!--                     <div class="box-text"> -->
<!--                         <h6><?php echo $row['Title']?></h6> -->
<!--                         <p style="color:#878787"><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>  <?php echo $row['CreatedAt']?></p> -->
<!--                         <p style="color:#878787"><i class="fa fa-user" aria-hidden="true" style="color:#FF5F5D"></i>  <?php echo $row['UserName']?></p> -->
                      <!--icon sửa  <p style="color:#878787"><i class="bi bi-pencil-square" aria-hidden="true" style="color:#FF5F5D;font-size: 1.25rem"></i>--> 
                     <!--icon xóa   <a href="delete.php?id=<?php echo $row['PostID'];?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" name="delete" style = "font-size: 1.25rem;float:right;color:#FF5F5D;margin-right:100px"><i class="bi bi-trash"></i></a>--> 
<!--end thang -->
                    <div class="box-text " >
                        <h6 style="height:70px;"><?php echo $row['Title']?></h6>
                        <p style="color:#878787 "><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>  <?php echo $row['CreatedAt']?></p>
                        <p style="color:#878787"><i class="fa fa-user pe-1 pt-1" aria-hidden="true" style="color:#FF5F5D"></i><?php echo $row['UserName']?></p>
                        <div class="row">
                            <div class="col-6 ">
                                <a href="update-post.php?id=<?php echo $row['PostID']?>" class="float-end" style="color:#878787"><i class="fa fa-edit" aria-hidden="true" style="color:#FF5F5D"></i></a>
                            </div>
                            <div class="col-6">
                                <a href="#" style="color:#878787"><i class="fa fa-trash-alt" aria-hidden="true" style="color:#FF5F5D"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               
               <?php }
                echo'</div>';
            }
                            
                        ?>
                <div>
                    <h5><a href="index.php" style="color: #0073b4"></i><span>Ngành đào tạo</span></a></h5>
                    <?php
                            //kết nối csdl
                            //thực hiện truy vấn
                            $sql = "SELECT * FROM posts p,users u where Category = 'Ngành đào tạo' and p.UserID = u.UserID";
                            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5  px-4 pb-5">';
                while($row = mysqli_fetch_assoc($result)){?>
                    <div class="col-6 d-flex pe-0">
                    <div class="box">
                    <div class="box-img">
                        <img src="../Images/<?php echo $row['Image']?>" alt="Ảnh" class="img-responsive">
                    </div>
                    <div class="box-text">
                        <h6><?php echo $row['Title']?></h6>
                        <p style="color:#878787"><i class="fa fa-calendar" aria-hidden="true" style="color:#FF5F5D"></i>  <?php echo $row['CreatedAt']?></p>
                        <p style="color:#878787"><i class="fa fa-user" aria-hidden="true" style="color:#FF5F5D"></i>  <?php echo $row['UserName']?></p>
<!-- thang -->
                    <!--icon sửa    <p style="color:#878787"><i class="bi bi-pencil-square" aria-hidden="true" style="color:#FF5F5D;font-size: 1.25rem"></i>--> 
                     <!--icon xóa   <a href="delete.php?id=<?php echo $row['PostID'];?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" name="delete" style = "font-size: 1.25rem;float:right;color:#FF5F5D;margin-right:100px"><i class="bi bi-trash"></i></a>--> 
<!--end thang  -->
                        <div class="row">
                            <div class="col-6 ">
                                <a href="update-post.php?id=<?php echo $row['PostID']?>" class="float-end" style="color:#878787"><i class="fa fa-edit" aria-hidden="true" style="color:#FF5F5D"></i></a>
                            </div>
                            <div class="col-6">
                                <a href="#" style="color:#878787"><i class="fa fa-trash-alt" aria-hidden="true" style="color:#FF5F5D"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               
               <?php }
                echo'</div>';
            }
                        ?>
                <div class="clearfix"></div>
            </div>
        </div>
</div>