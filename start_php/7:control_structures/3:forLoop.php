<?php
// print odd numbers from 1 to 10
for($i = 0;$i<=10;$i++)
{
    $status = $i%2;
    if ($status != 0)
    {
        echo $i,"<br>";
    }
}
?>