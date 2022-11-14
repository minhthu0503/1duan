<style>
    .signin{

    }

    .singin_heading{
        padding: 20px 0;
        text-align: center;
        font-family: "Trirong",arial,helvetica,clean,sans-serif;
        font-size: 2.6rem;
        line-height: 1.4em;
        letter-spacing: -0.5pt;
        font-weight: 400;
    }

    .singin_form{

    }

    .singin_input{
        width: 100%;
    }

    .signin_btn{

    }

</style>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="signin">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="singin_heading">Đăng nhập</h1>
                            <form class="singin_form" method="POST">
                            <input class="singin_input" type="text" placeholder="Tài khoản" name="username" required>
                            <input class="singin_input" type="password" placeholder="Mật khẩu" name="password" required>
                            <button name="signin" class="signin_btn btn btn--primary" type="submit">Đăng nhập</button>
                            <a href="index.php?page_layout=forgot&cotroller=users&action=forgot" class="forgot">Quên mật khẩu ?</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>