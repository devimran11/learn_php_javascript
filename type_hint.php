<?php

    function typeCheck(int $n){
        $result = 1;
        for($i = $n; $i>1; $i--){
            $result = $result * $i;
        }
        return $result;
    }
    $x = 'abcd';
    echo "The {$x} factorial is ". typeCheck($x);