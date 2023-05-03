<?php
    namespace hello;
    const CON = "this is a namespace constant from a different file tha has been included";
    $i = 2;
    do
    {
        echo "$i*2 = ",$i*2,"<br>";
        $i = $i*2;
    }
    while($i<=100)
?>