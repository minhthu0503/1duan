<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milem | Trang chủ</title>
    <link rel="icon" href="./assets/img/icon_milem.png">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/products_detail.css">
    <link rel="stylesheet" href="./assets/css/products.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./assets/font/fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- modal layout -->

    <div class="modal">
        <div class="modal_close">
            <button onclick="click" class="close_btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="modal__overlay">
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="box signin">
                        <img src="./assets/img/logo_milem_text.png" alt="" class="box_img">
                        <h2 class="signin_heading">
                            Bạn đã có tài khoản ?
                        </h2>
                        <button class="signin_btn">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="box signup">
                        <img src="./assets/img/logo_milem_text.png" alt="" class="box_img">
                        <h2 class="signup_heading">
                            Bạn chưa có tài khoản ?
                        </h2>
                        <button class="signup_btn">
                            Đăng ký
                        </button>
                    </div>
                    <div class="modal_background"></div>

                </div>
                <div class="fromBx">

                    <div class="form signinForm">
                        <form method="POST">
                            <h3>Đăng nhập</h3>
                            <input type="text" placeholder="Tài khoản" name="username" required>
                            <input type="password" placeholder="Mật khẩu" name="password" required>
                            <button name="signin" class="signinForm_btn" type="submit">Đăng nhập</button>
                            <a href="index.php?page_layout=forgot&cotroller=users&action=forgot" class="forgot">Quên mật khẩu ?</a>
                        </form>
                    </div>

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
    <div class="sticky">
        <div class="grid header__navbar-wap">
            <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--separate"><i
                                class="fa-brands fa-facebook"></i>
                        </li>
                        <li class="header__navbar-item header__navbar-item--separate"><i
                                class="fa-brands fa-instagram"></i></li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer"><i class="fa-solid fa-envelope"></i></span>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a class="header__navbar-item-link" href="">
                                Thông báo <i class="fa-solid fa-circle-exclamation"></i>
                            </a>
                           
                        </li>
                        <li class="header__navbar-item">
                            <a class="header__navbar-item-link" href="">
                                Trợ giúp <i class="fa-solid fa-circle-question"></i>
                            </a>
                        </li>
                      
                    </ul>

                </nav>
            </div>
        </div>
    </div>
    <!-- header -->
    <div class="grid wide">
        <div class="header">
            <!-- LOGO -->
            <a href="index.php" class="header_logo-link">
                <img class="header_logo" src="./assets/img/logo_milem.png" alt="">
            </a>
            <a href="index.php" class="header_logo-link link_none">
                <img class="header_logo logo_none" src="./assets/img/logo_milem_text.png" alt="">
            </a>
            <!-- tablet-mobile navbar -->
            <input hidden type="checkbox" name="" id="nav__mobile-input">

            <div class="nav-menu-search">
                <label for="nav__mobile-input" class="nav__mobile-btn">
                    <!-- <img src="./assets/img/menu_icon.png" alt="" class="nav__mobile-img"> -->
                    <i class="nav__mobile-img fa-solid fa-bars"></i>
                </label>

                <label for="mobile__search" class="nav__mobile-search">
                    <img src="./assets/img/search__icon.png" alt="" class="nav__mobile-search-img">
                </label>
            </div>


            <label for="nav__mobile-input" class="nav__overlay"></label>

            <label for="nav__mobile-input" class="nav__mobile">
                <i class="nav__mobile-close fa-solid fa-xmark"></i>
                <div class="nav_login">
                    <button onclick="click" class="nav_login_btn">Đăng nhập</button>
                </div>
                <ul class="nav__mobile-list">
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Trang chủ</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Giới thiệu</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Sản phẩm</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Tin tức</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Liên hệ</a>
                    </li>
                </ul>
                <!-- <ul class="nav__mobile-list">
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Trang chủ</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Giới thiệu</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Sản phẩm</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Tin tức</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="#" class="nav__mobile-link">Liên hệ</a>
                    </li>
                </ul> -->

            </label>
            <!-- end navnbar -->

            <div class="header_search">
                <form action="#" class="header_form">
                    <input placeholder="Tìm kiếm" type="text" class="header_form-input">
                    <button class="header_form-btn btn btn--primary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="header_right">
                <?php if(isset($_SESSION['username'])){ ?>
                    <div class="header_login-logout">
                            <!-- <button onclick="click" class="header_login">xu</button>               -->
                            <a href="index.php?controller=users&action=logout" class="header_logout">Đăng xuất</a>
                        </div>
                    <?php } else{?>
                        <div class="header_login-logout">
                            <button onclick="click" class="header_login">Đăng nhập</button>              
                        </div>
                    <?php }?>
                <div class="header_cart">
                    <div class="header__card-wrap">
                        <i class="fa fa-basket-shopping"></i>
                        <span class="header_cart-quantity">
                            3
                        </span>
                        <!-- not products -->
                        <!-- <div class="header__card-list header__card-list-no-card">              
                                            <img class="header__card-list-no-card-img"  src="./assets/img/cart-empty.png" alt="">
                                            <span class="header__card-list-no-card-msg">Chưa có sản phẩm</span>
                                        </div> -->
                        <!-- have products -->
                        <div class="header__card-list">
                            <h4 class="header__card-heading">
                                Sản phẩm đã thêm
                            </h4>
                            <ul class="header__card-list-item">
                                <li class="header__card-item">
                                    <img src="./assets/img/sp_demo.jpg" alt="" class="header__card-img">
                                    <div class="header__card-item-info">
                                        <div class="header__card-item-head">
                                            <h5 class="header__card-item-name">Sửa rửa mặt CETAPHIL Moisturizing
                                                Lotion 20 fl oz</h5>
                                            <div class="header__card-item-price-wrap">
                                                <span class="header__card-item-price">200.000đ</span>
                                                <span class="header__card-item-x">x</span>
                                                <span class="header__card-item-quantity">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="header__card-btn">
                                <a href="#" class="btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu -->
    <div class="sticky_top">
        <div class="grid wide">
            <div class="header_menu">
                <div class="row">
                    <a href="index.php" class="header_logo-link" id="logo_none">
                        <img class="header_logo-none" src="./assets/img/logo_milem_text.png" alt="">
                    </a>
                    <div class="col l-8 l-o-2">
                        <ul class="header_menu-list">
                            <li class="header_menu-item">
                                <a href="index.php" class="header_menu-link">Trang chủ</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Giới thiệu</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="index.php?page_layout=products" class="header_menu-link">Sản phẩm</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Tin tức</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
