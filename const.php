<?php
   /*
    define("HELLO", "Hello i am from Bangladesh");
    echo HELLO."\n";

    $n = 10;
    $m = ++$n;
    echo $m. "\n". $n;
    */
    define('PI', 3.1416);
    echo "The Value of PI = ".PI;
    echo "\n";
    echo PI;
    echo "\n";
   class simpleClass{
      const a = "America\n";
      public static function sayHello(){
         return "Hello America\n";
      }
      public function set(){
         echo self::sayHello();
         echo "Imran Hossain\n";
         echo self::a;
      }
   }
   $s = new simpleClass();
   $s->set();
   simpleClass::sayHello();
