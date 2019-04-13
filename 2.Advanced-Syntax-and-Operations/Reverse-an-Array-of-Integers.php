<?php

$n = intval(readline());
$arr = [];

for($i = 0; $i<$n;$i++){
    $arr[$i] = intval(readline());


}
$newArr = array_reverse($arr);

foreach ($newArr as $value){
    echo $value .  " ";
}