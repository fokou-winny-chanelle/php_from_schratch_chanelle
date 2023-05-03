<?php
    // 1) Define and Assign $firstname and $lastname variable with your name.
    // 7) Define and show the Global Variable
    global $f_name,$l_name;
    $f_name = "Fokou";
    $l_name = "Winny";

    // 2) Print the firstname, lastname using echo / print
    // 3) Embed the variable inside the quotes.
    echo "<br>1:$f_name  $l_name<br>" ;
    print "<br>2:$f_name  $l_name<br>";

    // 4) Define a function to print the name.
    function fnc()
    {
        global $f_name,$l_name;
        echo "<br>3:$f_name  $l_name<br>" ;
    }
    fnc();

    // 4) Define a function to print the name.
    echo "<br>5:$f_NAME  $l_naMe<br>"; 

    // 6) Create a local variable outside the function and define same inside the function. Display the variable
    $name = "winny";
    function func1()
    {
        $name = "<br>chanelle<br>";
        echo $name;
    }
    func1();
    echo $name;

    // 8) Define and show the Static Variable
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

    // 9) Show a Super Global Variable
    echo "<h1 style='color:blue'><br> super global variables</h1>";
    global $var;
    $var = "Welcome to chanelle's php";
    echo $GLOBALS['var'],'<br><br>';
    // getting predefine super global variables like the php script name 
    echo $_SERVER['PHP_SELF'];

    // 10) Define and show Variable of Variables
    $var1 = "this is new for all";
    $var2 = "var1";
    $var3 = "var2";
    echo "<br>",$$$var3;

    // 12) Define and Display a Constant.
    echo "<h1 style='color:blue'> constant</h1>";
    define ("NAME","Chanelle");
    echo NAME,"<br><br>";

    //  // 13) Show magic constant
    // current line number of file
    echo __LINE__,"<br>";

    //file path
    echo __FILE__;

    
 ?>