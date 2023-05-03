<?php
    function error_handler($e_n,$e_str){
        echo $e_n," : ",$e_str ;
    }
    set_error_handler("error_handler");
    echo (4/0);
?>
