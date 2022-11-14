<?php 
include "./model/connect.php";
$conn = connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case 'thanh-vien':{
        require_once "./controller/thanh-vien/index.php";
    }
}


$name = "okkkk";
$phone = '123123123';
$password = '123123123';
insertData($name,$phone,$password,$conn);
?>