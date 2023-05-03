<?php
    echo "hello<br>";
    @$var = 1/0; //this is an error
    echo "hello";
    echo $php_errormsg;
?>