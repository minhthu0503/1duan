<?php
$sql = "SELECT * from categorys";
$result = mysqli_query($connect, $sql);
?>
<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=store_product" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Tên sản phẩm" name="name_product" class="box">
            <input type="file" placeholder="Ảnh sản phẩm" name="image_product" class="box">
            <!-- <input type="text" placeholder="Mô tả" name="describe" class="box"> -->
            <textarea rows="5" cols="5" name="describe" class="box" placeholder="Mô tả"></textarea>
            <input type="text" placeholder="Giá sản phẩm" name="price" class="box">
            <select name="category_id" id="" class="box" placeholder="Loại hàng">
                <?php foreach ($result as $each) : ?>
                    <option value="<?php echo $each['id'] ?>">
                        <?php echo $each['name_category'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <input type="submit" class="btn" name="add_product" value="Thêm sản phẩm">
            <a href="index.php?action=list_product" class="btn" name="add_product">danh mục</a>
        </form>
    </div>

</div>