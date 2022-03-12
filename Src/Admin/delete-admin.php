<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $UserID = $_GET['id'];
        // truy vấn
        $sql ="UPDATE users SET Status = 'Dừng hoạt động' WHERE UserID = '$UserID'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
           include 'process-delete-admin.php';
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi xảy ra");';  
            echo "location.href = 'mng-account.php';";   
            echo '</script>';
        }
    }
?>