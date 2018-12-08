<?php
    // Conditionals

    $num = 5;

    /* if($num == 5){
        echo '5 passed';
    }elseif( $num == 6){
        echo '6 pased';
    }else {
        echo ' did not pass';
    } */

    /* if($num > 4){
        if($num < 10){
            echo $num . ' passed';
        }
    } */
/* 
    if ($num > 4 OR $num < 10){
        echo $num . " num passed";
    } */

    // SWITCH

    $favColor = 'yellow';

    switch($favColor){
        case 'red':
            echo "Your favourite color is red";
            break;
        case 'blue':
            echo "Your favourite color is blue";
            break;
        default:
            echo "Your color is hard to guess";
    }

?>