<?php
    namespace Animals;
use Animals\Test\TestAnimal;

include_once "vendor/autoload.php";
    $cat = new Cat();
    $cat->greet();
    echo "\n";
    echo 'Hello World';
    echo "\n";
    $test = new TestAnimal();
    $test->greet();