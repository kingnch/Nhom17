<?php
include "header.php";
include "slider.php";
include "product_class.php";
?>
<?php
$product= new product;
$tenbaigiang1_id = $_GET['tenbaigiang1_id'];
$get_product = $product->get_product($tenbaigiang1_id);
if($get_product){
    $resultA = $get_product -> fetch_assoc();
}
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenbaigiang_name = $_POST['tenbaigiang_name'];
    $cartegory_id = $_POST['cartegory_id'];
    $brand_id = $_POST['brand_id'];
    $tacgia_id = $_POST['tacgia_id'];
    $noidung_desc = $_POST['noidung_desc'];
    $update_product = $product ->update_product($tenbaigiang1_id,$tenbaigiang_name,$cartegory_id,$brand_id,$tacgia_id,$noidung_desc);
}
?> 

<div class = "admin-content-right">
<div class="admin-content-right-product">
    <h1>Sửa Bài Giảng</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Tên bài giảng <span style="color: red;">*</span></label>
        <input name="tenbaigiang_name" required type="text" value = "<?php echo $resultA['tenbaigiang_name']?>">
        <label for="">Chọn mục<span style="color: red;">*</span></label>
        <select name="cartegory_id" id="">
        <option value="#">--Chọn--</option>
            <?php 
            $show_cartegory = $product -> show_cartegory();
            if($show_cartegory) {while($result = $show_cartegory -> fetch_assoc()) {
            ?>
            <option <?php if($resultA['cartegory_id']==$result['cartegory_id']){echo "SELECTED";} ?>value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
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
            <option <?php if($resultA['brand_id']==$result['brand_id']){echo "SELECTED";} ?> value="<?php echo $result['cartegory_id']?>"><?php echo $result['brand_name']?></option>
            <?php
            }}
            ?>
        </select>
        <label for="">Nhập tên tác giả<span style="color: red;">*</span></label>
        <input name = "tacgia_id"type="text" value = "<?php echo $resultA['tacgia_id']?>">
        <label for="">Nội dung<span style="color: red;">*</span></label>
        <textarea required name="noidung_desc" id="" cols="30" rows="10" ><?php echo $resultA['noidung_desc']?></textarea>
        <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
        <input name ="baigiang_img" required multifile type="file" value = "<?php echo $resultA['baigiang_img']?>">
        <button type="submit">Sửa</button>
    </from>
</div>
</div>
