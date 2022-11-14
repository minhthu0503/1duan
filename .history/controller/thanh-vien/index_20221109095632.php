<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}

switch($action){
    case 'thanh-vien':{
        require_once "./controller/thanh-vien/index.php";
    }
}

?>