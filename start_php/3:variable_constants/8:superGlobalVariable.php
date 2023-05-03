<!-- super global variable -->
<?php
     echo "<h1 style='color:blue'><br> super global variables</h1>";
    global $var;
    $var = "Welcome to chanelle's php";
    echo $GLOBALS['var'],'<br><br>';


    // getting predefine super global variables like the php script name 
    echo $_SERVER['PHP_SELF']

?>