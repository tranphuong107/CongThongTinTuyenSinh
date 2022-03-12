<?php include "header.php"?> 
<?php include "../config.php"?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<div class="content border border-dark"  >
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ">
                                    <a href="index.php">
                                        <span class="my-text ">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item  ">
                                    <a href="mng-account.php">
                                        <span class="my-text ">Quản lý tài khoản</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
<nav class="navbar navbar-light bg-img">
        <div class="container-search">
            <form class="d-flex mx-auto col-md-6"id="search"  action="search.php"method="GET">
                <input  type="text"value=""name ="search" class="form-control me-2" style="margin-left:150px;width: 400px; height: 40px;"placeholder="Tìm kiếm tài khoản.." aria-label="Search">
                <input class ="btn btn-outline-success" type="submit" value="Tìm">
            </form>     
        </div>
        <!-- end container-fluid -->
    </nav>
<?php


?>
            <div class="status">
                    <div class="col-sm-2">
                        <input  type="text"value=""name ="status" class="form-control me-2" style=" width:400px;margin-left:260px;margin-top:5px;margin-bottom:10px;" placeholder="Chọn trạng thái.." aria-label="Status">
                </div>   
            <div>
                <?php 
    
 ?>
            <div class="them">
        <a href="add-admin.php"class="them"style = "font-size: 2.5rem;float:right;"><i class="bi bi-plus-square"style="color: green"></i></a>
    </div>
<main>
<style>


.btn-outline-success{
    width: 70px;
    height: 40px;
    margin-top: 0px;
    
}
    .container-tb{
        margin-left: 260px;
        margin-top: 0%;
        height: 500px;
        border:1px solid white;
        background-color: white;
    }
    .container-search{
        
        padding:0%;
        margin-top:100px;
        margin-bottom: 0px;
       
    }
    </style>
<div class = "container-tb">
  
    <table class="table table-bordered">
        <div class="table-responsive">           
                <thead>
                    <tr> 
                        <th scope ="col">Mã</th>
                        <th scope ="col">Tên người dùng</th>
                        <th scope ="col">Họ và tên</th>
                        <th scope ="col">Email</th>
                        <th scope ="col">Số điện thoại</th>   
                        <th scope ="col">Loại tài khoản</th>
                        <th scope ="col">Trạng thái</th> 
                        <th scope ="col">Hoạt động</th>                   
                       
                    </tr>
                   
                </thead>
        </div>
    
</div>
<tbody>
            <?php
                
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql    = "SELECT*FROM users";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                       while($row=mysqli_fetch_assoc($result)){
                           echo '<tr>';
                           echo '<th scope="row">'.$row['UserID'].'</th>';
                           echo '<td>'.$row['UserName'].'</td>';
                           echo '<td>'.$row['FullName'].'</td>';
                           echo '<td>'.$row['Email'].'</td>';
                           echo '<td>'.$row['PhoneNumber'].'</td>';
                           echo '<td>'.$row['Types'].'</td>';
                           echo '<td>' .$row['Status'].'</td>';
                           echo'<td>
                           <a href="<?php echo SITEURL; ?>admin/edit_pro.php?id=<?php echo $ad_id;  ?>"><i class="bi bi-toggle-on" ></i></i></a>
                           <a href="<?php echo SITEURL; ?>admin/delete_pro.php?id=<?php echo $ad_id; ?>";><i class="fa fa-trash"></i></a>
                           </td>';
                           echo '</tr>';
                    }
                }
                    
                ?>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
                </div>
    </main>
    
<?php