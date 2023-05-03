<?php
    declare(strict_types=1);
    function OddNumbers(int $limit, $skipNumber = -1){
        for ($index = 0; $index <= $limit; $index++){
            if( $skipNumber == $index ){
                echo "VALEU SKEPT<br>";
                continue;
            }
            if( $index%2 != 0){
                echo "Odd Number: $index<br>";
            }
        }
    }
    OddNumbers(20);
    echo "<br><br>";
    OddNumbers(20,5);
    //Optional parameters should and must be last.
    