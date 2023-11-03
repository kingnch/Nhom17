<?php
include "header.php";
include "slider.php";
include "product_class.php";
?>
<?php
$product= new product;
$show_product = $product->show_product();
?> 
<div class = "admin-content-right">
    <div class="admin-content-right-product_list">
        <h1> Danh sách bài giảng</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên bài giảng</th>
                <th>Mục</th>
                <th>Môn học</th>
                <th>Tác giả</th>
                <th>Thao tác</th>
            </tr>
            <?php
            if($show_product){$i=0;
                while($result = $show_product->fetch_assoc()){ $i++;
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $result['cartegory_name']?></td>
                <td><?php echo $result['brand_name']?></td>
                <td><?php echo $result['tenbaigiang_name']?></td>
                <td><?php echo $result['tacgia_id']?></td>
                <td><a href="productedit.php?tenbaigiang1_id=<?php echo $result['tenbaigiang1_id']?>">Sửa</a>|<a href="productdelete.php?tenbaigiang1_id=<?php echo $result['tenbaigiang1_id']?>">Xóa</a></td>
            </tr>
            <?php
                }
            }
            ?>  
        </table>
    </div>
</div>

</section>

</body>
</html>