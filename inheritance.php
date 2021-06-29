<?php
    class Teacher{
        protected $name;
        public function __construct($name)
        {
            $this->name = $name;
            $this->sayHi();
        }
        final public function one(){
            echo "Total students 10";
        }
        public function sayHi(){
            echo "Hello, I am {$this->name}\n";
        }
    }

    class Student extends Teacher{
        public function two()
        {
            echo 'Total number of students 20';
        }
        public function sayHi(){
            parent::sayHi();
            echo "I am From Student Class";
        }
    }

    $student = new Student('ABCD');