<?php
    //$vegetables = explode(', ','Potato, begum, tomato, banana, sim, dal,dim');//string to array convertion
    $vegetables = preg_split('/(, |,)/','Potato, begum, tomato, banana, sim, dal,dim,  chal');//string to array convertion
    
    //print_r($vegetables);
    //echo $vegetables[1];
    array_push($vegetables, 'potol');
    print_r($vegetables);
    $array_to_String = join(', ',$vegetables);
    echo $array_to_String;