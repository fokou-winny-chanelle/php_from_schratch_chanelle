<?php
    function exception_handleler($e)
    {
        echo "cought exception : ",$e -> getMessage();
    }
    set_exception_handler("exception_handleler");
    function division($a,$b):float{
        if($b == 0)
        {
            throw new Exception("Divide By Zero Exception has occured"); 
        }
        return $a/$b;
    }
    try
    {
        echo division(1,0);
        echo "<br>",division(1,3);
    }
    finally
    {
        echo "this part executes no matter what happens<br>";
    }
 
?>