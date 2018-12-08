<?php

$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Shawn";
$people[] = "Linda";
$people[] = "Olivia";
$people[] = "Amanda";
$people[] = "Jillian";
$people[] = "Farrah";
$people[] = "Johana";
$people[] = "Katie";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Derek";
$people[] = "Alexander";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = '';

// Get Suggestions
if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ''){
                $suggestion = $person;
            }else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === '' ? 'No Suggestion' : $suggestion;

?>