<?php
    $array = [1,2,"3hbk",4,5,6];
    // print array just index and value
    print_r($array) ;

    // function to dump all the vallues of the data with thier data types
    var_dump($array );

    // do not  use echo, it only give's the data type of the array
    echo $array;

    //  access print array
    echo "<br><br>",$array[1];
    echo "<br>",$array[5];

    //print the number of element in an array
    echo "<br><br>",count($array);

    echo "<br><br>"; // space
    // loop througth array 
    for ($i=0 ; $i < count($array) ; $i++)
    {
        echo "<br>",$array[$i];
    }
?>