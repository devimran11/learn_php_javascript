<?php
    class Person{
        public static $name = "Imran Hossain";
        public function fullName()
        {
            return self::$name;
        }
    }

    class ChildPerson extends Person{
        const a = 10;
        define("GREATTING", "HELLO WORLD");
        
        public function childFullName()
        {
            echo  parent::fullName();
            echo '<br>';
            echo self::a;
        }
    }
    // $person = new Person();
    // echo $person->fullName();
    // $child = new ChildPerson();
    ChildPerson::childFullName();