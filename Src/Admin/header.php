<?php
    session_start();//bảo vệ tk admin
    if(!isset($_SESSION['UserName'])){
        header ("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="../Css/style.css">
    <!--script hiện ảnh-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
</head>
<body style="background-color:#dcdde1;">

    <style>
      .sidebar{
          position: fixed;
          left: 0;
          width: 230px;
          height: 270px;
          background-color: white;
          margin-top: 17px;
          margin-left: 16px;
          margin-right: 16px;
      }

      .sidebar ul {
          padding-left: 0 !important;
          list-style: none;
      }

      .sidebar ul a{
          display: block;
          height: 100%;
          width:100%;
          line-height: 65px;
          font-size: 20px;
          color: black;
          /* padding-left: 40px; */
          text-align: center;
          box-sizing: border-box;
          border-top: 1px solid rgba(255, 255, 255, .1);
          border-bottom: 1px solid black;
          text-decoration: none;

      }   
      .content a{
          text-decoration: none;
          color: black;
      }
      .main-content{
      display: flex;
      justify-content: center;
      margin: 20% ;
      height: 10%;
      }
      .main-content-item{
      width: 200px;
      height: 150px;
      margin-right: 100px;
      background-color: #007eb4;
      margin-left: 100px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      }
      
  </style>



<!-- sidebar start -->

<div class="sidebar">
      <ul>
        <li><a href="index.php"></i><span>Trang chủ</span></a></li> 
        <li><a href="mng-article.php"></i><span>Quản lý bài viết</span></a></li>
        <li><a href="mng-account.php"></i><span>Quản lý tài khoản</span></a></li>
        <li><a href="list-can.php" style="border-bottom: none;"></i><span>Danh sách thí sinh</span></a></li>
    </ul>
</div>
<!-- sidebar end -->