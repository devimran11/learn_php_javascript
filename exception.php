<?php
    class getAge{
        public function __construct($name, $age)
        {   
            $this->name = $name;
            $this->age = $age;
            if($age<4){
                throw new Exception("Too young", 1001);
            }elseif($age > 35){
                throw new Exception("Too Old", 1002);
            }
            echo "Hello World";     
        }

    }
    try{
        $age = new getAge("Rahim", 21);
    }catch(Exception $e){
        echo $e->getCode().":".$e->getMessage();
    }
    