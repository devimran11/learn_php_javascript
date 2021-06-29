<?php
    class Animal{
        public $name;
        public $age;
        public function setAge($age){
            $this->age = $age;
            return $this;
        }
        public function setName($name){
            $this->name = $name;
            return $this;
        }
        public function getValues(){
            echo "Hello, I am " .$this->name. " Hossain, I'm " .$this->age. " yeras old";
        }

    }
    $set = new Animal();
    $set->setAge(24);
    $set->setName("Imran");
    $set->getValues();
    