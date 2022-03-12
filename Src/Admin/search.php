<?php include "header.php" ?>
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
<?php
        $search=isset($_POST['search'])?$_POST['search']:"";
        if($search){
            $where="WHERE `UserName` LIKE '%".$search."%'";
        }
             
      if($search){
          
          $sql= mysqli_query($conn,"SELECT*FROM users WHERE `UserName` LIKE '%".$search."%' ORDER BY `UserName` ASC") ;
          $result = mysqli_query($conn,"SELECT * FROM users WHERE `UserName` LIKE '%".$search."%'"); 
      }else{
          
          $sql= mysqli_query($conn,"SELECT*FROM users ORDER BY 'UserID'  ASC") ;
          $result = mysqli_query($conn,"SELECT * FROM users");}
       
    
            //câu lệnh truy vấn
           // $sql = "SELECT pro_title, pro_price, pro_desc, feature_image FROM products WHERE pro_id = '$pro_id'";

            //thực thi
           // $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result

          //Đếm hàng để kiểm tra xem chúng ta có product hay không
            $count = mysqli_num_rows($result);

            //Create Serial Number VAriable and Set Default VAlue as 1
            //$sn=0;

            if($count>0)
               {
                   //Lấy product từ Cơ sở dữ liệu và Hiển thị
                   while($row=mysqli_fetch_assoc($result))
                   {
                       //lấy các giá trị từ các cột                              
                       
                        $ad_name    = $row['UserName'];
                        $ad_pass    = $row['Password'];
                        $fullname   = $row['FullName'];
                        $ad_email   = $row['Email'];
                        $ad_phone   = $row['PhoneNumber'];
                        $ad_types   = $row['Types'];
                        $ad_status = $row['Status'];
                        

                      
                   }
                  
               }
               
         
        else
        {   echo 'LỖI RỒI :)';
            
            //header('location:index.php');
        }
        
    ?>

    <style>
        .my-details {
        margin-left: 250px;
        margin-right:10px;
        margin-bottom: 30%;
        padding-bottom: 0%}
        </style>
    <div class = "container my-details">
        <div class="card mb-3">
            <div class="row g-0">
                
            <h4 class="chitiet">Kết quả tìm kiếm</h4>     
                        <div class="card-body">
                            
                            <th class="username">: <?php echo $ad_name ?></th>
                            <th class="useremail"><?php echo $ad_email?></th> 
                            <form action="delete.php?pro_id=<?php echo $ad_id?>"method="POST">                        
                            <button type="submit" name ="delete" class="btn btn-outline-info btn-delete"><i class="fa fa-trash"></i></button>
                            </form>
                            
                        </div>
                    </div>
    
            </div>
        </div>
    </div> <!--end container-->


        <br><br>
            <?php //include 'footer.php'; ?>

