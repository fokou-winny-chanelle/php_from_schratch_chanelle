<?php
    $i = 10;
    echo <<< BLOCK
    THIS IS A BLOCK OF STING USING "HEREDOC".<br>APART FROM CALLLINT VARIABLE LIKE 
    "$i" NOTHING WORK INSIDE HERE.<br><p style = "color:red";>
    It's only variables and html tag that can work here.</p>
BLOCK;
?>