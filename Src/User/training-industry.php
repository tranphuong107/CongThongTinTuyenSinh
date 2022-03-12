<?php include ('header.php');  ?>
<?php include('../config.php'); ?>
<!-- <style>
        .left-column {
    width: 80%;
    height: 1000px;
    background: white;
    float:left;
}
.right-column {
    width: 20%;
    height: 1000px;
    background: #ddd;
    float:right;
}
</style> -->
    <ul class="nav nav-pills nav-fill bg-white my-1">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="enrollment-infor.php">THÔNG TIN TUYỂN SINH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="training-industry.php">NGÀNH ĐÀO TẠO</a>
                </li>
                
    </ul>

    <nav class= "bg-white px-3 py-1 my-1 text-align-center" style="height: 40px;"aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration: none; color:darkgray" href="index.php">TRANG CHỦ</a></li>
        <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration: none; color:darkgray" href="training-industry.php">NGÀNH ĐÀO TẠO</a></li>
    </ol>
    </nav>

    <img src="../images/BG2.jpg" class="img-header " style="height: 500px; width:100% ;object-fit:cover;"alt="">
    <div class="row mx-3">
        <?php
            $sql = "SELECT * FROM posts WHERE Category = N'Ngành đào tạo'";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
              echo'<div class="left-column my-4 px-4" >';
              while($row = mysqli_fetch_assoc($result)){
                echo '<style type="text/css" scoped>';
                
                
                echo'</style>';
                
                    echo'<div class="row g-0 py-3">';
                        echo'<div class="col-md-4">
                            <a href="details-post.php?id='.$row['PostID'].'" >
                            <img src="../Images/'.$row['Image'].'" class="img-fluid " alt="...">
                            </a>
                        </div>';
                        echo'<div class="col-md-8">';
                        echo'  <div class="card-body">
                                <a href="details-post.php?id='.$row['PostID'].'" class="my-text">'.$row['Title'].'</a>
                                <p class="card-text">'.$row['CreatedAt'].'</p>
                                <p class="card-content" >'.substr($row['Content'],0,150).'</p>
                            </div>';
                       echo' </div>';
                   echo'</div>';
                   
                }
        echo'</div>';
            }
        ?>
        <div class="right-column my-4 py-4 ms-4 col-6 ">
            <p><span class="text-align-center  px-4" >
                TIN LIÊN QUAN</span></p>
            <ol>
                <li type="none">
                    <a style="text-decoration: none; color:black" href="#">Thông tin tuyển sinh</a>
                </li>
                <hr width="60%">
                <li type="none">
                    <a style="text-decoration: none; color:black" href="#">Đề án tuyển sinh</a>
                </li>
                <hr width="60%">
                <li type="none">
                    <a style="text-decoration: none; color:black" href="#">Quy chế tuyển sinh</a>
                </li>
                <hr width="60%">
            </ol>
        </div>
    </div>

<?php
    include ('footer.php');
?>