<?php 
function connect(){
    $conn = mysqli_connect("localhost","root","","demo2");
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
// lấy toàn bộ dữ liệu:
function getOneData($table,$conn){
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
// đếm sô bản ghi

function num_rows($query){
    if($query){
        $rows = mysqli_num_rows($query);
    }else{
        $rows = 0;
    }
    return $rows;
}

// thêm dữ liệu:

function insertData($username,$password,$fullname,$email,$phone,$address,$conn){
    $sql = "INSERT INTO users VALUES (null,'$username','$password','$fullname','$email','$phone','$address')";
    return execute($conn,$sql);
}

function updateData($id,$name,$phone,$password,$conn){
    $sql = "UPDATE users SET name = '$name', phone = '$phone', password = '$password' WHERE id = '$id'";
    return execute($conn,$sql);
}

function deleteData($conn,$id){
    $sql = "DELETE FROM users WHERE id = $id";
    return execute($conn,$sql);
}
?>