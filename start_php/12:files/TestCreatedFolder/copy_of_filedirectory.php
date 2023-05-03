<?php
    // print all the contain in a dir
    print_r(scandir("/var/www/html/study_php/11:handleEexception"));

    // print all the contain of a dir except ".",".."
    print_r(array_diff(scandir("/var/www/html/study_php/11:handleEexception"),[".",".."]));

    // check for a specific file in a dir
    // check if is_dir or is_file
    $variable = scandir("/var/www/html/study_php/11:handleEexception");
    foreach ($variable as  $value) {
        if(is_file("/var/www/html/study_php/11:handleEexception/$value"))
        {
            echo $value,"<br>\n";
        }
    }
    foreach ($variable as  $value) {
        if(is_dir("/var/www/html/study_php/11:handleEexception/$value"))
        {
            echo $value,"<br>\n";
        }
    }


    // create a folder file
    // glob method will return an array of all a posible file path in a folder
    print_r(glob("/var/www/html/study_php/11:handleEexception/*.php"));
    // befor creating a folder we need to check if it exist or not
    if (!file_exists("TestCreatedFolder")  && !file_exists("TestCreatedFile.txt") )
    {
        mkdir("TestCreatedFolder");
        touch("TestCreatedFile.txt");
    }

    // copy file
    copy("fileDirectory.php","TestCreatedFolder/copy_of_filedirectory.php")

?>