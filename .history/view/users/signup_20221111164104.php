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
                            <h1 class="forgot_heading">Đăng ký</h1>
                            <form action="" method="POST">
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
        </section>