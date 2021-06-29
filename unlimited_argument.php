<?php
    class Number{
        function addSomeNumbers(...$values):int{
            $result = 0;
            for($i = 0; $i<count($values); $i++){
                $result = $result + $values[$i];
            }
            return $result;
        }
    }
    $n = new Number();
    echo $n->addSomeNumbers(10, 6, 0, 11,3);