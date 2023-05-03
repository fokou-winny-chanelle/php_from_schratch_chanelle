<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    <?php
    $num = 10;
    echo "$num - 1 = ",$num -= 1;
    ?>

    <h2>Show the negative of 5 using Bitwise Operator:</h2>
    <?php
    echo "the negative of 5 is = ",~5;

    ?>

    <h2>Execute a dos or linux command using Execution Operator:</h2>
    <?php
    echo `ls`
    ?>

    <h2>Show an example of Operator Precedence Operator:</h2>
    <?php
    echo  "true && false = ",true && false? "truth":"false";
    echo"<br>";
    echo  "true and false = ",true and false? "truth":"false";
    ?>

</body>
</html>
