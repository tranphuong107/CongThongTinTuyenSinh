<?php include "hearder.php"?> 
<?php include "config.php"?>
<nav class="navbar navbar-light bg-img">
        <div class="container-fluid1">
            <form class="d-flex mx-auto col-md-6"id="search"  action=""method="GET">
                <input  type="text"value=""name ="search" class="form-control me-2" placeholder="Tìm kiếm tài khoản.." aria-label="Search">
                <input class ="btn btn-outline-success" type="submit" value="Tìm">
            </form>     
        </div>
        <!-- end container-fluid -->
    </nav>
<?php

$search=isset($_GET['search'])?$_GET['search']:"";
  if($search){
     $where="WHERE `UserName` LIKE '%".$search."%'";
 }
       
 if($search){
    
   $sql= mysqli_query($conn,"SELECT*FROM users WHERE `UserName` LIKE '%".$search."%' ORDER BY `UserName` ASC") ;
     $result = mysqli_query($conn,"SELECT * FROM users WHERE `UserName` LIKE '%".$search."%'"); 
 }else{
     $sql= mysqli_query($conn,"SELECT*FROM users  ORDER BY 'UserID'  ASC") ;
    $result = mysqli_query($conn,"SELECT * FROM users");
 }
?>
            <div class="status">
                    <div class="col-sm-4">
                    <input  type="text"value=""name ="status" class="form-control me-2" placeholder="Chọn trạng thái.." aria-label="Status">
                </div>   
            <div>
            <div class="them">
        <a href="add-admin.php"><i class="bi bi-plus-square-fill"style="color: green"></i></a>
    </div>
<main>

<div class = "container-tb">
    
    <table class="table table-bordered">
        <div class="table-responsive">           
                <thead>
                    <tr> 
                        <th scope ="col">Mã</th>
                        <th scope ="col">Tên người dùng</th>
                        <th scope ="col">Mật khẩu</th>
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
                           echo '<td>'.$row['Password'].'</td>';
                           echo '<td>'.$row['FullName'].'</td>';
                           echo '<td>'.$row['Email'].'</td>';
                           echo '<td>'.$row['PhoneNumber'].'</td>';
                           echo '<td>'.$row['Types'].'</td>';
                           echo '<td' .$row['Status'].'</td>';
                           echo '<td><a href="<?php echo SITEURL; ?>admin/edit_pro.php?id=<?php echo $ad_id;  ?>"><i class="bi bi-toggle-on"></i></i></a></td>';
                           echo'<td>
                           <a href="<?php echo SITEURL; ?>admin/edit_pro.php?id=<?php echo $ad_id;  ?>"><i class="bi bi-toggle-on"></i></i></a>
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
    
<?php?>