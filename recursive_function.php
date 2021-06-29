<?php
    function printNumber($counter, $end, $stepping){
        if($counter>$end){
            return;
        }
        echo $counter."\n";
        $counter+=$stepping;;
        printNumber($counter, $end, $stepping);
    }
    printNumber(21, 35, 2);