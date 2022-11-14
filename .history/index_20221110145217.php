<?php 
session_start();
include "./model/connect.php";
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
    case 'products_detail':{
        require_once "./controller/products/index.php";
    }
}


include "./view/header.php";

if(isset($_GET['page_layout'])){
    switch ($_GET['page_layout']){
        case '':
            include "./view/slider.php";
            include "./view/section.php";
            break; 
    }
}


include "./view/footer.php";
?>