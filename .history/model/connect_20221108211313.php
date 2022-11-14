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
?>