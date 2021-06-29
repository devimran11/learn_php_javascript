<?php
    $n = 10;
    if(10 == $n){
        echo "Ten";
    }elseif(12 == $n){
        echo "Twelve";
    }else{
        echo "A Number";
    }

    $number = (12 == $n) ? "Twelve" : "A Number";
    echo $number;