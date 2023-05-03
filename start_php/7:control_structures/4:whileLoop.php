<?php
// print even numbers from 1 to 10
$i = 1;
while($i<=10)
{
    $status = $i%2;
    if ($status == 0)
    {
        echo $i,"<br>";
    }
    $i++;
}
?>