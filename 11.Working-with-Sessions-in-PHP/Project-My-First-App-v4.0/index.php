<?php

use DB\DBConnection as DBConn;

spl_autoload_register();
session_start();

$url = $_SERVER['REQUEST_URI'];
//echo $url;

/** @var type $url_data */
$url_data = explode('/', $url);
array_shift($url_data);
array_shift($url_data);
var_dump($url_data);


$controller = $url_data[0]??'products'?:'products';
$action = $url_data[1]??'index';
$param = $url_data[2]??null;

$db = DBConn::getConnection();

$controller_name = ucfirst($controller);
$controller = 'Controllers\\'.$controller_name.'Controller';
echo $controller;

if(!class_exists($controller)){
    throw new ErrorException("Non valid controller");
}

$controller_obj = new $controller($db, $controller_name);


$controller_obj->$action($action,$param);
