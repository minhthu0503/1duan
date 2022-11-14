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

            $table = 'users';
            $data = getOneData($table,$conn,$username);
            if($data > 0){
                echo '<script language="javascript">alert("tài khoản đã tồn tại");</script>';
            }else{
                if(insertData($username,$password,$fullname,$email,$phone,$address,$conn)){
                    echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
                }else{
                    echo '<script language="javascript">alert("Đăng ký thất bại!");</script>';
                }
            };
        }
        if(isset($_POST['signin'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $table = 'users';
            $data = getOneData($table,$conn,$username);

            if ($data > 0) {
                $_SESSION['username'] = $username;
                echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
            } else {
                echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu!");</script>';
            }
        }
        require_once "./index.php";
        break;
    }

    case 'edit':{
        require_once "./view/thanh-vien/edit_user.php";
        break;
    }
    case 'logout':{
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
            unset($_SESSION['cart']);
            header('location: ./index.php');
        }
        // require_once "./index.php";
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
