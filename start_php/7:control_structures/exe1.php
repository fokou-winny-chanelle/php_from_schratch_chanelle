<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // print odd numbers from 1 to 10 using for loop
    for($i = 0;$i<=10;$i++)
    {
        $status = $i%2;
        if ($status != 0)
        {
            echo $i,"<br>";
        }
    }
    echo "<br>";
    // print even numbers from 1 to 10 using while loop
    $i = 1;
    while($i<=10)
    {
        $status = $i%2;
        if ($status == 0)
        {
            echo $i,"<br>";
        }
        $i++;
    }

    echo "<br>";
    // Maxnumber less than 100 time 2 with while loop included from a different file 
    include "exe1NameSpacefile.php";
    echo hello\CON;

    echo "<br><br>";

    // Maxnumber less than 100 time 2 with for loop
    for($i = 2;$i<=100;)
    {
        echo "$i*2 = ",$i*2,"<br>";
        $i = $i*2;
    }
    ?>
    <table style = "text-align:center";>
        <tr>
            <th>Even Numbers&nbsp</th>
            <th>&nbsp Odd Numbers</th>
        </tr>
        <?php
            for($i=0;$i<=10;$i++)
            {
                if ($i%2 == 0)
                {
                    echo "<tr><td>$i</td><td>",$i+1,"</td></tr> ";
                }
            }
        ?>
    </table>

</body>
</html>