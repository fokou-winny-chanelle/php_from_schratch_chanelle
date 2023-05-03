<?php
    // 1) Show Examples using Arithmetical Operator
    echo "<h1 style = 'color:gold; text-align:center'>ARITHMETIC OPERATOR</h1>";
    echo"<p style = 'color:red';>addition<P>";
    // 5) Show Examples using Assignment Operator
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


    // 2) Show Examples using Conditional Operator
    echo "<h1 style = 'color:gold; text-align:center'>CONDITIONAL OPERATOR</h1>";
    $flag = (true)? "correct":"wrong";
    echo $flag,"<br>";
    $flag = (false)? "correct":"wrong";
    echo $flag,"<br>";

    // 3) Show Examples using Comparison Operator
    echo "<h1 style = 'color:gold; text-align:center'>COMPARISM OPERATOR</h1>";
    echo "<h2>Show a number is even or odd using Comparison Operators:</h2>";
    $num = 10;
    $status = ($num%2 == 0)?"$num is even<br>":"$num is odd<br>";
    echo $status;

    echo "<h1 style = 'color:gold; text-align:center'>LOGICAL OPERATOR</h1>";
    // 4) Show Examples using Logical Operator
     //Greet Hello, Name if the user is logged in and has permission
     $logIn = true;
     $permission = true;
     echo $logIn && $permission ? "welcome user<br>":"welcome guest<br>";
 
     //check if student passed any one exam
     $passed_math = true;
     $passed_french = false;
     echo $passed_french || $passed_math ? "you passed atleast one course btw math and french<br>":"faild both math and french<br>";
 
     // check if student is not passed
     $passed_eng = true;
     echo !$passed_eng? "you failed english<br>":"you passed english<br>";


    //  8) Show Examples using Execution Operator
    echo "<h1 style = 'color:gold; text-align:center'>EXECUTION OPERATOR</h1>";
     echo `ls`;
     echo `pwd`;
?>