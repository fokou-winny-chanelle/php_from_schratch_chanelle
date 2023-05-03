<?php
    // define a constant
    echo "<h1 style='color:blue'> constant</h1>";
    define ("NAME","Chanelle");
    echo NAME,"<br><br>";

    // trying to overwrite a constant (ERROR)
    echo "<h2 style='color:red'>trying to overwrite constant</h2>";
    define ("NAME","winny");
    echo NAME,"<br><br>";

    // same name with variable and constant
    echo "<h3 style='color:green'> same name btw const and var</h3>";
    $NAME = "Winny";
    echo $NAME,"<br>";
    echo NAME,"<br><br>";


?>