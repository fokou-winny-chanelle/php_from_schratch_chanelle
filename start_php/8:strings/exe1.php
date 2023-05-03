<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
<?php
$word = " string : welcome back chanelle <br> this is a new age for you <br> thats great  <br> ";
echo "$word <br> the word\"BAck\" is found at position ----> ",stripos($word,"BACK");
?>

<h2>Calculate the Length of the String</h2>
<?php
echo "the length of above string = ",strlen($word);
?>

<h2>Remove White Spaces from left and rigth in the String</h2>
<?php
echo "the length of above string when trimed is = ",strlen(trim($word));
?>

<h2>Reverse the String</h2>
<?php
echo "reverse of above string :<br> ",strrev($word);
?>

</body>
</html>
