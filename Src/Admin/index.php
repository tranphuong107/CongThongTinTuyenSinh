<?php
    include ('header.php');
    include ('../config.php');
?>


    <div class="content "  >
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
 
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin ">
                                    <a href="#">
                                        <span class="">Trang chủ</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 540px">
            <div class="main-content" style="margin: 5%" >
            <div class="main-content-item">
            <?php
            //sql query
            $sql = "SELECT * FROM posts";
            //Execute Query
            $res = mysqli_query($conn, $sql);
            //Count Rows
            $count = mysqli_num_rows($res);
            ?>
                <h1><?php echo $count; ?></h1>
                <span class="item-desc">BÀI VIẾT</span>
            </div>
            <div class="main-content-item">
            <?php
            //sql query
            $sql = "SELECT * FROM users";
            //Execute Query
            $res = mysqli_query($conn, $sql);
            //Count Rows
            $count = mysqli_num_rows($res);
            ?>
                <h1><?php echo $count; ?></h1>
                <span class="item-desc">TÀI KHOẢN</span>
            </div> 
            </div>
        </div>
<?php
    include('footer.php');
?>