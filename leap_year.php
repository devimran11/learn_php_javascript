<?php
    $year = 1900;
    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
        echo "{$year} is a leap year";
    }else if($year % 4 == 0 && $year % 100 == 0){
        echo "{$year} is a not leap year";
    }else if($year % 4 == 0){
        echo "{$year} is a leap year";
    }else{
        echo "{$year} is a not leap year";
    }