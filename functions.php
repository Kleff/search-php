<?php

    // FUNCTIONS
    // Create simple function
    function simpleFunction(){
        echo "Hello World";
    }

    // Run Simple Function
    /* simpleFunction(); */

    function sayHello($name = "World"){
        echo "Hello $name";
        echo "<br>";
    }

    /* sayHello('Jhon');
    sayHello('Jorge');
    sayHello('Jorge');
    sayHello('Jorge'); */

    // Return value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2, 3);

    // By Reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo " Value: $myNum <br>";

    addTen($myNum);
    echo "Value: $myNum<br>";

?>