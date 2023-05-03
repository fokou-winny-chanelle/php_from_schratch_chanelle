<?php
    // switch with boolean to checke if a number is greater than or equal to 10
    $input_number = 11;
    switch(true) 
    {
        case $input_number > 10:
            echo 'Number greater than 10' ;
            break;
        case $input_number  == 10:
            echo 'Number equal than 10' ;
            break;
        default:
            echo 'Number less than 10' ;
    }
    echo "<br>";
    //String based switch condition
    $weekday = "Fri";
    switch($weekday) 
    {
        case "Mon":
            echo 'Monday';
            break;
        case "Fri":
            echo 'Friday' ;
            break;
        default:
            echo 'Others' ;
    }
?>