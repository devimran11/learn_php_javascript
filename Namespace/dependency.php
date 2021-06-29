<?php
    interface BaseStudent{
        public function displayName();
    }
    class ImproveStudent implements BaseStudent{
        private $name;
        private $title;
        public function __construct($name, $title)
        {
               $this->name = $name;
               $this->title = $title; 
        }
        public function displayName()
        {
            echo "Hello {$this->title} {$this->name}";
        }
    }
    class TenStudent implements BaseStudent{
        private $name;
        private $class;
        private $age;
        public function __construct($name, $class, $age)
        {   
            $this->name = $name;
            $this->class = $class;
            $this->age = $age;
        }
        public function displayName(){
            echo "Introduce this girl {$this->name} he is {$this->class} and {$this->age} years old";
        }
    }
    class Student implements BaseStudent{
        private $name;
        public function __construct($name)
        {
              $this->name = $name;  
        }
        public function displayName()
        {
            echo "Hello {$this->name}";
        }
    }
    class StudentManagment{
        public function introduceStudent(BaseStudent $student)
        {
            $student->displayName();
        }
        
    }
    $improvedStudent = new ImproveStudent("Imran", "Mr. ");
    $ten = new TenStudent("Mustofa", 10, 17);
    $st = new Student("Imran");
    $stm = new StudentManagment();
    $stm->introduceStudent($ten);