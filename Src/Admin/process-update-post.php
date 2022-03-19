<?php
    include ('../config.php');
?>
<?php
        if(isset($_POST['btnupdate']))
        {
            $post_id = $_GET['id'];
            $category = $_POST['txt-category'];
            $title = $_POST['txt-title'];
            $content = $_POST['txt-content'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $CreatedAt = date('Y/m/d H:i:s');
            $image =$_POST['txt-image']; 
            $user_id = $_POST['txt-userid'];
            if(!empty($title) && !empty($content) && !empty($user_id)){//kiểm tra có nhập đủ tt k
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
            }else{
                header ("location:update-post.php?id=".$_GET['id']."?Vui lòng nhập đủ dữ liệu");
            }
        }
        
    ?>