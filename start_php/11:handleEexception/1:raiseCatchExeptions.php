<?php 
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
    catch(Exception $e)
    {
        echo "cought exeption : ",$e->getMessage();
    }
?>