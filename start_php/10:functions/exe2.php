<?php 
    declare(strict_types = 1);

    // ffunction that accapts two parameter and perform add,sub,mul and divide
    function func1($a,$b){
        $sum = $a + $b;
        echo"$a + $b : $sum<br><br>";
        $sub = $a - $b;
        echo"$a - $b : $sub<br><br>";
        $mul = $a * $b;
        echo"$a * $b : $mul<br><br>";
        $div = $a / $b;
        echo"$a / $b : $div<br><br>";
    }
    func1(10,12);

    // accept optional parameter to perform specific function
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

    // print output from function
    // declare strict_type = 1
    function func2(int $l)
    {
        for ($i = 0 ; $i <$l ; $i++)
        {
            echo $i;
        }
        return 0;
    }
    func2(10);
    func2("10");
?>