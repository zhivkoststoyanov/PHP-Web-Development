<?php

$input = readline();
if((strlen($input)<=20)){
    echo $input;
    for($i = strlen($input); $i<20;$i++){
        echo "*";
    }
}
else{
    echo "a regular expression";
}