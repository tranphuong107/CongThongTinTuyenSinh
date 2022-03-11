<?php
    define('HOST','localhost');
    define('USER','root');
    const PASS ='';
    const DB= 'admissions_portal';
    $conn =mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die('Khong ket noi');

}
?>