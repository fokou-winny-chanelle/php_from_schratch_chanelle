<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1: Table Calculator </h1>
    <table style = 'border: 3px solid black';>
    <?php
            for($i=1;$i<=10;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=10;$j++)
                {
                    echo "<td style = 'border: 1px solid blue';><br>&nbsp$i*$j = ",$i*$j,"&nbsp<br></td> ";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>