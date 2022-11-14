<style>
    .signin {}

.signin_heading,
.signup_heading,
.forgot_heading {
    padding: 20px 0;
    text-align: center;
    font-family: "Trirong", arial, helvetica, clean, sans-serif;
    font-size: 2.6rem;
    line-height: 1.4em;
    letter-spacing: -0.5pt;
    font-weight: 400;
}

.signin_form,
.signup_form {
    /* text-align: center; */
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.signin_form-input ,
.signup_form-input{
    margin: 20px 0;
}

.signin_form-input label ,
.signup_form-input label{
    font-family: "Trirong", arial, helvetica, clean, sans-serif;
    font-weight: 500;
    font-size: 1.6rem;

}

.signin_input,
.signup_input {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    outline: none;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.btn.signin_btn,
.btn.signup_btn {
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
                <div class="forgot">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="forgot_heading">Quên mật khẩu</h1>
                            <form class="forgot_form" action="" method="POST">
                                <label for="">Nhập Email</label>
                                <input type="email" name="email" class="forgot_input" placeholder="Nhập Email" required>
                                <button type="submit" name="forgot" class="btn btn--primary forgot_btn">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

