<?php

    declare(strict_types=1);

    function printOddNumbers(int $limit, $skipNumber){
        for ($index = 0; $index <= $limit; $index++){
            if( $skipNumber == $index ){
                echo "skept this number<br>";
                continue;
            }
            if( $index%2 != 0){
                echo "Odd Number: $index<br>" ;
            }
        }
    }

    printOddNumbers(20, "3");

    //This will raise an Error
    //printOddNumbers("20");
