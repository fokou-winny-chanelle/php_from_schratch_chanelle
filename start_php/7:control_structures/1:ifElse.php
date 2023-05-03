<?php
    //1: syntax for if else in php only
    $status = false;
    if($status)
    {
        echo "this is the IF block statement only valied for true<br>";
    }
    else
    {
        echo "this is the ELSE block statement only valid for false<br>";
    }

    
    // check if student passed or failed
?>

<!-- 2//syntax for if else in html mixed with php -->
<!doctype html>
<html>
<head>
    <title>
        if else Statements
    </title>
</head>
<body>

<?php
$some_boolean_condition = true;
if ($some_boolean_condition) { ?>

    <h1>This is a True Condition Block.</h1>

<?php } else { ?>

    <h1>This is a False Condition Block</h1>

<?php } ?>

</body>
</html>


<!-- //3) if condition statement without braces.  -->
<?php
    $some_boolean_condition = FALSE;
    if( $some_boolean_condition )
        echo 'This is true';
    else
        echo 'This is false' ;
?>