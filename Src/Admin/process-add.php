<?php
    include '../config.php';
    if(isset($_POST['btnadmin']))

    {
        if(!empty($_POST['UserName']) && !empty($_POST['FullName'])
        && !empty($_POST['Email'])&& !empty($_POST['PhoneNumber'])){
            if(!empty($_POST['Password'])){
            echo '<script>';
            echo 'alert ("Vui lòng nhập đủ dữ liệu!");';
            echo "location.href = 'add-admin.php';";     
            echo '</script>';
        }else{
            $ad_name    = $_POST['UserName'];
            $ad_pass    =md5($_POST['Password']);
            $fullname   =$_POST['FullName'];
            $ad_email   = $_POST['Email'];
            $ad_type   = $_POST['ad_type'];
            $ad_phone   = $_POST['PhoneNumber'];
  
    

            // Bước 02:
            //$pass_hash=md5($ad_pass,PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (UserName,Password,FullName,Email,PhoneNumber,Types)
                VALUES ('$ad_name','$ad_pass','$fullname','$ad_email','$ad_phone','$ad_type')";
                $result = mysqli_query($conn,$sql);
            // Bước 03:
                if($result>0){
                    echo '<script>';
                    echo 'alert ("Thêm tài khoản  thành công!");';
                    echo "location.href = 'mng-account.php';";     
                    echo '</script>';
                }else{
                    echo 'có lỗi xảy ra!';
                }
            

                //Bước 04: Đóng kết nối
            mysqli_close($conn);
                }
    }
    else{
        echo '<script>';
        echo 'alert ("Vui lòng nhập đủ dữ liệu!");';
        echo "location.href = 'add-admin.php';";     
        echo '</script>';
    }
}
?>