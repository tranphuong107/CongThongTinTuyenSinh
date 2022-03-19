<?php 

    //Include constants.php file here
    //include 'header.php';
    include 'config.php';
    if(isset($_GET['id']))
    {
    // 1. get the ID of Posts to be deleted
    $postid = $_GET['id'];

    //2. Create SQL Query to Delete Posts
    $sql = "DELETE FROM posts WHERE PostID=$postid";

    //Execute the Query
    $res = mysqli_query($conn, $sql);
    // Check whether the query executed successfully or not
    if($res > 0){
        header("Location:mng-article.php");
    }else{
        echo "Lỗi";
    }
}
    
?>