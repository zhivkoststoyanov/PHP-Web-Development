<?php
$arr = [];
$income = 0;

while(1){

    $city = trim(readline('City: '));
    if($city== ''){
        break;
    }
    $income = intval(readline('income: '));

    if(!array_key_exists($city,$arr)){
        $arr[$city] = 0;

    }
    $arr[$city] +=$income*1.2;
}

print_r($arr);