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
    $query = mysqli_query($conn,$sql);
    return $query;
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
// đếm sô bản ghi
function num_rows($query){
    if($query){
        $rows = mysqli_num_rows($query);
    }else{
        $rows = 0;
    }
    return $rows;
}
// lấy toàn bộ dữ liệu:
function getAllData($table,$conn){
    $sql = "SELECT * FROM $table";
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




// thêm dữ liệu:

function insertData($table,$username,$fullname,$password,$email,$address,$phone,$conn){
    $sql = "INSERT INTO $table VALUES (null,'$username','$fullname','$password','$email','$address','$phone')";
    return execute($conn,$sql);
}
// update mật khẩu:


function deleteData($conn,$id){
    $sql = "DELETE FROM users WHERE id = $id";
    return execute($conn,$sql);
}
?>