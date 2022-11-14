<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}
switch($action){
    case 'view':{
        $id_product = $_GET['id'];
      
        require_once "./products_detail.php";
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
