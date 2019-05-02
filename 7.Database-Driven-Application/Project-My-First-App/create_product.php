<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$products_obj = new Products($db);
$categories_obj = new Categories($db);


if($_POST){
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$cat_id = $_POST['cat_id'];
	$product_id = $products_obj->createProduct($product_name,$price,$description,$cat_id);
        
        header('Location: view_product.php?product_id='.$product_id.'&mode=1');
	exit;
}

include 'header.php';
include 'create_form.php';
include 'footer.php';