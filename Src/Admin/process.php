<?php
 session_start(); 
include "config.php";

if (isset($_POST['username']) && isset($_POST['userpass'])) {

function validate($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$username = validate($_POST['username']);
$userpass = validate($_POST['userpass']);

if (empty($username)) {
    header("Location:login.php?error=User Name is required");
    exit();
}else if(empty($userpass)){
    header("Location:login.php?error=Password is required");
    exit();
}//elseif(empty($ad_sta)){
   // header("Location:login.php?error=Status is required");
//}
else{
    // hashing the password
    $ad_pass = md5($ad_pass);

    
    $sql = "SELECT * FROM users WHERE UserName='$username' AND Password='$ad_pass'";
    //AND Status='Đang hoạt động'
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
         $row = mysqli_fetch_assoc($result);
        if ($row['UserName'] === $username && $row['Password'] === $ad_pass && $row['Status']=='Hoạt động' ) {
            $_SESSION['UserName']  = $row['UserName'];
            $_SESSION['FullName'] = $row['FullName'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['PhoneNumber'] = $row['PhoneNumber'];
            $_SESSION['Types'] = $row['Types'];
            $_SESSION['Status'] = $row['Status'];
            $_SESSION['UserID']    = $row['UserID'];
            header("Location:index.php");
            exit();
        }else{
            header("Location:login.php?error=Incorect User name or password");
            exit();
        }
    }else{
        header("Location:login.php?error=Incorect User name or password");
        exit();
    }
}

}else{
header("Location:login.php");
exit();
}?>