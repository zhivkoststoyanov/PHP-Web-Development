<?php

spl_autoload_register();

$instance = new Teacher('J','j@zzone.bg','5555-123','Math');
//var_dump($instance);

echo $instance->getData();

//private -> protected -> public