<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}
switch($action){
    case '':{
        if(isset($_POST['signup'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $table = 'customers';
            $data = checkSignup($table,$conn,$username);
            if($data > 0){
                echo '<script language="javascript">alert("tài khoản đã tồn tại");</script>';
            }else{
                if(insertData($table,$username,$fullname,$password,$email,$phone,$address,$conn)){
                    echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
                }else{
                    echo '<script language="javascript">alert("Đăng ký thất bại!");</script>';
                }
            };
        }
        if(isset($_POST['signin'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $table = 'customers';
            $data = checkSignin($table,$conn,$username,$password);

            if ($data > 0) {
                $_SESSION['username'] = $username;
                echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
            } else {
                echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu!");</script>';
            }
        }

        $table = 'products';
        $data = getAllData($table,$conn);

        $table1 = 'categorys';
        $data1 = getAllData($table1,$conn);

        require_once "./index.php";
        break;
    }
    
    case 'update_user':{
        
        require_once "./index.php";
        break;
    }
    case 'forgot':{
        if(isset($_POST['forgot'])){
        $table = 'customers';
        $email = $_POST['email'];
        $data = getDataEmail($table,$email,$conn);

        if($data > 0){
            $newpassword = "123";
           if(updatePassword($table,$newpassword,$email,$conn)){
            echo '<script language="javascript">alert("Cập nhật thành công!");</script>';
            newPassWord($email, $newpassword);
           }else{
            echo '<script language="javascript">alert("Cập nhật thất bại!");</script>';
           };     
        }
        }
        require_once "./index.php";
        break;
    }
    case 'logout':{
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
            
            header('location: ./index.php');
        }
        require_once "./index.php";
        break;
    }
    case 'list':{
        $table = "users";
        $data = getAllData($table,$conn);
        require_once "./view/thanh-vien/list_user.php";
        break;
    }
    default:{
        require_once "./index.php";
    }
}
