<?php 
session_start();
if(isset($_SESSION['username'])){
    echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
}
include "./model/connect.php";
include "./model/users.php";
include "./model/products.php";
$conn = connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case '':{
        require_once "./controller/users/index.php";
    }
    case 'users':{
        require_once "./controller/users/index.php";
    }
    case 'products':{
        require_once "./controller/products/index.php";
    }
    case 'products_detail':{
        require_once "./controller/products_detail/index.php";
    }
}


include "./view/header.php";

if(isset($_GET['page_layout'])){
    switch ($_GET['page_layout']){
        case '':
            include "./view/slider.php";
            include "./view/section.php";
            break; 
        case 'products':
            include "./view/products.php";
            break;
        case 'products_category':
            include "./view/products_category.php";
            break;  
        case 'products_detail':
            include "./view/products_detail.php";
            break; 
        case 'forgot':
            include "./view/users/forgot.php";
            break; 
        case 'update_user':
            include "./view/users/update_user.php";
            break; 
        case 'signin':
            include "./view/users/signin.php";
            break; 
        case 'signup':
            include "./view/users/signup.php";
            break; 
        
        default:
        include "./view/slider.php";
        include "./view/section.php";
        break; 
    }

}else{
    include "./view/slider.php";
    include "./view/section.php";
}


include "./view/footer.php";
?>