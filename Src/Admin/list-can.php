<?php
    include ('header.php');
    include ('../config.php');
?>
    <div class="content">
        <div class="row float-end col-md-8 my-2 mt-3 py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%;" >
                    
                    <div class="jumbotron text-center mt-2 ms-3" style="text-align: center;" >
                        <nav aria-label="breadcrumb"  >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-admin">
                                    <a href="index.php">
                                        <span class="">Trang chủ</span>
                                    </a></li>
                                <li class="breadcrumb-item text-admin ">
                                    <a href="list-can.php">
                                        <span class=" ">Danh sách thí sinh</span>
                                    </a></li>
                            </ol>
                        </nav>  
                    </div>
        </div>
        <div class="row float-end col-md-8 my-2  py-2 me-2  mx-auto" style="background-color:#ffffff; width:80%; height: 550px;">
                <div class="">
                    <h4 class ="m-2 p-2 ms-3 fw-bold"><img src="https://img.icons8.com/ios/30/000000/edit-property.png"/></i> Danh sách thí sinh</h2>
                </div>
        <main>
            <style>
            .btn-outline-success{
                width: 70px;
                height: 40px;
                margin-top: 0px;
                
            }
                .container-tb{ 
                    margin-top: 0%;
                    border:1px solid white;
                    background-color: white;
                    width
                }
                .container-search{
                    padding:0%;
                    margin-bottom: 0px;
                
                }
                </style>
                <div class = "container-tb">
            
                        <table class="table table-bordered">
                            <div class="table-responsive">           
                                    <thead>
                                        <tr> 
                                            <th scope ="col">Mã</th>
                                            <th scope ="col">Tên thí sinh</th>
                                            <th scope ="col">Giới tính</th>
                                            <th scope ="col">Ngày Sinh</th>
                                            <th scope ="col">Số điện thoại</th>   
                                            <th scope ="col">Email</th>
                                        </tr>
                                    </thead>
                            </div>
                        
                    </div>
                    <tbody>
                        <?php
                            
                                // Bước 02: Thực hiện TRUY VẤN
                                $sql    = "SELECT*FROM candidates";
                                $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                                // Bước 03: Phân tích và xử lý kết quả
                                if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row['CanID'].'</th>';
                                    echo '<td>'.$row['CanName'].'</td>';
                                    echo '<td>'.$row['Gender'].'</td>';
                                    echo '<td>'.$row['DateOfBirth'].'</td>';
                                    echo '<td>'.$row['PhoneNumber'].'</td>';
                                    echo '<td>'.$row['Email'].'</td>';
                                    echo '</tr>';
                                }
                            }
                                
                            ?>
                            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "js/myjs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cropper/1.0.1/jquery-cropper.js" integrity="sha512-7H4tikIFoyAdYD31w/uNYvvAUL6gyunWXLwTQ7ZXkyjD+brw+PfJpLxFkANnbkKnSJzU89YpnF3fJKbpvV+QYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
    
