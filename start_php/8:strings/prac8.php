<?php
    $i = "<br>welcome miss fokou";
    echo $i,"<br>";
    echo "string length : ",strlen($i);

    echo "<br><br>fokou is found at possition : ",strpos($i,"fokou"),"<br><br>";

    echo <<< BLOCK
    page descripion<br>
    1) Find a Length of a String<br>
    2) Find a Field inside the String<br>
    3) Write a Documentation about your program using heredoc<br>
    4) Show some examples of String Functions.<br>
    BLOCK;


    //UPPER and lower case
    echo "<br>example of string function:  convert from lower case to upper",strtoupper($i),"<br><br>" ;
?>