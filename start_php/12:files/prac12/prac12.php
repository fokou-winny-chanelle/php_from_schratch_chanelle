<?php 
    $file_name = "students.csv";
    if(!file_exists( $file_name))
    {
        touch($file_name);
    }
    else
    {
        if(!is_file( $file_name))
        {
            echo "file doesn't exist";
            die("it is a folder");
        }
        file_put_contents($file_name,<<< block
        john,45,male
        peter,12,male
        judy,45,female 
        block 
        );
        print_r(file($file_name));
        $csvArray = array_map('str_getcsv', file($file_name));
        print_r($csvArray);

        echo "<table>";
        echo "<tr> <th>NAME</th> <th>AGE</th> <th>SEX</th> </tr>";
        foreach($csvArray as $i => $item)
        {
            echo "<tr>";
            foreach($item as $val => $val1)
            {
                echo "<td style = 'border: 3px solid blue';><br> &nbsp &nbsp &nbsp",$val1,"&nbsp &nbsp &nbsp <br></td>";

            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>