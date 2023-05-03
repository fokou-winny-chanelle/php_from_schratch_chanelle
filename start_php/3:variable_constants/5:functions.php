<?php
    // calling funtion before declaring
    func();

    // define a function
    // declare a function
    function func() 
    {
        $length = 10;
        $width = 6;

        $area = $length * $width;
        echo "length = $length <br>width = $width <br>Area = $area<br><br>";
    }
    //calling after function
    func();

    /*
    // duplicate function
    function func()
    {
        echo "duplicate function";
    }
    */
?>