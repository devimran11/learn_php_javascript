<?php
    // $person = array('fname'=>'Hello', 'lname'=>'World');
    // $newPerson = &$person;//reference copy
    // $newPerson['lname'] = 'Pluto';
    // print_r($person);
    // print_r($newPerson);//deep copy

    // $name = "Imran hossain";//global variable
    // function toDo(){
    //     $age = 25;
    //     echo $GLOBALS['name'];
    //     echo $age;
    // }
    // toDo();
    // echo $name;
    // echo $age;
    function Sta(){
        static $i; //static scope
        $i = $i ?? 0;
        $i++;
        echo $i;
        echo "\n";
    }
    Sta();
    Sta();
    Sta();
    Sta();

