<?php
    echo "<h1>Time</h1>";
    echo "Current date and time is :   " .date('m/d/Y h:i:s a') . "<br>"; 
    echo "<label >Choose a timezone:</label>";

    function getTimeZoneOffset($timeZone) {
        date_default_timezone_set($timeZone);
        echo " alert(\"",date('m/d/Y h:i:s a'),"\") " ;
    }
  
    // Create a timezone identifiers
    $timezone_identifiers = [
        "Asia/Oral",
        "Australia/Melbourne",
        "America/Marigot",
        "America/Jamaica",
        "Africa/Brazzaville",
        "Africa/Dakar",
        "Africa/Algiers"
    ];
    
    echo "<select onclick=' "; 
    foreach($timezone_identifiers as $val) 
    {   
        echo getTimeZoneOffset($val);
        
    }
    echo" ' >";
    echo "<option disabled selected>
            Please Select Timezone
        </option>";
    foreach($timezone_identifiers as $val) 
    {   
        echo "<option value='" . $val . "' >" . $val . "</option>";
    }
    echo "</select>";
?>