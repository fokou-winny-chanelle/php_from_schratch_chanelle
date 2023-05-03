<?php 
function exception_handleler($e)
{
    echo "cought exception : ",$e -> getMessage();
}
set_exception_handler("exception_handleler");

function check_if_int($b)
{
    if(!is_int($b))
    {
        throw new Exception("Divide By Zero Exception has occured"); 
    }
    for($i = 0; $i <$b ; $i++)
    {
        echo "$i<br>";
    }
}
echo check_if_int("10");
?>