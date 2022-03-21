<?php
    include '../config.php';
    if(isset($_POST['btnadd']))
    {
        
        // if(!empty($_POST['txt-title']) && !empty($_POST['txt-content']) && !empty($_POST['txt-userid'])
        // && !empty($_POST['txt-image'])&& !empty($_POST['txt-category'])){
        if (empty($_POST['txt-title'])) {
            header("Location:add-post.php?error=Tiêu đề là bắt buộc!");
            exit();
        }else if(empty($_POST['txt-category'])){
            header("Location:add-post.php?error=Danh mục là bắt buộc!");
            exit();
        }else if(empty($_POST['txt-userid'])){
            header("Location:add-post.php?error=ID người tạo là bắt buộc!");
            exit();
        }else if(empty($_POST['txt-image'])){
            header("Location:add-post.php?error=Ảnh là bắt buộc!");
            exit();
        }else if(empty($_POST['txt-content'])){
            header("Location:add-post.php?error=Nội dung là bắt buộc!");
            exit();
        }else{
            if(!is_numeric($_POST['txt-userid'])){
                header("Location:add-post.php?error=ID người tạo phải là số!");
                exit();   
            }else 
                $userid = $_POST['txt-userid'];
                $kiemtra = "SELECT * from users where UserID = '$userid'";
                $result0 = mysqli_query($conn,$kiemtra);
                if(!mysqli_fetch_array( $result0)){
                header("Location:add-post.php?error=ID người tạo không tồn tại!");
                exit();
            }else{
                $category =$_POST['txt-category'];
                $title =$_POST['txt-title'];
                $content = $_POST['txt-content'];
                $image =$_POST['txt-image'];
                $userID =$_POST['txt-userid'];
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
        }
        // else{
        //         echo '<script>';
        //         echo 'alert ("Vui lòng nhập đủ dữ liệu!");';
        //         echo "location.href = 'add-post.php';";     
        //         echo '</script>';
        //         // header ("location:add-post.php?id =Vui lòng nhập đủ dữ liệu");
        // }
    }
?>