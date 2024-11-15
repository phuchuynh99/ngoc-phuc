<?php
include_once "connect.php";

function getproduct($id=0){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE 1";
   if($id > 0){
      $sql .= " AND id_category=".$id;
   }
   $sql .= " ORDER BY id DESC";
   return $db->get_all($sql);
}

function getsaleproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE promotion > 0 ORDER BY promotion DESC";
   return $db->get_all($sql);
}

function getviewproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC";
   return $db->get_all($sql);
}

function getfeatureproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE new = 1 ORDER BY id DESC";
   return $db->get_all($sql);
}

function get_related_product($idcatalog, $id){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE idcatalog = ".$idcatalog." AND id <> ".$id." ORDER BY id DESC";
   return $db->get_all($sql);
}

function get_product_detail($id){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE id = ".$id;
   return $db->get_one($sql);
}

function get_idcatalog($id){
   $db = new ConnectModel();
   $sql = "SELECT idcatalog FROM product WHERE id = ".$id;
   $getone = $db->get_one($sql);
   extract($getone);
   return $idcatalog;
}

function ten_file_hinh($id){
   $db = new ConnectModel();
   $sql = "SELECT img FROM product WHERE id = ".$id;
   $img = $db->get_one($sql);
   extract($img);
   return $img; 
}

function update_product($id, $id_category, $img, $name, $price, $discount_price){
   $db = new ConnectModel();
   if($img != ""){
      // Nếu có ảnh được cập nhật
      $sql = "UPDATE product 
              SET img = '$img', 
                  id_category = '$id_category', 
                  name = '$name', 
                  price = '$price', 
                  discount_price = '$discount_price' 
              WHERE id = ".$id;
   } else {
      // Nếu không có ảnh được cập nhật
      $sql = "UPDATE product 
              SET id_category = '$id_category', 
                  name = '$name', 
                  price = '$price', 
                  discount_price = '$discount_price' 
              WHERE id = ".$id;
   }
   $db->update($sql);
}


function delete_product($id){
   $db = new ConnectModel();
   $sql = "DELETE FROM product WHERE id = ".$id;
   $db->delete($sql);
   $tb = "Xóa thành công";
   return $tb;
}

function add_product($id_category, $img, $name, $price) {
   $db = new ConnectModel();
   $sql = "INSERT INTO product(id_category, name, img, price) VALUES ('$id_category', '$name', '$img', '$price')";
   $db->insert($sql);
}

?>
