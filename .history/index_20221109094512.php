<?php 
include "./model/connect.php";
$conn = connect();
$name = "okkkk";
$phone = '123123123';
$password = '123123123';
insertData($name,$phone,$password,$conn);
?>