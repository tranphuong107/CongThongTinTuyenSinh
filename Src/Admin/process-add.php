<?php
    
    $ad_name    = $_POST['UserName'];
    $ad_pass    =md5($_POST['Password']);
    $fullname   =$_POST['FullName'];
    $ad_email   = $_POST['Email'];
    $ad_phone   = $_POST['PhoneNumber'];
    $ad_status = $_POST['Status'];
  
    include 'config.php';

    // Bước 02:
    //$pass_hash=md5($ad_pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (UserName,Password,FullName,Email,PhoneNumber,Status)
    VALUES ('$ad_name','$ad_pass','$fullname','$ad_email','$ad_phone','$ad_status')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:mng-account.php");
    }else{
        echo "Lỗi!";
    }

    //Bước 04: Đóng kết nối
   mysqli_close($conn);

?>