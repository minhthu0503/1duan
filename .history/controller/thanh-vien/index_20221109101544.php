<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}

switch($action){
    case 'add':{
        if(isset($_POST['btn'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            insertData($name,$phone,$password,$conn);
        }

        require_once "./view/thanh-vien/add_user.php";
        break;
    }

    case 'edit':{
        require_once "./view/thanh-vien/edit_user.php";
        break;
    }
}
