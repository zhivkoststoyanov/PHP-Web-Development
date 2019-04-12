<?php

$input = readline();
//$input = readline();

while (!($input == 'end')) {

    if($input == 'end'){
        break;
    }
    echo $input . " = " . strrev($input) . PHP_EOL;
    $input = readline();
}
