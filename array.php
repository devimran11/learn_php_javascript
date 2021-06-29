<?php
    // $foods = [
    //     'vegitable' => 'potato, begun, shag',
    //     'fool' => 'amm, jamm, lichu',
    //     'ful' => 'golap, sapla, belly',
    // ];
    // // foreach($foods as $key=>$value){
    // //     echo $key."=".$value."\n";
    // // }

    // $keys = array_values($foods);
    // print_r($keys);

    // $students = ['Tamim', 'Sakib', 'Musfiq', 'Riyad', 'Masrafi'];
    // $numbers = count($students);
    // for($i = $numbers - 1; $i>=0; $i--){
    //     echo $students[$i]."\n";
    // }

    //
    

        
        
        // foreach($foods as $keys=>$value){
            //     echo $keys . ' = '. $value."\n";
            // }
            //print_r($keys);
            //for($i = 0; )
            $foods = [
                'vegitable' => 'potato, begun, shag',
                'fool' => 'amm, jamm, lichu',
                'ful' => 'golap, sapla, belly',
            ];
            $foods['ful'] .= ", sapla, golap";
            $keys = array_keys($foods);
            for($i = 0; $i<count($keys); $i++){
                $key = $keys[$i];
                echo $foods[$key]."\n";
            }