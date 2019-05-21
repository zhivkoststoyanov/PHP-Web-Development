<?php

use DB\DBConnection as DBConn;

spl_autoload_register();

$url = $_SERVER['REQUEST_URI'];
//echo $url;

$url_data = explode('/', $url);
array_shift($url_data);
array_shift($url_data);
//var_dump($url_data);


$controller = $url_data[0]??'products'?:'products';
$action = $url_data[1]??'index';
$param = $url_data[2]??null;

$db = DBConn::getConnection();

$controller = 'Controllers\\'.ucfirst($controller).'Controller';
echo $controller;

if(!class_exists($controller)){
    throw new ErrorException("Non valid controller");
}
$controller_obj = new $controller($db);

$controller_obj->$action($param);

