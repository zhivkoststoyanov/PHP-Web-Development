<?php

$input = readline();
$result = explode(' ',$input);

// Loop through colors array
foreach($result as $value){
    for($i=0; $i<strlen($value);$i++){
        echo $value;
    }
}
