<?php
    include '../config.php';
    if(isset($_POST['btnadd']))
    {
                $userid = $_POST['txt_userid'];
                $kiemtra = "SELECT * from users where UserID = '$userid'";
                $result0 = mysqli_query($conn,$kiemtra);
                if(!mysqli_fetch_array( $result0)){
                header("Location:add-post.php?error=ID người tạo không tồn tại!");
                exit();
            }else{
                $category =$_POST['txt_category'];
                $title =$_POST['txt_title'];
                $content = $_POST['txt_content'];
                $image =$_POST['txt_image'];
                $userID =$_POST['txt_userid'];
                $sql = "INSERT INTO posts(Category, Title, Content , Image, UserID)
                        VALUES ('$category','$title','$content','$image','$userID')";
                //bước 3: result là số bản ghi chèn thành công
                $result = mysqli_query($conn,$sql);
                //kiểm tra lệnh sql 
                //echo $sql;
                if($result>0){
                    echo '<script>';
                    echo 'alert ("Thêm bài viết thành công!");';
                    echo "location.href = 'mng-article.php';";     
                    echo '</script>';
                }else{
                    echo 'có lỗi xảy ra!';
                }
                //bước 4
                mysqli_close($conn);
            }
        // }
        // else{
        //         echo '<script>';
        //         echo 'alert ("Vui lòng nhập đủ dữ liệu!");';
        //         echo "location.href = 'add-post.php';";     
        //         echo '</script>';
        //         // header ("location:add-post.php?id =Vui lòng nhập đủ dữ liệu");
        // }
    }
?>