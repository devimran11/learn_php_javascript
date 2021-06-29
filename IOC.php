<?php
    interface BaseStudent{
        public function displayName();
    }
    class ImporvedStudent implements BaseStudent{
        private $name;
        private $title;
        public function __construct($name, $title)
        {   
            $this->name = $name;
            $this->title = $title;
        }
        public function displayName(){
            echo "Hello From {$this->title}.{$this->name} ";
        }
    }
    class Student implements BaseStudent{
        private $name;
        public function __construct($name)
        {   
            $this->name = $name;
        }
        public function displayName(){
            echo "Hello From ".$this->name;
        }
    }
    // class StudentManager{
    //     public function introduceStudent($name){
    //         $st = new Student($name);
    //         $st->displayName();
    //     }
    // }

    class StudentManager{
        public function introduceStudent(BaseStudent $student){
            $student->displayName();
        }   
    }
    $ImprovedStudent = new ImporvedStudent("Imran", "Mr");
    $st = new Student("Jone Doe");
    $sm = new StudentManager();
    $sm->introduceStudent($ImprovedStudent);