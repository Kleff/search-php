<?php

    // Dates

   /*  echo date('d'); // Day
    echo date('m'); // Month
    echo date('Y'); // year
    echo date('l'); // day of the week */

    /* echo date('h'); // hours
    echo date('i'); // minutes
    echo date('s'); // seconds
    echo date('a'); // AM or PM */

  // set time zone
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    //echo date('h:i:sa');

    $timeStamp = mktime(10, 14, 54, 9, 10, 1981);

    //echo $timeStamp;

    echo date('m-d-Y h:i:sa', $timeStamp);


    
    
    
?>