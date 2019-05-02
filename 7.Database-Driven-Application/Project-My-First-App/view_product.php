<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register();

$db = DBConnection::getConnection();

$product_obj = new Products($db);

$product_id = $_GET['product_id'] ?? null;


include ('header.php');


if(isset($_GET['mode'])){
	echo "Successful created product!<br><br>";
	}


if ($product_id) {

    $product = $product_obj->getOne($product_id);

    if ($product) {
        foreach ($product as $key => $value) {
            echo $key . ':' . $value . '<br/>';
        }
    } else {
        echo 'No product found!';
    }
} else {
    echo 'No product id!';
}


include('footer.php');
