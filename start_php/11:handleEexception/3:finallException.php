<?php
    function exception_handleler($e)
    {
        echo "cought exception : ",$e -> getMessage();
    }
    set_exception_handler("exception_handleler");

    try
    {
        throw new Exception("Divide By Zero Exception has occured");
    }
    finally
    {
        echo "this part executes no matter what happens<br>";
    }
 
?>