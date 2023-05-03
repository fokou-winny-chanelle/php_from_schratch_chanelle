<?php 
    // sort() and rsort()
    // sorting indexe arrays
    $i_arr = [11,2,6,4,1.5,1,9,10];
    print_r($i_arr);
    sort($i_arr);
    print_r($i_arr);
    rsort($i_arr);
    print_r($i_arr);

    // asort() and arsort()
    // sorting associative array's item values
    $a_arr = ["a" => "winny", "b" => "chanelle", "c" => "fokou"];
    print_r($a_arr);
    asort($a_arr);
    print_r($a_arr);
    arsort($a_arr);
    print_r($a_arr);

    // ksort() and krsort()
    // sorting associative array's keys values
    $a_arr = ["a" => "winny", "b" => "chanelle", "c" => "fokou"];
    print_r($a_arr);
    ksort($a_arr);
    print_r($a_arr);
    krsort($a_arr);
    print_r($a_arr);
?>