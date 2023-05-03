<?php 
    $file_name = "file_created_fr_exe1.txt";
    if (!file_exists($file_name))
    {
        touch($file_name);
    }
    else
    {
        if(!is_file($file_name))
        {
            echo "file doesn't exist";
            die("it is a folder");
        }
        $new_file_content = <<< BLOCK
        THIS IS A BLOCK OF STING USING "HEREDOC".<br>APART FROM CALLLINT VARIABLE
         NOTHING WORK INSIDE HERE.<br><p style = "color:red";>
        It's only variables and html tag that can work here.</p>
        BLOCK;
        file_put_contents($file_name," $new_file_content");
        echo file_get_contents($file_name);

        $myfile = fopen($file_name, "a") or die("Unable to open file!");
        $txt = "this is a new line appended\n";
        fwrite ($myfile, $txt);
        fclose($myfile);
    }
?>