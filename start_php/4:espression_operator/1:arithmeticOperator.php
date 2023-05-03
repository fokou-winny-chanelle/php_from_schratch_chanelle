<?php
    echo"<br><p style = 'color:red';>addition<P>";
    $english = 12;
    $french = 14;
    $computer = 15;
    echo "english = $english &nbsp french = $french &nbsp computer = $computer <br> Total marks= ",$english + $french + $computer,"<br>";

    echo"<br><p style = 'color:blue';>subtraction<P>";
    $marks = 20;
    echo "marks achieived = $marks <br> total marks - marks achieved  = ",$english + $french + $computer - $marks,"<br>";
    
    echo"<br><p style = 'color:orange';>multiplication<P>";
    $length = 10;
    $width = 6;
    echo "length = $length <br>width = $width <br>Area = $length * $width<br><br>";

    echo"<br><p style = 'color:green';>division<P>";
    echo "percentage of over all scored marks = ", ($marks / ($english + $french + $computer)) *100,"%<br>";

    echo"<br><p style = 'color:violet';>modulus<P>";
    echo "20 % 6 = ",20 % 6;

    echo"<br><p style = 'color:brown';>exponent<P>";
    echo "2 ^ 4 = ",2 ** 4;
?>