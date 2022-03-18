<?php

include ('header.php');  

?>

    <!-- <style>
        .left-column {
        width: 80%;
        height: 500px;
        background: white;
        float:left;
    }
        .right-column {
        width: 20%;
        height: 500px;
        background: #ddd;
        float:right;
    }
    </style> -->
    <ul class="nav nav-pills nav-fill bg-white my-1">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">TRANG CHỦ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="enrollment-infor.php">THÔNG TIN TUYỂN SINH</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="training-industry.php">NGÀNH ĐÀO TẠO</a>
            </li>
            
    </ul>

    <nav class= "bg-white px-3 py-1 my-1 text-align-center" style="height: 40px;"aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none; color:darkgray " href="index.php">TRANG CHỦ</a></li>
        </ol>
    </nav>
    <img src="../images/BG3.jpg" class="img-header img-reponsive" style="height: 400px; width:100% ;object-fit:cover;"alt="">
    <div class="row  mx-3">
        <div class="left-column my-4 col-6">
        <?php
        include ('../config.php');
        $sql ="SELECT * FROM posts WHERE Category='Giới thiệu'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_assoc($result)){
                echo '<div class="p-5">'.$row['Content'].'</div>';
                
            }
        }
        ?>
        </div>
        
        <div class="right-column my-4 py-4 ms-4 col-6 ">
            <p><span class="text-align-center  px-4 " >
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
