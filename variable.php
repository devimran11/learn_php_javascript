<?php
    session_start();
    echo $_SESSION['page_count'];
    $country = "Bangladesh";
    $age = 16;
    $name = 'age';
    echo $$name;
    echo "\n";
    $question = "How are you!";
    echo "Hello {$country}, {$question}";
    echo "\n";
    echo 'hello $question';
    echo "Hello, weDevs";