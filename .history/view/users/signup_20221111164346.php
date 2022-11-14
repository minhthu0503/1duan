<style>
    .signin {}

    .singin_heading {
        padding: 20px 0;
        text-align: center;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-size: 2.6rem;
        line-height: 1.4em;
        letter-spacing: -0.5pt;
        font-weight: 400;
    }

    .singin_form {
        /* text-align: center; */
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .signin_form-input {
        margin: 20px 0;
    }

    .signin_form-input label {
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 500;
        font-size: 1.6rem;

    }

    .singin_input {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        outline: none;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .btn.signin_btn {
        margin: 10px 0;
        width: 100%;
    }

    .forgot_link {
        display: block;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 500;
        font-size: 1.4rem;
        color: var(--text-color);

    }
</style>

<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="signup">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="signup_heading">Đăng ký</h1>
                            <form class="sinup_form" action="" method="POST">
                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="text" placeholder="Tài khoản " name="username" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="password" placeholder="Mật khẩu" name="password" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="text" placeholder="Họ và tên" name="fullname" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="text" placeholder="Email" name="email" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="text" placeholder="Điện thoại" name="phone" required>
                                </div>

                                <div class="signup_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="singup_input" type="text" placeholder="Địa chỉ" name="address" required>
                                </div>

                                <button name="signup" class="signup_btn" type="submit">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>