<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'view_all': {
        $id_category = $_GET['id_category'];
        $table = 'products';
        $data_category = getProductsCategory($table,$id_category,$conn);

        $data_products = getAllData($table, $conn);
            require_once "./index.php";
            break;
        }
    default: {
            require_once "./index.php";
        }
}

?>