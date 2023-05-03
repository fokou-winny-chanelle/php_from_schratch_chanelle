<?php

    $planets = [
        "planets" =>
            [
                "sun" => [ "temp" => "hot", "color" => "red" ],
                "moon" => [ "temp" => "cold", "color"  => "white" ],
                "earth" => [ "temp" => "normal", "color" => "blue" ]
            ]
    ];

    foreach($planets as $key => $planetname)
    {
        echo $key,":<br>";
        foreach($planetname as $key2 => $attributes)
        {
            echo "&nbsp &nbsp name: $key2 <br>";
            foreach($attributes as $key3 => $attributesvalue)
            {
                echo "&nbsp &nbsp &nbsp &nbsp $key3 : $attributesvalue<br>";
            }
        }
    }
?>