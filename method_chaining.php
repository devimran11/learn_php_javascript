<?php
    class Chining{
        private $age;
        private $name;
        public function setName($name)
        {
            $this->name = $name;
            return $this;
        }
        public function setAge($age)
        {
            $this->age = $age;
            return $this;
        }
        public function getNameAge()
        {
            echo "Hello My name is {$this->name} and i am {$this->age} years old";
        }
    }
    $chinging = new Chining();
    $chinging->setName('Imran Hossain')->setAge(25)->getNameAge();