<?php 
    // lấy dữ liệu bản products: 
function getDataProduct($table,$id,$conn){
    $sql = "SELECT * FROM $table INNER JOIN categorys ON $table.category_id = categorys.id WHERE $table.id = '$id'";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}

// lấy dữ liệu product theo category:
function getProductsCategory($table,$id_category,$conn){
    $sql = "SELECT * FROM $table WHERE category_id = $id_category";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
        while($datas = getData($query)){
            $data[] =  $datas;
        }
    }
    return $data;
}

?>