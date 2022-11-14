<style>
    .update_user{
        margin-top: 20px;
    }

    .update_user_heading{
        padding: 20px 0;
        text-align: center;
        font-family: "Trirong",arial,helvetica,clean,sans-serif;
    font-size: 2.6rem;
    line-height: 1.4em;
    letter-spacing: -0.5pt;
    font-weight: 400;
    }
    .update_user form{
        /* display: flex; */
    }

    .update_user form input{
        flex: 1;
        padding: 5px 10px;
        border: 1px solid rgba(0,0,0,0.1);
        outline: none;
        width: 100%;
    }

    .update_user_btn{

    }

</style>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="update_user">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="update_user_heading">Quên mật khẩu</h1>
                            <div class="form signupForm">
                        <form action="" method="POST">
                            <h3>Đăng ký</h3>
                            <input type="text" placeholder="Tài khoản " name="username" required>
                            <input type="password" placeholder="Mật khẩu" name="password" required>
                            <input type="text" placeholder="Họ và tên" name="fullname" required>
                            <input type="text" placeholder="Email" name="email" required>
                            <input type="text" placeholder="Điện thoại" name="phone" required>
                            <input type="text" placeholder="Địa chỉ" name="address" required>
                            <button name="signup" class="signupForm_btn btn btn--primary" type="submit">Đăng ký</button>
                        </form>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

