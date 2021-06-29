<?php

    abstract class Dog{
        abstract protected function dog();
        public function sayHi(){
            echo "Woof";
        }
        private function name(){
            
        }
        abstract public function hello();
        abstract protected function setName($name, $age, $color);
    }
    class Cat extends Dog{
        public function __construct()
        {
            $this->hello();
        }
        public function hello()
        {
            echo 'Say Hello';
        }
        public function setName($name, $age, $color)
        {
            echo $name . ' hossain '.$age.' years old'."\n";
        }
        public function dog(){
            echo "Woof";
        }
    }

    $cat = new Cat();
    $cat->setName('Imran', 24, 'white');
    $cat->sayHi();
    $cat->dog();