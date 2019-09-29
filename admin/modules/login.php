<?php 
    session_start();
    include('controllers/connectdb.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "Select * From user Where username='$username' and password='$password'";
        $row=$conn->query($sql);
        $count=$row->fetch();
        if($count>0){
            $_SESSION['dangnhap']=$username;
            header('location:index.php');
        }else {
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
			
        }

    }
    ?>