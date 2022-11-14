<?php
// lấy kiểm tra đăng nhập bản user:
function checkSignin($table,$conn,$username,$password){
    $sql = "SELECT * FROM $table WHERE user_name = '$username' AND password ='$password'";
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

// kiểm tra đăng ký bản user:
function checkSignup($table,$conn,$username){
    $sql = "SELECT * FROM $table WHERE user_name = '$username'";
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

// quên mật khẩu:
    function getDataEmail($table,$email,$conn){
        $sql = "SELECT * FROM $table WHERE email = '$email'";
        $query = execute($conn,$sql);
        if(num_rows($query) == 0){
            $data = 0;
        }else{
           $data = getData($query);
        }
        return $data;
    }
?>