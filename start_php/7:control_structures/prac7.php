<?php 
    // 1) Write Infinite loop with for loop and print even and odd numbers till 20 numbers.
    // for(;true;)
    // {
    //     echo 1;

    // }

    // print even numbers from 1 to 20
    $i = 1;
    while($i<=20)
    {
        $status = $i%2;
        if ($status == 0)
        {
            echo $i,"<br>";
        }
        $i++;
    }
    echo "<br><br>";
    // print odd numbers from 1 to 20
    for($i = 0;$i<=20;$i++)
    {
        $status = $i%2;
        if ($status != 0)
        {
            echo $i,"<br>";
        }
    }
?>