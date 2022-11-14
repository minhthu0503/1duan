<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
insertData($name,$phone,$password,$conn);
?>

<p>add</p>
<form action="" method="POST">
    <label for="">name</label>
    <input type="text" name="name"> <br>
    <label for="">phone</label>
    <input type="text" name="phone"> <br>
    <label for="">password</label>
    <input type="text" name="password"> <br>
    <button type="submit" name="btn">submit</button>
</form>