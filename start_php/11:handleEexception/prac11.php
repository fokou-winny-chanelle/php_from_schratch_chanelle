<?php 
    function exception_handleler($e)
    {
        echo "<br>cought exception : ",$e -> getMessage();
    }
    set_exception_handler("exception_handleler");

    $a_arr = [0 =>"mango",1 => "orange",2 => "apple",3 => "pineaple",4 => "lime",5 => "banana"];
    var_dump($a_arr);


    // 1) Print all the elements from an Associative Array. Use Key as Integer.
    foreach($a_arr as $key => $val)
    {
        if(!is_int($key))
        {
            throw new Exception("<br><br><br>your key vallues must be integers<br>");
        }
        echo "<br>",$key, " : " ,$val,"<br>";
    }

    // 2) Prepare the Array.
    // 3) Raise an Exception if the Indexed Array is not in sequence.
    $array = [4,5,7,2,0,1,3];

    $keys = array_keys($array);

    if ($keys !== array_keys($keys)) 
    {   // associative array
        throw new Exception("array is not in sequence<br>");
    } 
    else 
    {   // sequential array
        echo '<br><br>array is in sequence<br><br>';
        print_r($array);
    }

?>