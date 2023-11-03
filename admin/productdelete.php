<?php 
include ("product_class.php");

$product = new product();
$tenbaigiang1_id = $_GET['$tenbaigiang1_id'];
$delete_product = $product->delete_product($product_id);
?>