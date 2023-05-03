<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php
$length = 10;
$width = 6;
echo "length = $length <br>width = $width <br>Area = $length * $width = ",$length * $width,"<br><br>";
?>

<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php
$english = 12;
$french = 14;
$computer = 15;
$marks = 20;
echo "english = $english &nbsp french = $french &nbsp computer = $computer <br> Total marks= ",$english + $french + $computer,"<br>";
echo "marks achieived = $marks <br>";
echo "percentage of over all scored marks = ($marks / ($english + $french + $computer)) * 100 = ", ($marks / ($english + $french + $computer)) *100,"%<br>";
?>

<h2>Check if the user has admin roles:</h2>
<?php
$hasRole = null;
$adminRole = "admin";
$userRole = "admin";
$hasRole = ($adminRole == $userRole);
echo $hasRole? "user has admin previledges":"user doesn't have admin privilages";
?>

<h2>Define and Display a User Name using Strings:</h2>
<?php
$name = "carol";
echo $name;
?>

<h2>Check if the variable is null or not:</h2>
<?php
$num = 6;
echo "number = $num<br>";
echo is_null($num)?"variable is null value":"variable is not null value";
?>

</body>
</html>
