<?php
    $i = 10;
    echo <<< 'BLOCK'
    THIS IS A BLOCK OF STING USING "NOWDOC" .<br>CALLING VARIABLES LIKE  
    "$i" DOES NOT WORK INSIDE HERE.<br><p style = "color:red";>
    It's only html tag that can work here.</p>
BLOCK;
?>