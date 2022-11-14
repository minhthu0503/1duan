<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milem | products</title>
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
                        <form action="#">
                            <h3>Đăng nhập</h3>
                            <input type="text" placeholder="Tài khoản" name="username" required>
                            <input type="password" placeholder="Mật khẩu" name="password" required>
                            <button class="signinForm_btn" type="submit">Đăng nhập</button>
                            <a href="#" class="forgot">Quên mật khẩu ?</a>
                        </form>
                    </div>

                    <div class="form signupForm">
                        <form action="#">
                            <h3>Đăng ký</h3>
                            <input type="text" placeholder="Tài khoản " name="username" required>
                            <input type="password" placeholder="Mật khẩu" name="password" required>
                            <input type="text" placeholder="Họ và tên" name="fullname" required>
                            <input type="text" placeholder="Email" name="email" required>
                            <input type="text" placeholder="Điện thoại" name="phone" required>
                            <input type="text" placeholder="Địa chỉ" name="address" required>
                            <button class="signupForm_btn" type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end modal layout -->

    <!-- header__navbar-wap -->
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
                            <!-- <div class="header__notify">
                                        <header class="header__notify-header">
                                            <h3>Thông báo mới</h3>
                                        </header>
                                        <ul class="header__notify-list">
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a href="" class="header__notify-link">
                                                    <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">My pham chinh hang</span>
                                                        <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="header__notify-item">
                                                <a href="" class="header__notify-link">
                                                    <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">My pham chinh hang</span>
                                                        <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="header__notify-item">
                                                <a href="" class="header__notify-link">
                                                    <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">My pham chinh hangMy pham chinh hangMy
                                                            pham chinh hangMy pham chinh hang</span>
                                                        <span class="header__notify-describe"> Mo ta my pham chinh hangMo ta my
                                                            pham chinh hangMo ta my pham chinh hangMo ta my pham chinh
                                                            hang</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="header__notify-item">
                                                <a href="" class="header__notify-link">
                                                    <img src="./assets/img/mp1.jfif" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">My pham chinh hang</span>
                                                        <span class="header__notify-describe">Mo ta my pham chinh hang</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="header__notify-footer">
                                            <a href="#" class="header__notify-footer-btn">
                                                Xem tất cả
                                            </a>
                                        </div>
                
                                    </div> -->
                        </li>
                        <li class="header__navbar-item">
                            <a class="header__navbar-item-link" href="">
                                Trợ giúp <i class="fa-solid fa-circle-question"></i>
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item-strong header__navbar-item--separate">Dang ky
                                </li>
                                <li class="header__navbar-item header__navbar-item-strong">Dang nhap</li> -->
                    </ul>

                </nav>
            </div>
        </div>
    </div>
    <!-- end header__navbar-wap -->

    <!-- header -->
    <div class="grid wide">
        <div class="header">
            <!-- LOGO -->
            <a href="index.html" class="header_logo-link">
                <img class="header_logo" src="./assets/img/logo_milem.png" alt="">
            </a>
            <a href="index.html" class="header_logo-link link_none">
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
                <!-- <img src="./assets/img/close_icon.png" alt="" class="nav__mobile-close"> -->
                <i class="nav__mobile-close fa-solid fa-xmark"></i>
                <div class="nav_login">
                    <button onclick="click" class="nav_login_btn">Đăng nhập</button>
                    <!-- <a href="#" class="header_logout">Đăng ký</a> -->
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
                <div class="header_login-logout">
                    <button onclick="click" class="header_login">Đăng nhập</button>
                    <!-- <a href="#" class="header_logout">Đăng ký</a> -->
                </div>
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
    <!--end header -->

    <!-- menu -->
    <div class="sticky_top">
        <div class="grid wide">
            <div class="header_menu">
                <div class="row">
                    <a href="index.html" class="header_logo-link" id="logo_none">
                        <img class="header_logo-none" src="./assets/img/logo_milem_text.png" alt="">
                    </a>
                    <div class="col l-8 l-o-2">
                        <ul class="header_menu-list">
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Trang chủ</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Giới thiệu</a>
                            </li>
                            <li class="header_menu-item">
                                <a href="" class="header_menu-link">Sản phẩm</a>
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
    <!--end menu -->

    <!-- products_detail -->

    <!-- header_title -->
    <div class="sticky_product_title">
        <div class="grid header_product-title">
            <div class="grid wide">
                <div class="header_product">
                    <p class="title1">Trang chủ</p>
                    <span>/</span>
                    <p class="title1">Sản phẩm</p>
                    <span>/</span>
                    <p class="title1">FANCL Mild Cleansing Oil - Dầu tẩy trang</p>
                </div>
            </div>
        </div>
    </div>
    <!--end header_title -->

    <!-- product_detail-cart-fixed -->
    <div class="products_detail-cart">
        <div class="products_detail-cart-close">
            <button onclick="click" class="close_product_btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="cart_modal">
            <div class="cart_modal-section">
                <div class="row">
                    <div class="col l-6 c-6 m-6">
                        <div class="cart_modal-section-left">
                            <span class="cart_modal-section-title">
                                1 sản phẩm mới đã được thêm vào giỏ hàng của bạn.
                            </span>
                            <div class="cart_modal-section-content">
                                <img class="cart_modal-section-img"
                                    src="https://www.milem.vn/fileserver/images/file/fixsize-160x160/upload/product/PR5bf4cb76bd52a/fanclmildcleansingoildropshadowed700x700-(1).png?v=1.3"
                                    alt="">
                                <div class="cart_modal-section-info">
                                    <h1 class="cart_modal-section-heading">
                                        FANCL Mild Cleansing Oil - Dầu tẩy trang
                                    </h1>
                                    <p class="cart_modal-section-price">
                                        650.000đ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 c-6 m-6">
                        <div class="cart_modal-section-right">
                            <div class="cart_modal-section-right-head">
                                <h1 class="cart_modal-section-head-heading">
                                    Giỏ hàng
                                </h1>
                                <span class="cart_modal-section-head-span">
                                    2 sản phẩm
                                </span>
                            </div>
                            <div class="cart_modal-section-main">
                                <p class="cart_modal-section-main-p">Tạm tính:</p>
                                <p class="cart_modal-section-main-p">650.000đ</p>
                            </div>
                            <div class="cart_modal-section-total">
                                <p class="cart_modal-section-total-text">Thành tiền:<span
                                        class="cart_modal-section-total-span">(Tổng số tiền thanh toán)</span></p>
                                <p class="cart_modal-section-total-price">650.000đ</p>
                            </div>
                            <div class="cart_modal-section-control">
                                <a href="#" class="cart_modal-section-control-link">Tiếp tục mua sắm</a>
                                <button class="btn btn--primary cart_modal-section-control-btn">Xem giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product_detail-cart-fixed -->

    <!-- products_detail-fixed  -->
    <div class="grid products_detail-fixed" id="products_detail-fixed">
        <div class="products_detail-fixed-info grid wide">
            <div class="products_detail-fixed-header">
                <div class="products_detail-fixed-section">
                    <img src="./assets/img/product/thumb1.jpg" alt="" class="products_detail-fixed-img">
                    <div class="products_detail-fixed-header">
                        <h1 class="products_detail-fixed-heading">
                            FANCL Mild Cleansing Oil - Dầu tẩy trang
                            <p class="products_detail-fixed-heading-category">Thương hiệu:
                                <a href="#" class="products_detail-fixed-heading-link">Fancl</a>
                                <span class="products_detail-fixed-price">650,000đ</span>
                            </p>
                        </h1>
                    </div>
                </div>
                <!-- <button class="btn btn--primary products_detail-fixed-btn">MUA NGAY</button> -->
                <div class="products_detail-form-button">
                    <button class="btn btn--primary products_detail-fixed-btn-add add">THÊM VÀO GIỎ HÀNG</button>
                    <button class="btn btn--primary products_detail-fixed-btn">MUA NGAY</button>
                </div>
            </div>
            <div class="products_detail-fixed-tab">
                <div class="row">
                    <div class="products_detail-tab-item col l-2-4 c-6">
                        <a href="#" class="products_detail-tab-link">Sản phẩm
                        </a>
                    </div>
                    <div class="products_detail-tab-item col l-2-4 c-0">
                        <a href="#product_info-section" class="products_detail-tab-link">Mô tả
                            sản phẩm</a>
                    </div>
                    <div class="products_detail-tab-item col l-2-4  c-0">
                        <a href="#product_user-guide-section" class="products_detail-tab-link">Hướng dẫn sử dụng</a>
                    </div>
                    <div class="products_detail-tab-item col l-2-4  c-0">
                        <a href="#product_specification-section" class="products_detail-tab-link">Thành phần</a>
                    </div>
                    <div class="products_detail-tab-item col l-2-4 c-6">
                        <a href="#product_comment-section" class="products_detail-tab-link">Đánh
                            giá</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end products_detail-fixed  -->
    <div class="app">
        <div class="magin_app">
            <section>
                <div class="detail_products">
                    <div class="grid wide">
                        <div class="products_detail">
                            <div class="row">
                                <div class="col l-5 m-12 c-12">
                                    <!-- SLIDER_IMAGE_PRODUCTS_DETAIL -->
                                    <div class="silder_img-products">
                                        <ul class="slider_products-thumb">
                                            <li class="slider_products-list">
                                                <a href="./assets/img/product/thumb1.jpg" target="imgBox"
                                                    class="slider_products-link">
                                                    <img src="./assets/img/product/thumb1.jpg" alt=""
                                                        class="slider_products-img">
                                                </a>
                                            </li>
                                            <li class="slider_products-list">
                                                <a href="./assets/img/product/thumb2.jpg" target="imgBox"
                                                    class="slider_products-link">
                                                    <img src="./assets/img/product/thumb2.jpg" alt=""
                                                        class="slider_products-img">
                                                </a>
                                            </li>
                                            <li class="slider_products-list">
                                                <a href="./assets/img/product/thumb3.jpg" target="imgBox"
                                                    class="slider_products-link">
                                                    <img src="./assets/img/product/thumb3.jpg" alt=""
                                                        class="slider_products-img">
                                                </a>
                                            </li>
                                            <li class="slider_products-list">
                                                <a href="./assets/img/product/thumb4.jpg" target="imgBox"
                                                    class="slider_products-link">
                                                    <img src="./assets/img/product/thumb4.jpg" alt=""
                                                        class="slider_products-img">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="imgBox"><img src="./assets/img/product/thumb1.jpg" alt=""
                                                class="slider_products-main"></div>
                                    </div>
                                </div>

                                <div class="col l-6 l-o-1 c-12 m-12">
                                    <!-- PRODUCTS_DETAIL -->
                                    <div class="products_detail-info">
                                        <div class="products_detail-header">
                                            <h1 class="products_detail-heading">
                                                FANCL Mild Cleansing Oil - Dầu tẩy trang
                                            </h1>
                                            <p class="products_detail-heading-category">Thương hiệu
                                                <a href="#" class="products_detail-heading-link">Fancl</a>
                                            </p>
                                        </div>
                                        <span class="products_detail-price">650,000đ</span>
                                        <p class="products_detail-title">
                                            Dầu tẩy trang nhiều năm liền đứng nhất bảng xếp hạng Cosme của Nhật với công
                                            nghệ NANO -
                                            chứa các phân tử siêu vi, tăng khả năng làm sạch lỗ chân lông và đánh bay
                                            mụn
                                            đầu đen.
                                        </p>
                                        <form action="#" class="products_detail-form">
                                            <div class="form_label-number">
                                                <label for="">Số lượng:</label>
                                                <input class="products_detail-input" type="number" value="1">
                                            </div>
                                            <div class="products_detail-form-button">
                                                <button class="btn btn--primary products_detail-btn-add add">THÊM VÀO
                                                    GIỎ HÀNG</button>
                                                <button class="btn btn--primary products_detail-btn">MUA NGAY</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col l-12 m-12 c-12">
                                    <div class="products_detail-content">
                                        <div class="products_detail-tab">
                                            <div class="row">
                                                <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                    <a href="#product_info-section" class="products_detail-tab-link">Mô
                                                        tả
                                                        sản phẩm</a>
                                                </div>
                                                <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                    <a href="#product_user-guide-section"
                                                        class="products_detail-tab-link">Hướng dẫn sử dụng</a>
                                                </div>
                                                <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                    <a href="#product_specification-section"
                                                        class="products_detail-tab-link">Thành phần</a>
                                                </div>
                                                <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                    <a href="#product_comment-section"
                                                        class="products_detail-tab-link">Đánh
                                                        giá</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product_info-section"></div>
                                        <div class="product_detail-description">
                                            <div class="product_detail-description-wrapper">
                                                <h2 class="product_detail-information-title">Mô tả sản phẩm</h2>
                                                <div>
                                                    <p>Dầu tẩy trang chứa hỗn hợp các loại dầu và thành phần làm sạch
                                                        được
                                                        tuyển chọn kĩ càng, không lưu lại lớp dầu trên da sau khi tẩy
                                                        trang
                                                    </p>

                                                    <p>- Dễ dàng hoà tan và tẩy sạch mọi lớp trang điểm dù cứng đầu nhất
                                                        như
                                                        mascara, son môi, chống nắng và bụi bẩn.</p>

                                                    <p>- Thành phần chủ yếu là dầu Oliu chống oxy hoá và Vitamin E dưỡng
                                                        ẩm
                                                        cho da luôn mềm mại, mịn màng và tươi trẻ ngay sau khi sử dụng.
                                                    </p>

                                                    <p>- Làm sạch sâu lỗ chân lông, ngừa mụn ẩn, mụn đầu đen.</p>

                                                    <p>- Không cay mắt, có thể sử dụng cho cả vùng mắt và môi.</p>

                                                    <p>- Nhiều năm liền đạt giải nhất bảng xếp hạng Cosme của Nhật.</p>

                                                    <p>- Không hương liệu, không chất bảo quản.</p>

                                                    <p>Phù hợp với mọi loại da, không gây kích ứng.</p>

                                                    <p>Sản xuất tại Nhật Bản</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product_user-guide-section"></div>
                                        <div class="product_detail-description">
                                            <div class="product_detail-description-wrapper">
                                                <h2 class="product_detail-information-title">Hướng dẫn sử dụng</h2>
                                                <div>
                                                    <ul>
                                                        <li>Giữ mặt khô ráo, tay rửa sạch và lau khô.</li>
                                                        <li>Cho một lượng dầu tầm 2-3 lần xịt ra tay, xoa đều rồi
                                                            massage
                                                            nhẹ nhàng trên mặt tầm 1-3 phút.</li>
                                                        <li>Nhúng ướt tay với 1 chút nước, rồi lại massage lên mặt để
                                                            dầu
                                                            chuyển dần sang màu trắng sữa (hay còn gọi là nhũ hoá), lặp
                                                            lại
                                                            động tác này 2-3 lần cho dầu nhũ hoá hết không còn nhờn trên
                                                            da.
                                                        </li>
                                                        <li>Rửa sạch với nước.</li>
                                                        <li>Dùng sữa rửa mặt sau đó.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product_specification-section"></div>
                                        <div class="product_detail-description">
                                            <div class="product_detail-description-wrapper">
                                                <h2 class="product_detail-information-title">Thành phần sản phẩm</h2>
                                                <div>
                                                    <p class="product_detail-information-p">Cetyl Ethylhexanoate,
                                                        Butylene
                                                        Glycol Diisononanoate, Polyglyceryl-10
                                                        Diisostearate, Caprylyl Caprylate / Caprate, Polyglyceryl-20
                                                        Octaisononanoate, Diphenylsiloxy Phenyl Trimethicone,
                                                        Polyglyceryl-20 Hexacaprylate, Limnanthes Alba (Meadowfoam) Seed
                                                        Oil, Dimethicone, Glyceryl Behenate/Eicosadioate, Phytosteryl /
                                                        Isostearyl / Cetyl / Stearyl / Behenyl Dimer Dilinoleate,
                                                        Tocopherol, Stearoyl Inulin, Dextrin Palmitate.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product_comment-section"></div>
                                        <div class="product_detail-description">
                                            <div class="product_detail-description-wrapper">
                                                <h2 class="product_detail-information-title">Góp ý - Bình luận</h2>
                                                <form action="" class="product_detail-comment-form">
                                                    <h2 class="product_detail-comment-form-heading">Xin vui lòng chia sẻ
                                                        đánh giá của bạn về sản phẩm này</h2>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Tiêu đề đánh giá (optional)</label>
                                                        <input type="text" class="product_detail-comment-input-title">
                                                    </div>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Mô tả đánh giá</label>
                                                        <textarea class="product_detail-comment-input-content"
                                                            id="review-description" name="description" maxlength="400"
                                                            spellcheck="true"></textarea>
                                                    </div>

                                                    <button onclick="loginNow()"
                                                        class="btn btn--primary product_detail-comment-btn">
                                                        GỬI NHẬN XÉT
                                                    </button>

                                                </form>
                                                <div class="product_detail-comment">
                                                    <h2 class="product_detail-comment-view-heading">Tất cả bình luận về
                                                        sản
                                                        phẩm</h2>
                                                    <div class="product_detail-comment-view">
                                                        <table class="product_detail-table">
                                                            <thead class="product_detail-thead">
                                                                <th>Tên</th>
                                                                <th>Nội dung</th>
                                                                <th>Thời gian</th>
                                                            </thead>
                                                            <tbody>
                                                                <td>Nguyễn Trường Sơn</td>
                                                                <td>Sản phẩn quá tốt, mọi người nên mua về sử dụng, tôi
                                                                    sử
                                                                </td>
                                                                <td>04/11/2022</td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>Nguyễn Trường Sơn</td>
                                                                <td>Sản phẩn quá tốt, mọi người nên mua về sử dụng, tôi
                                                                    sử
                                                                    dụng hơn 1 tháng và thấy sản phẩm tuyệt vời, tôi đã
                                                                    dùng
                                                                    sản phẩm này hơn 100 năm nên tôi biết rất rõ</td>
                                                                <td>04/11/2022</td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>Nguyễn Trường Sơn</td>
                                                                <td>Sản phẩn quá tốt, mọi người nên mua về sử dụng, tôi
                                                                    sử
                                                                    dụng hơn 1 tháng và thấy sản phẩm tuyệt vời, tôi đã
                                                                    dùng
                                                                    sản phẩm này hơn 100 năm nên tôi biết rất rõ</td>
                                                                <td>04/11/2022</td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>Nguyễn Trường Sơn</td>
                                                                <td>Sản phẩn quá tốt, mọi người nên mua về sử dụng, tôi
                                                                    sử
                                                                    dụng hơn 1 tháng và thấy sản phẩm tuyệt vời</td>
                                                                <td>04/11/2022</td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <!-- sản phẩm mới -->
                        <div class="section_new-products-header">
                            <h1 class="section_new-products-heading">Sản phẩm tương tự
                                <a href="#" class="section_new-products-link">Xem thêm
                                    <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                                </a>
                            </h1>
                            <div class="slick">
                                <div class="slick__slider row">
                                    <div class="slick__item col l-3">
                                        <div class="slick__item-content"
                                            title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                            <a class="silck__item-link" href="#">
                                                <img class="slick__item-img" class=""
                                                    src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR5bf65e281736e/sk-ii-skin-signature-3d-redefining-mask-bottom.png.webp?v=1.3"
                                                    alt="">
                                            </a>

                                            <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> SK-II
                                                    Skin
                                                    Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn</a>
                                            </h2>
                                            <span class="slick__item-price">1.020.000đ</span>


                                        </div>
                                    </div>

                                    <div class="slick__item col l-3">
                                        <div class="slick__item-content"
                                            title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                            <a class="silck__item-link" href="#">
                                                <img class="slick__item-img" class=""
                                                    src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR6347bf26cce05/center.png.webp?v=1.3"
                                                    alt="">
                                            </a>

                                            <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                    V-Firm
                                                    Serum - Tinh chất làm săn chắc & căng mọng da</a>
                                            </h2>
                                            <span class="slick__item-price">1.020.000đ</span>

                                        </div>
                                    </div>

                                    <div class="slick__item col l-3">
                                        <div class="slick__item-content"
                                            title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                            <a class="silck__item-link" href="#">
                                                <img class="slick__item-img" class=""
                                                    src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR632034c232794/center.png.webp?v=1.3"
                                                    alt="">
                                            </a>

                                            <h2 class="slick__item-heading"><a class="slick__item-link"
                                                    href="#">DR.BELTER
                                                    Nobless Cleansing Oil - Dầu tẩy trang cho mọi loại da</a>
                                            </h2>
                                            <span class="slick__item-price">1.020.000đ</span>

                                        </div>
                                    </div>

                                    <div class="slick__item col l-3">
                                        <div class="slick__item-content"
                                            title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                            <a class="silck__item-link" href="#">
                                                <img class="slick__item-img" class=""
                                                    src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                    alt="">
                                            </a>

                                            <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                    V-Firm
                                                    Eye - Gel dưỡng làm săn chắc & nâng mí mắt</a>
                                            </h2>
                                            <span class="slick__item-price">1.020.000đ</span>

                                        </div>
                                    </div>

                                    <div class="slick__item col l-3">
                                        <div class="slick__item-content"
                                            title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                            <a class="silck__item-link" href="#">
                                                <img class="slick__item-img" class=""
                                                    src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                    alt="">
                                            </a>

                                            <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                    V-Firm
                                                    Eye - Gel dưỡng làm săn chắc & nâng mí mắt</a>
                                            </h2>
                                            <span class="slick__item-price">1.020.000đ</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
<?php
include './view/footer.php';
?>