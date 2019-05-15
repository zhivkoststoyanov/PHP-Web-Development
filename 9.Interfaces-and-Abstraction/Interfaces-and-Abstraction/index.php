<?php

spl_autoload_register();

try{
    $app = new Application();
    $app->run();
} catch (Exception $ex) {
    echo "Some problem: " .$e->getMessage();
}
 

