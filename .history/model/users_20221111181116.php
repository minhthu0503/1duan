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
// lấy user qua session:
function getUser($table,$username,$conn){
    $sql = "SELECT * FROM $table WHERE email = '$email'";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}

    function updatePassword($table,$newpassword,$email,$conn){
        $sql = "UPDATE $table SET password = '$newpassword' WHERE email = '$email'";
        return execute($conn,$sql);
    }
    function newPassWord($email, $newpassword)
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'sonntpd05961@fpt.edu.vn'; // SMTP username
            $mail->Password = 'nts20403';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('sonntpd05961@fpt.edu.vn', 'Nguyễn Trường Sơn');
            $mail->addAddress($email);
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Mật Khẩu Mới';
            $content = "
            Bạn nhận được mật khẩu mới do bạn hoặc người khác đã yêu cầu từ website MANGASHOP.COM <br>
                    Mật khẩu mới là: {$newpassword}";
            $mail->Body = $content;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo '<script language="javascript">alert("Cập nhật thành công!");</script>';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    }
    
    function updateUser($table,$username,$fullname,$password,$email,$address,$phone,$id,$conn){
        $sql = "UPDATE $table SET user_name = '$username', full_name = '$fullname', password = '$password', email = '$email', address = '$address', phone = '$phone' WHERE id = '$id'";
        return execute($conn,$sql);
    }

    // thêm dữ liệu:

    function insertData($table,$username,$fullname,$password,$email,$address,$phone,$conn){
    $sql = "INSERT INTO $table VALUES (null,'$username','$fullname','$password','$email','$address','$phone')";
    return execute($conn,$sql);
}
?>