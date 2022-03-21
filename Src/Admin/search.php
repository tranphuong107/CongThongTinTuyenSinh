<?php
 include ('header.php');
 include ('../config.php');
        if(isset($_GET['btn-search']) && !empty($_GET['search'])){
            $keyword=$_GET['search'];
            $sql="SELECT * FROM posts p,users u WHERE p.UserID = u.UserID And
             p.Title LIKE '%$keyword%'";  
        }else{
            header("location: mng-article.php");
        }
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("Câu truy vấn sai!");
        }
    ?>
    <style>
    .box-img{
        width: 40%;
        float: left;
        height: 300px;
    }
    .img-responsive{
        width: 100%;
    }
   .box1{
        width: 100%;
        float: left;
        margin-left: 2%;
        height: 150px;
    }
    .box-text1{
        width: 50%;
        float: left;
        height: 300px;
    }
    .list-article{
        height: 0px;
        margin: 10px;
        position: relative;
        padding: 1%;
    }
</style>
<div class="content "  >
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin">
                                    <a href="#">
                                        <span class="">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item  text-admin">
                                    <a href="#">
                                        <span class="">Quản lý bài viết</span>
                                    </a></li>
                                <li class="breadcrumb-item active text-admin ">
                                    <a href="#">
                                        <span class="">Tìm kiếm bài viết</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
                    </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 1400px">
            <div class="">
                <div class="">
                    <h4 class ="m-2 p-2 ms-3 mb-3 fw-bold"><img src="https://img.icons8.com/ios/30/000000/edit-property.png"/></i>  Danh sách bài viết</h2>
                </div>
                <div class=" p-3 ">
                    <p>
                <form action="search.php" method="get">
                <input type="text"  class="my-2 p-2 border-0 rounded-2 " style="width: 300px; background-color:#f1f2f6;" name="search" placeholder="Tìm kiếm bài viết..."value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
                <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #1e1d1d ">
                  </p> 
            </form>
            </div>
            <div class="list-article">
                <div class="">
                    <h5><a href="#" style="color: #000000"></i><span>Kết quả tìm kiếm bài viết: "<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>"</span></a></h5>
                <?php
                if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5  px-4 pb-5">';
                while($row = mysqli_fetch_assoc($result)){?>
                    <div class="col-6 d-flex ">
                    <div class="box">
                    <div class="box-img pe-3">
                        <img src="../Images/<?php echo $row['Image']?>" alt="Ảnh" class="img-responsive">
                    </div>
                    <div class="box-text">
                        <h6 style="height:70px;"> <?php echo $row['Title']?></h6>
                        <p class="mb-1"style="color:#878787"><i class="fa fa-calendar " aria-hidden="true" style="color:#FF5F5D"></i>    <?php echo $row['CreatedAt']?></p>
                        <p style="color:#878787"><i class="fa fa-user pe-1 pt-1" aria-hidden="true" style="color:#FF5F5D"></i><?php echo $row['UserName']?></p>
                        <div class="row">
                                    <div class="col-6 ">
                                        <a href="update-post.php?id=<?php echo $row['PostID']?>" class="float-end" style="color:#878787"><i class="fa fa-edit" aria-hidden="true" style="color:#FF5F5D"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="delete.php?id=<?php echo $row['PostID'];?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');" name="delete" style="color:#878787"><i class="fa fa-trash-alt" aria-hidden="true" style="color:#FF5F5D"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
                </div>
               
               <?php }
                echo'</div>';
            }
            else{
                echo"Không tìm thấy bài viết";
            }         
                        ?>
                 <div class="clearfix"></div>
             </div>
        </div>           

      
       
       
      
     

    
           
