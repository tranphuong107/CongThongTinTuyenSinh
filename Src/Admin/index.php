<?php session_start(); 
    include ('header.php');
    include ('../config.php');
?>
<div class="content ">
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ">
                                    <a href="#">
                                        <span class="my-text ">Trang chủ</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2 mb-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 530px">
            <div class="main-content" style="margin: 5%" >
            <div class="main-content-item">
                <h2 class="item-tilte">6</h2>
                <span class="item-desc">BÀI VIẾT</span>
            </div>
            <div class="main-content-item">
                <h2 class="item-tilte">7</h2>
                <span class="item-desc">TÀI KHOẢN</span>
            </div> 
            </div>
    </div>
<?php
    include('footer.php');
?>