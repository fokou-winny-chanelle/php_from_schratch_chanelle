<?php 
    // define indexe array
    $i_arr = [11,2,6,4,1.5,1,9,10];
    print_r($i_arr);

    // define associative array
    $a_arr = ["a" => "winny", "b" => "chanelle", "c" => "fokou"];
    print_r($a_arr);

    // use employees detail as array and display with for each
    $employee = [
        "emile"=>
        [
            "age" => 25,
            "adress" => "Buea",
            "tel" => "697425731"
        ],
        "sierra"=>
        [
            "age" => 23,
            "adress" => "Bafoussam",
            "tel" => "654741236"
        ],
        "jimka"=>
        [
            "age" => 26,
            "adress" => "Bamenda",
            "tel" => "697214723"
        ]
        ];

        // display using foreach
    foreach($employee as $i => $item)
    {
        echo " <br>$i personal info:<br>";
        foreach($item as $val)
        {
            echo $val."<br>";

        }
    }

?>