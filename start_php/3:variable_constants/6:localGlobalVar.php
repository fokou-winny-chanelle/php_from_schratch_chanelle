<?php
    //locale and global var
    $name = "winny";

    function func1()
    {
        $name = "chanelle<br>";
        echo $name;
    }

    func1();
    echo $name;

    // error accessing global var inside function
    global $age;
    $age = 12;
    
    function func2()
    {
        echo $age;
    }
    func2();

    // right way to access global variable in function
    global $age;
    $age = 12;
    
    function func3()
    {
        global $age;
        echo "age =",$age;
    }
    func3();
    


?>