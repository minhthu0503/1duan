<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}
switch($action){  
    case 'view':{
        $table = 'products';
        $id = $_GET['id'];
        $data = getDataProduct($table,$id,$conn);
        
        require_once "./index.php";
        break;
    }
    default:{
        require_once "./index.php";
    }
}
