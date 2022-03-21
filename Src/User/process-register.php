<?php
    include ("../config.php");
    //Lấy dữ liệu từ form
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $aob = $_POST['aob'];
    $phone_number = $_POST['phone-number'];
    $email = $_POST['email'];
    $ic = $_POST['ic'];
    $address = $_POST['address'];
    $school_name = $_POST['school-name'];
    $school_address = $_POST['school-address'];
    $graduation_year = $_POST['gra-year'];
    $sum_score = $_POST['sum-score'];
    $conduct = $_POST['conduct'];
    $asp1 = $_POST['asp1'];
    $obj1 = $_POST['obj1'];
    $asp2 = $_POST['asp2'];
    $obj2 = $_POST['obj2'];
    $math = $_POST['math'];
    $literature = $_POST['literature'];
    $english = $_POST['english'];
    $physic = $_POST['physic'];
    $chemistry = $_POST['chemistry'];
    $history = $_POST['history'];
    $geography = $_POST['geography'];
    $biology = $_POST['biology'];

    //xử lí ảnh
    $front_IC_Data = addslashes(file_get_contents($_FILES['front-photo-ic']['tmp_name']));
    $back_IC_Data = addslashes(file_get_contents($_FILES['back-photo-ic']['tmp_name']));
    $school_pro_Data = addslashes(file_get_contents($_FILES['img-school-pro']['tmp_name']));

    // echo $front_IC_Data;

    //Insert dlieu bảng candidate
    $sql = "INSERT INTO candidates(CanName,Gender,DateOfBirth,BirthPlace,IC,PhoneNumber,Email,SchoolAddress,SchoolName,GraduationYear,
    SumScore,Conduct,Maths,Literature,English,Physics,Chemistry,Biology,History,Geography,ImgSchoolPro,FrontPhotoIC,BackPhotoIC) 
            VALUES ('$name','$gender','$dob','$aob','$ic','$phone_number','$email','$school_address','$school_name','$graduation_year',
            '$sum_score','$conduct','$math','$literature','$english','$physic','$chemistry','$biology','$history','$geography',
            '$school_pro_Data','$front_IC_Data','$back_IC_Data')";
    $result = mysqli_query($conn,$sql);
    // echo $sql;
    
if($result == true){
    $sql1 = "select CanID from candidates where IC = $ic";
    $result1 = mysqli_query($conn,$sql1);

     if ($result1 == true){
        while($row1 = mysqli_fetch_assoc($result1)){
            $sql2 = "INSERT INTO aspirations(Majors,Subject,Ordinal,CanID) VALUES ('$asp1','$obj1','1','".$row1['CanID']."')";
            $sql3 = "INSERT INTO aspirations(Majors,Subject,Ordinal,CanID) VALUES ('$asp2','$obj2','2','".$row1['CanID']."')";

            $result2 = mysqli_query($conn,$sql2);
            $result3 = mysqli_query($conn,$sql3);

            if($result2 == true && $result3 == true){
                header ('Location: register-success.php');
            }else {
                header ('Location: register-fail.php');
                // echo "Lỗi sql2 và sql3";
                // echo $sql2;
                // echo $sql3;
            }
        }
    }else {
        header ('Location: register-fail.php');
    //     echo 'Lỗi sql1';
    }
}else {
        header ('Location: register-fail.php');
        // echo "Lỗi sql";
        // echo $sql;
    }
    
?>