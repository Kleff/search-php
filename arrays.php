<?php
    // Array - Variable that holds multiple values


    $people = array('Kevis', 'Jeremy', 'Sara');
    //echo $people[1];
    $ids = array(23, 434, 234, 56);
    $cars = array('Honda', 'Toyota', 'Ford');
    $cars[3] = "Chevy";
    $cars[] = "BMW";



    /* echo $cars[4];
    echo count($cars);
    echo "<br>";
    print_r($cars); */
    //var_dump($cars);


    // Associative arrays

    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    //echo $people['Brad'];


    // Multi-Dimensional

    $cars = array(
        array('Honda', 20, 12),
        array('Toyota',30, 120),
        array('Ford', 23, 12)
    );

    echo $cars[1][0];

?>