<?php 
    function func1($a,$b):int{
        $sum = $a + $b;
        return $sum;
    }
    echo func1(10,12),"<br><br>";


    function func2($l):array{
        $arr = [];
        for ($i = 1 ; $i <=$l ; $i++)
        {
            $arr[] =  $i;
        }
        return  $arr;
    }
    print_r(func2(5));
?>