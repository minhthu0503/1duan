<?php 
var_dump($data_customers);
die();
?>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="signin">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="signup_heading">Sửa tài khoản</h1>
                            <form class="signup_form" action="" method="POST">
                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="signup_input" type="text" placeholder="Tài khoản " name="username" value="<?php echo $data_customers['user_name'] ?>" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Mật khẩu:</label>
                                    <input class="signup_input" type="password" placeholder="Mật khẩu" name="password" value="<?php echo $data_customers['password'] ?>" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Họ và tên:</label>
                                    <input class="signup_input" type="text" placeholder="Họ và tên" name="fullname" value="<?php echo $data_customers['full_name'] ?>" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Email:</label>
                                    <input class="signup_input" type="text" placeholder="Email" name="email" value="<?php echo $data_customers['email'] ?>" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Số điện thoại:</label>
                                    <input class="signup_input" type="text" placeholder="Điện thoại" name="phone" value="<?php echo $data_customers['phone'] ?>" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Địa chỉ:</label>
                                    <input class="signup_input" type="text" placeholder="Địa chỉ" name="address" value="<?php echo $data_customers['address'] ?>" required>
                                </div>

                                <button name="update_user" class="signup_btn btn btn--primary" type="submit">Sửa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>