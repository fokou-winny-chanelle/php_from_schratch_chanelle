<?php
    // index arrays
    $i_arr = ["mango","orange","apple","pineaple","lime","banana"];
    var_dump($i_arr);
    echo "<br><br>";


    // assciative arrays
    $a_arr = [0 =>"mango","two" => "orange",2 => "apple",3 => "pineaple",4 => "lime",5 => "banana"];
    var_dump($a_arr);
    echo "<br><br>";

    // prin he keys or index name of an associative array
    print_r (array_keys($a_arr));
    echo "<br><br>";
?>