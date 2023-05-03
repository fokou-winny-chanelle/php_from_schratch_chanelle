<?php 
    // declare string and integer vaariable && global var
    global $string;
    global $number;
    $string = "hello all";
    $number = 20;

    // print variables from function
    function func()
    {
        global $string;
        global $number;
        
        print "$string<br>$number<br>";
    }
    func();

    // static var
    function static_var()
    {
        static $i = 1;
        echo $i,"<br>";
        $i = $i + 1;
    }
    static_var();
    static_var();
    static_var();
    static_var();
    static_var();

    // super global var
    echo $GLOBALS['string'];

    //variable of variable
    $var1 = "this is new for all";
    $var2 = "var1";
    $var3 = "var2";
    echo "<br>",$$$var3;
?>