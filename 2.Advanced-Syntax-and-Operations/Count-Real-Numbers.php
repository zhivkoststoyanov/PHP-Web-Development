<?php

$input = readline();
$result = explode(' ',$input);

$arr = [];
$countNumber = [];

for($i = 0; $i<count($result); $i++){
    $arr = $result;
}

var_dump($arr);
$arr = array(-2.5, 4, 4, 3, -2.5, -5.5, 4, 3, 3, -2.5, 3);




for ($i = 0; $i < count($arr); $i++) {

    $currentEl = $arr[$i] . "";

    if (!array_key_exists($currentEl, $countNumber)) {

        $countNumber[$currentEl] = 1;

    } else {

        $countNumber[$currentEl]++;

    }

}

print_r($countNumber);