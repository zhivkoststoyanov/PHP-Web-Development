<?php

class Application {

/* *        
 *  @var Person[]
 */
public $results = [];

public function run() {
$this->readData();
$this->printData();

}

private function readData(){


//student name email
while ($line = readline()) {

if (!$line == '  ') {
break;
}

list($type, $name, $email) = explode(' ', $line);

if (!class_exists($type)) {
throw new Exception('Non valid type');
}
$this->results[] = new $type($name, $email);
    }
}

private function printData(){

    foreach ($this->results as $line) {
    $line->printData();
    }

}

}