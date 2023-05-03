<?php
    $employee = [
        "emile"=>
        [
            "working hours" => 8,
            "adress" => "Buea",
            "email" => "emile@gmail.com"
        ],
        "sierra"=>
        [
            "working hours" => 6,
            "adress" => "Bafoussam",
            "email" => "sierra@gmail.com"
        ],
        "jimka"=>
        [
            "working hours" => 10,
            "adress" => "Bamenda",
            "email" => "jimka@gmail.com"
        ]
        ];

        // display using foreach
    foreach($employee as $i => $item)
    {
        echo "<p style='color: brown';><br>$i personal info:</p>";
        foreach($item as $val => $val1)
        {
            echo "$val : $val1"."<br>";

        }
    }
    $marital_status_of_emile = "M";
    echo ($marital_status_of_emile == "M")? "<br><br>Emile is married":"<br><br>Emile is not married";
    echo "<br>emile last salary drawn = ",1000000/3,"FCFA";
?>