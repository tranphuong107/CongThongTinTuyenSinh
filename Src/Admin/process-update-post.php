<?php
    include ('../config.php');
?>
<?php
        if(isset($_POST['btnupdate']))
        {
            // if(!empty($_POST['txt-title']) && !empty($_POST['txt-content']) && !empty($_POST['txt-userid'])){//kiểm tra có nhập đủ tt k
            if (empty($_POST['txt-title'])) {
                 header("Location:update-post.php?id=".$_GET['id']."&error=Tiêu đề bài viết không được để trống!");
                exit();
            }else if(empty($_POST['txt-content'])){
                header("Location:update-post.php?id=".$_GET['id']."&error=Nội dung bài viết không được để trống!");
                exit();
            }else if(empty($_POST['txt-category'])){
                header("Location:update-post.php?id=".$_GET['id']."&error=Danh mục bài viết chưa được chọn!");
                exit();
            }else if(empty($_POST['txt-userid'])){
                header("Location:update-post.php?id=".$_GET['id']."&error=ID người sửa không được để trống!");
                exit();
            }else{
                if(!is_numeric($_POST['txt-userid'])){
                    header("Location:update-post.php?id=".$_GET['id']."&error=ID người sửa phải là số!");
                    exit();
                }else 
                    $userid = $_POST['txt-userid'];
                    $kiemtra = "SELECT * from users where UserID = '$userid'";
                    $result0 = mysqli_query($conn,$kiemtra);
                    if(!mysqli_fetch_array( $result0)){
                    header("Location:update-post.php?id=".$_GET['id']."&error=ID người sửa không tồn tại!");
                    exit();
                }else{
                    $post_id = $_GET['id'];
                    $category = $_POST['txt-category'];
                    $title = $_POST['txt-title'];
                    $content = $_POST['txt-content'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $CreatedAt = date('Y/m/d H:i:s');
                    $image =$_POST['txt-image']; 
                    $user_id = $_POST['txt-userid'];
                    if($_POST['txt-image']!=''){//ktra có thay đổi ảnh k
                        //chỉnh sửa thông tin
                        $sql1 = "UPDATE posts SET 
                            Category =  '$category', Title = '$title', Content ='$content', 
                            CreatedAt = '$CreatedAt' ,Image ='$image', UserID = '$user_id' 
                            WHERE PostID = '$post_id'";
                            $result1 = mysqli_query($conn,$sql1);
                            // echo $sql2;
                        
                            if($result1 > 0){
                                echo '<script>';
                                echo 'alert ("Sửa bài viết thành công!");';
                                echo "location.href = 'mng-article.php';";     
                                echo '</script>';
                            }else{
                                echo "lỗi1";
                            }
                    }else{
                        $sql2 = "UPDATE posts SET 
                        Category =  '$category', Title = '$title', Content ='$content', 
                        CreatedAt = '$CreatedAt' , UserID = '$user_id' 
                        WHERE PostID = '$post_id'";
                        $result2 = mysqli_query($conn,$sql2);
                        // echo $sql2;
                    
                        if($result2 > 0){
                            echo '<script>';
                            echo 'alert ("Sửa bài viết thành công!");';
                            echo "location.href = 'mng-article.php';";     
                            echo '</script>';    
                        }else{
                            echo "lỗi2";
                        }
                    }
                }
            }
            // }else{
            //     echo '<script>';
            //     echo 'alert ("Vui lòng nhập đủ dữ liệu!");';
            //     echo "location.href = 'update-post.php?id=".$_GET['id']."';";     
            //     echo '</script>';
            //     // header ("location:update-post.php?id=".$_GET['id']."?Vui lòng nhập đủ dữ liệu");
            // }
        }
        
    ?>