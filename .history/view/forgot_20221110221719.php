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
        display: flex;
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
                            <form action="" method="POST">
                                <input type="email" name="email" class="forgot_input" placeholder="Nhập Email" required>
                                <button type="submit" name="forgot" class="btn btn--primary forgot_btn">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

