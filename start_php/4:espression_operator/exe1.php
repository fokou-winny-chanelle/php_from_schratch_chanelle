<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
    <?php
    //1:add two number using arithmetical operator
    $var1 = 5;
    $var2 = 7;
    $sum = $var1 + $var2;
    echo  "sum of $var1 + $var2 = $sum";
    ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php
    $student = "passed";
    $status = ($student == "passed")?"the student passed<br>":"the student failed<br>";
    echo $status;
    ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
    <?php
    $num = 10;
    $status = ($num%2 == 0)?"$num is even<br>":"$num is odd<br>";
    echo $status;
    ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
    <?php
    $logIn = true;
    $permission = true;
    echo $logIn && $permission ? "user has acess<br>":"user doesn't have acess<br>";
    ?>
    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
    <?php
        $val = 1;
        echo "$val + 10 = ",$val += 10
    ?>
</body>
</html>