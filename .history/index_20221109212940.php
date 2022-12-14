<?php 
include "./model/connect.php";
$conn = connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case 'thanh-vien':{
        require_once "./controller/thanh-vien/index.php";
    }
}


include "./view/index.php";
?>
<div class="app">
        <div class="magin_app">
            <!-- slider -->
            <div class="grid wide">
                <div class="slider">
                    <button class="slider_btn slider_btn-prev" id="prev"><i
                            class="fa-solid fa-chevron-left"></i></button>
                    <button class="slider_btn slider_btn-next" id="next"><i
                            class="fa-solid fa-chevron-right"></i></button>
                    <div class="slider_show">
                        <div class="slider_show-item active">
                            <img class="slider_show-img" src="./assets/img/slider/banner1.webp" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner2.png" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner3.png" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner4.png" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner5.png" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner6.png" alt="">
                        </div>
                        <div class="slider_show-item">
                            <img class="slider_show-img" src="./assets/img/slider/banner7.png" alt="">
                        </div>

                    </div>

                </div>
            </div>
            <!-- sectiom -->
            <div class="grid wide">
                <section class="section">
                    <!-- s???n ph???m m???i -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">S???n ph???m m???i
                            <a href="#" class="section_new-products-link">Xem th??m
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR5bf65e281736e/sk-ii-skin-signature-3d-redefining-mask-bottom.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> SK-II Skin
                                                Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>


                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR6347bf26cce05/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Serum - Tinh ch???t l??m s??n ch???c & c??ng m???ng da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR632034c232794/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">DR.BELTER
                                                Nobless Cleansing Oil - D???u t???y trang cho m???i lo???i da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- banner -->
                    <div class="section_new-products-banner">
                        <div class="row">
                            <div class="col l-6 c-12 m-12">
                                <img src="https://www.milem.vn/fileserver/images/file/fixsize-540x200/upload/addon/adbanner/W5bcd5575532e8/milemskiiantiaging.png?v=1.3"
                                    alt="" class="section_new-products-banner-img">
                            </div>
                            <div class="col l-6 c-12 m-12">
                                <img src="https://www.milem.vn/fileserver/images/file/fixsize-540x200/upload/addon/adbanner/W5bcd55e27baa0/en-elixir20anshomepagedesktopeng-(1).png?v=1.3"
                                    alt="" class="section_new-products-banner-img">
                            </div>
                        </div>
                    </div>
                    <!-- S???n ph???m b??n ch???y -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">S???n ph???m b??n ch???y
                            <a href="#" class="section_new-products-link">Xem th??m
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR5bf65e281736e/sk-ii-skin-signature-3d-redefining-mask-bottom.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> SK-II Skin
                                                Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>


                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR6347bf26cce05/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Serum - Tinh ch???t l??m s??n ch???c & c??ng m???ng da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR632034c232794/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">DR.BELTER
                                                Nobless Cleansing Oil - D???u t???y trang cho m???i lo???i da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- S???n ph???m -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">S???n ph???m g???i ??
                            <a href="#" class="section_new-products-link">Xem th??m
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR5bf65e281736e/sk-ii-skin-signature-3d-redefining-mask-bottom.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> SK-II Skin
                                                Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>


                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR6347bf26cce05/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Serum - Tinh ch???t l??m s??n ch???c & c??ng m???ng da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR632034c232794/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">DR.BELTER
                                                Nobless Cleansing Oil - D???u t???y trang cho m???i lo???i da</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resize-400x400/upload/product/PR634fc5a4d9206/center.png.webp?v=1.3"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#">VALMONT
                                                V-Firm
                                                Eye - Gel d?????ng l??m s??n ch???c & n??ng m?? m???t</a>
                                        </h2>
                                        <span class="slick__item-price">1.020.000??</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Th????ng hi???u -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Th????ng hi???u
                            <a href="#" class="section_new-products-link">Xem th??m
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5d51700ad13d8/lamerlogo.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5c2358173de60/hatomugi.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5c9dd50f57141/vital-beautie-1.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M598720f16aa20/mediheal.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - M???t n??? n??ng c??, xo?? nh??n">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5bd2c4504b9df/fancl.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--tin t???c -->
                    <div class="section_news">
                        <h1 class="section_new-products-heading">Gi???i thi???u v?? tin t???c
                            <a href="#" class="section_new-products-link">Xem th??m
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="row">
                            <div class="col l-6 c-12 m-12">
                                <iframe class="section_news-video" width="560" height="315"
                                    src="https://www.youtube.com/embed/MPqiIX7fiec" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col l-6 c-12 m-12">
                                <div class="row">
                                    <div class="col l-6 c-12 m-12">
                                        <div class="section_news-block break">
                                            <div class="section_news-block-img">
                                                <a href="" class="section_news-block-link">
                                                    <img src="https://www.milem.vn/vi-vn/images/resize-700x0/upload/media/M62c8d506529f2/untitled-3.21.jpg?v=1.3"
                                                        alt="" class="section_news-img">
                                                </a>
                                            </div>
                                            <h1 class="section_news-heading">
                                                <a class="section_news-block-link" href="">
                                                    MiLem - The Spa ch??nh th???c ??i v??o ho???t ?????ng.
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col l-6 c-12 m-12">
                                        <div class="section_news-block break">
                                            <div class="section_news-block-img">
                                                <a href="" class="section_news-block-link">
                                                    <img src="https://www.milem.vn/vi-vn/images/resize-700x0/upload/media/M61e6513316d74/1986.3.jpg?v=1.3"
                                                        alt="" class="section_news-img">
                                                </a>
                                            </div>
                                            <h1 class="section_news-heading">
                                                <a class="section_news-block-link" href="">
                                                    TH??NG B??O L???CH NGH??? T???T NGUY??N ????N NH??M D???N 2022
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col l-6 c-12 m-12">
                                        <div class="section_news-block">
                                            <div class="section_news-block-img">
                                                <a href="" class="section_news-block-link">
                                                    <img src="https://www.milem.vn/vi-vn/images/autosize-700x0/upload/media/M5cbd9c802de11/facialtreatmentessencesummerskin.jpg"
                                                        alt="" class="section_news-img">
                                                </a>
                                            </div>
                                            <h1 class="section_news-heading">
                                                <a class="section_news-block-link" href="">
                                                    5 b?????c ????n gi???n ????? gi??? cho da m???n m?????t su???t m??a h??
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col l-6 c-12 m-12">
                                        <div class="section_news-block">
                                            <div class="section_news-block-img">
                                                <a href="" class="section_news-block-link">
                                                    <img src="https://www.milem.vn/vi-vn/images/resize-700x0/upload/media/M5d286a6653913/nuoc-than-sk-ii-facial-treatment-essence-noi-dia-chinh-hang.png?v=1.3"
                                                        alt="" class="section_news-img">
                                                </a>
                                            </div>
                                            <h1 class="section_news-heading">
                                                <a class="section_news-block-link" href="">
                                                    ????? tr??? th??nh m???t c?? d??u xinh ?????p ho??n h???o
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>