<?php
   
    if(isset($_POST['btnsignin'])){

        $email = $_POST['txtemail'];
        $pass  = $_POST['txtpass'];
        
        $conn = mysqli_connect('localhost','root','','db_btlnhom10');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
       
        $sql = "SELECT * FROM nguoidung WHERE Email = '$email'";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($pass,$row['Matkhau'])){

                    header("location: index.html"); 

                }
            }
            
        }else{
<<<<<<< HEAD
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xácc";
=======
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
>>>>>>> 8e27a39530fd2613fa605570fa796efe77f3792d
            header("location: signin.php?error=$error");
           

        }

        
        mysqli_close($conn);
    }else{
        header("location:signin.php");
    }
?>