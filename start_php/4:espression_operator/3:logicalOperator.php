<?php
    /*
     *  AND - both should be true
     *  OR - any one can be true
     *  && - both should be true
     *  || - any one can be true
     *  ! - if not
     *
     */

    //Greet Hello, Name if the user is logged in and has permission
    $logIn = true;
    $permission = true;
    echo $logIn && $permission ? "welcome user<br>":"welcome guest<br>";

    //check if student passed any one exam
    $passed_math = true;
    $passed_french = false;
    echo $passed_french || $passed_math ? "you passed atleast one course btw math and french<br>":"faild both math and french<br>";

    // check if student is not passed
    $passed_eng = true;
    echo !$passed_eng? "you failed english<br>":"you passed english<br>"
?>