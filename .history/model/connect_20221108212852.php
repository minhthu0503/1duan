<?php 
function connect(){
    $conn = mysqli_connect("localhost","root","","du_an_1");
    if(!$conn){
        echo "Ket noi that bai";
        exit();
    }else{
        mysqli_set_charset($conn,"utf8");
    }
    return $conn;
}
// thực thi câu lệnh truy vấn
function execute($conn,$sql){
    $result = mysqli_result(mysqli_query($conn,$sql));
    return $result;
}
// lấy dữ liệu:
function getData($query){
    if($query){
        $data = mysqli_fetch_array($query);
        
    }else{
        $data = 0;
    }
    return $data;
}
// lấy toàn bộ dữ liệu:
function getAllData($query){
    if(!$query){
        $data = 0;
    }else{
        while($datas = getData()){
            $data[] =  $datas;
        }
    }
    return $data;
}
?>