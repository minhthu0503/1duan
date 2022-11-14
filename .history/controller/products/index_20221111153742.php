<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'view_all': {
        $table = 'products';
        $data_products = getAllData($table, $conn);

        require_once "./index.php";
        break;
        }
    case 'view_category': { 
        if (isset($_GET['id_category'])) {
        $id_category = $_GET['id_category'];
        $data_category = getProductsCategory($table,$id_category,$conn);
        }
        require_once "./index.php";
        break;
        }
    default: {
            require_once "./index.php";
        }
}
