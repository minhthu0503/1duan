<?php 
session_start();
include "./model/connect.php";
$conn = connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case '':{
        require_once "./controller/users/index.php";
    }
    case 'users':{
        require_once "./controller/users/index.php";
    }
}


include "./view/header.php";
?>
<div class="app">
        <div class="magin_app">
            <!-- slider -->
            <?php 
            include './view/slider.php'
            ?>
            <!-- sectiom -->
            <div class="grid wide">
                <section class="section">
                    <!-- sản phẩm mới -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Sản phẩm mới
                            <a href="#" class="section_new-products-link">Xem thêm
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <?php 
                                $table = 'products';
                                $data = getAllData($table,$conn);
                                foreach($data as $value){
                                ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="./assets/img/product/<?php echo $value['image_product'] ?>"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>

                                    </div>
                                </div>
                                <?php } ?>                            
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
                    <!-- Sản phẩm bán chạy -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Sản phẩm bán chạy
                            <a href="#" class="section_new-products-link">Xem thêm
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                                <?php 
                                $table = 'products';
                                $data = getAllData($table,$conn);
                                foreach($data as $value){
                                ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="./assets/img/product/<?php echo $value['image_product'] ?>"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>

                                    </div>
                                </div>
                                <?php } ?>                            
                            </div>

                        </div>
                    </div>
                    <!-- Sản phẩm -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Sản phẩm gợi ý
                            <a href="#" class="section_new-products-link">Xem thêm
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                            <?php 
                                $table = 'products';
                                $data = getAllData($table,$conn);
                                foreach($data as $value){
                                ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img" class=""
                                                src="./assets/img/product/<?php echo $value['image_product'] ?>"
                                                alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="#"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>

                                    </div>
                                </div>
                                <?php } ?>    
                            </div>

                        </div>
                    </div>
                    <!-- Thương hiệu -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Thương hiệu
                            <a href="#" class="section_new-products-link">Xem thêm
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="slick">
                            <div class="slick__slider row">
                            <?php 
                                $table = 'categorys';
                                $data = getAllData($table,$conn);
                                foreach($data as $value){
                                ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="<?php echo $value['name_category'] ?>">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5d51700ad13d8/lamerlogo.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <?php } ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5c2358173de60/hatomugi.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M5c9dd50f57141/vital-beautie-1.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
                                        <a class="silck__item-link" href="#">
                                            <img class="slick__item-img-brand" class=""
                                                src="https://www.milem.vn/fileserver/images/file/resizepng-510x300/upload/manufacturer/M598720f16aa20/mediheal.png?v=1.3"
                                                alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="slick__item col l-3">
                                    <div class="slick__item-content"
                                        title="SK-II Skin Signature 3D Redefining Mask - Mặt nạ nâng cơ, xoá nhăn">
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
                    <!--tin tức -->
                    <div class="section_news">
                        <h1 class="section_new-products-heading">Giới thiệu và tin tức
                            <a href="#" class="section_new-products-link">Xem thêm
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
                                                    MiLem - The Spa chính thức đi vào hoạt động.
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
                                                    THÔNG BÁO LỊCH NGHỈ TẾT NGUYÊN ĐÁN NHÂM DẦN 2022
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
                                                    5 bước đơn giản để giữ cho da mịn mượt suốt mùa hè
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
                                                    Để trở thành một cô dâu xinh đẹp hoàn hảo
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
<?php
    include "./view/footer.php"
?>