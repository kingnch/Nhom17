<?php
include "header.php";
include "slider.php";
include "product_class.php";
?>
<?php
$product= new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_product = $product ->insert_product($_POST,$_FILES);
}
?> 

<div class = "admin-content-right">
<div class="admin-content-right-product">
    <h1>Thêm Bài Giảng</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nhập tên bài giảng <span style="color: red;">*</span></label>
        <input name="tenbaigiang_name" required type="text">
        <label for="">Chọn mục<span style="color: red;">*</span></label>
        <select name="cartegory_id" id="">
        <option value="#">--Chọn--</option>
            <?php 
            $show_cartegory = $product -> show_cartegory();
            if($show_cartegory) {while($result = $show_cartegory -> fetch_assoc()) {

            ?>
            <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
            <?php
            }}
            ?>
        </select>
        <label for="">Chọn môn<span style="color: red;">*</span></label>
        <select name="brand_id" id="">
        <option value="#">--Chọn--</option>
            <?php 
            $show_brand = $product -> show_brand();
            if($show_brand) {while($result = $show_brand -> fetch_assoc()) {
            ?>
            <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['brand_name']?></option>
            <?php
            }}
            ?>
        </select>
        <label for="">Nhập tên tác giả<span style="color: red;">*</span></label>
        <input name = "tacgia_id"type="text">
        <label for="">Nội dung<span style="color: red;">*</span></label>
        <textarea required name="noidung_desc" id="" cols="30" rows="10"></textarea>
        <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
        <input name ="baigiang_img" required multifile type="file">
        <button type="submit">Thêm</button>
    </from>
</div>
</div>
