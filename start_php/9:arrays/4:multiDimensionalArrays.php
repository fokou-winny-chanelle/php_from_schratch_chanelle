<?php
    // multi dimention indexe arrays
    $i_arr = [[1,2,3,4,5,6],[7,8,9],[10,11,12]];
    var_dump($i_arr);
    echo "<br><br>";

    foreach($i_arr as $i => $item)
    {
        echo "the key is = $i<br>";
        foreach($item as $val)
        {
            echo $val."<br>";

        }
    }


    // multi dimention associative arrays
    $a_arr = [
        "first"=>
        [
            "mon" => "monday",
            "tue" => "tuesday",
            "wed" => "wednesday"
        ],
        "sec" =>
        [
            "thur" => "thursday",
            "fri" => "friday",
        ],
        "third" =>
        [
            "sat" => "satuday",
            "sun" => "sunday",
        ]
    ];
    var_dump($a_arr);
    echo "<br><br>";

    foreach($a_arr as $i => $item)
    {
        echo "the key is = $i<br>";
        foreach($item as $val)
        {
            echo $val."<br>";

        }
    }


?>