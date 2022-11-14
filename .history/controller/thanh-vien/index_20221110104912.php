<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}
$success = array();
switch($action){
    case 'add':{
        if(isset($_POST['btn'])){
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
                    // echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
                    $success[] = 'add_success';
                }else{
                    echo '<script language="javascript">alert("Đăng ký thất bại!");</script>';
                }
            };
        }

        require_once "./index.php";
        break;
    }

    case 'edit':{
        require_once "./view/thanh-vien/edit_user.php";
        break;
    }
    case 'delete':{
        require_once "./view/thanh-vien/delete_user.php";
        break;
    }
    case 'list':{
        $table = "users";
        $data = getAllData($table,$conn);
        require_once "./view/thanh-vien/list_user.php";
        break;
    }
    default:{
        require_once "./view/thanh-vien/list_user.php";
    }
}
