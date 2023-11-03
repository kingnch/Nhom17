<?php
include "database.php";
?>

<?php

class product{
    private $db;

    public function __construct() 
    {
        $this -> db = new Database();
    }
    public function show_cartegory()
    {
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_brand()
    {
        $query = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_product()
    {
        $query = "SELECT tbl_baigiang1.*, tbl_cartegory.cartegory_name, tbl_brand.brand_name FROM tbl_baigiang1 INNER JOIN tbl_cartegory ON tbl_baigiang1.cartegory_id = tbl_cartegory.cartegory_id INNER JOIN tbl_brand ON tbl_baigiang1.brand_id = tbl_brand.brand_id ORDER BY tbl_baigiang1.tenbaigiang1_id DESC;";
        $result = $this->db->select($query);    
        return $result;
    }
    public function get_product($tenbaigiang1_id){
        $query = "SELECT * FROM tbl_baigiang1 WHERE tenbaigiang1_id=$tenbaigiang1_id";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_product($tenbaigiang1_id,$tenbaigiang_name,$cartegory_id,$brand_id,$tacgia_id,$noidung_desc){
        $query = "UPDATE tbl_baigiang1 
        SET tenbaigiang_name = '$tenbaigiang_name', 
            cartegory_id = 'cartegory_id', 
            brand_id = 'brand_id', 
            tacgia_id = 'tacgia_id', 
            noidung_desc = 'noidung_desc' 
        WHERE tenbaigiang1_id = 'tenbaigiang1_id';";
        $result = $this->db->update($query);
        header('Location:productlist.php');
        return $result;
    }
    public function delete_product($tenbaigiang1_id){
        $query = "DELETE FROM tbl_baigiang1 WHERE tenbaigiang1_id= '$tenbaigiang1_id' ";
        $result = $this->db->delete($query);
        header('Location:productlist.php');
        return $result;
    }
    public function insert_product(){
        $tenbaigiang_name = $_POST['tenbaigiang_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $tacgia_id = $_POST['tacgia_id'];
        $noidung_desc = $_POST['noidung_desc'];
        $baigiang_img = $_FILES['baigiang_img']['name'];
        move_uploaded_file($_FILES['baigiang_img']['tmp_name'],"uploads/".$_FILES['baigiang_img']['name']);
        $query = "INSERT INTO tbl_baigiang1(tenbaigiang_name,cartegory_id,brand_id,tacgia_id,noidung_desc,baigiang_img)
        VALUES ('$tenbaigiang_name','$cartegory_id','$brand_id','$tacgia_id','$noidung_desc','$baigiang_img')";
        $result = $this->db->insert($query);
        return $result;
    }
}