<?php
    include ('header.php');
    include ('../config.php');

    $sql = "select ImgSchoolPro from candidates";
    $result = mysqli_query($conn, $sql);

    if ($result == true){
        while($row = mysqli_fetch_assoc($result)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ImgSchoolPro']).'" alt="">';
    
    }} else {
        echo "Lỗi gì đó!";
    }
    include ('footer.php');
?>