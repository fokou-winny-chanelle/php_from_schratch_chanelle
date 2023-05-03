<?php
    function func1()
    {
        $num = 1;
        echo $num,"<br>";
        $num = $num + 1;
    }
    func1();
    func1();
    func1();
    func1();

    // static variables
    echo "<h1 style='color:blue'><br> Static variable</h1>";
    function func2()
    {
        static $num=1;
        echo $num,"<br>";
        $num = $num + 1;
    }
    func2();
    func2();
    func2();
    func2();

?>