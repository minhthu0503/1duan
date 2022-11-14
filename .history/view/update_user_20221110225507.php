<style>
    .forgot{
        margin-top: 20px;
    }

    .forgot_heading{
        padding: 20px 0;
        text-align: center;
        font-family: "Trirong",arial,helvetica,clean,sans-serif;
    font-size: 2.6rem;
    line-height: 1.4em;
    letter-spacing: -0.5pt;
    font-weight: 400;
    }
    .forgot form{
        /* display: flex; */
    }

    .forgot_input{
        flex: 1;
        padding: 5px 10px;
        border: 1px solid rgba(0,0,0,0.1);
        outline: none;
    }

    .forgot_btn{

    }

</style>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="forgot">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="forgot_heading">Quên mật khẩu</h1>
                            <div class="form signupForm">
                        <form action="" method="POST">
                            <h3>Đăng ký</h3>
                            <input type="text" placeholder="Tài khoản " name="username" required>
                            <input type="password" placeholder="Mật khẩu" name="password" required>
                            <input type="text" placeholder="Họ và tên" name="fullname" required>
                            <input type="text" placeholder="Email" name="email" required>
                            <input type="text" placeholder="Điện thoại" name="phone" required>
                            <input type="text" placeholder="Địa chỉ" name="address" required>
                            <button name="signup" class="signupForm_btn" type="submit">Đăng ký</button>
                        </form>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

