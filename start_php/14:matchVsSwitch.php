<?php 
    // switch case
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
    echo "<br><br>";
    // match
    match($weekday)
    {
        "Mon" => print 'Monday',
        "Fri" => print 'Friday' ,
        default => 'others',mmm
    }
?>