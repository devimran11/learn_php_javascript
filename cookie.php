<?php
    $setName = "Imran";
    $setAge = 24;
    setcookie($setName, $setAge, time() + (86400*30), "/");
    if(!isset($_COOKIE[$setName])){
        echo "Cookie is not set";
    }else{
        echo "Set your cookie from".$_COOKIE[$setAge];
    }