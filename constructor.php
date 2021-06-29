<?php

    class Human{
        public $name;
        public $age;
        function __construct($personName, $personAge=0)
        {
            $this->name = $personName;
            $this->age = $personAge;
        }
        function sayHi(){
            echo "Salam\n";
            $this->setName();
        }
        function setName(){
            if($this->age){
                echo "My name is {$this->name}, I am {$this->age} years old\n";
            }else{
                echo "My name is {$this->name}, I don't know how old I am";
            }
            
        }
    }

    class Cat{
        function sayHi(){
            echo "Meow\n";
        }
    }

    class Dog{
        function sayHi(){
            echo "Woof\n";
        }
    }

$h1 = new Human("Tamim Iqbal", 32);
$h1->sayHi();
$h2 = new Human('Musfiqur Rahim', 34);
$h2->sayHi();
