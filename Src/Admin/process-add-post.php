<?php
    include '../config.php';
    if(isset($_POST['btnadd']))
    {
    $category =$_POST['txt-category'];
    $title =$_POST['txt-title'];
    $content = $_POST['txt-content'];
    $createdAt =$_POST['txt-date'];
    $image =$_POST['txt-image'];
    $userID =$_POST['txt-userid'];

    
    $sql = "INSERT INTO posts(Category, Title, Content ,CreatedAt, Image, UserID)
             VALUES ('$category','$title','$content','$createdAt','$image','$userID')";
    //bước 3: result là số bản ghi chèn thành công
    $result = mysqli_query($conn,$sql);
    //kiểm tra lệnh sql 
    echo $sql;
    if($result>0){
        header ("location:../index.php");
    }else{
        echo 'lỗi';
    }
    //bước 4
    
    mysqli_close($conn);
    }
?>