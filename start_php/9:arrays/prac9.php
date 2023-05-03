<?php 
    $students = [
        1 =>
        [
            "name" => "Ngong emile",
            "age" => 25,
            "adress" => "Buea",
            "class" => "LLS1",
        ],
        2 =>
        [
            "name" => "Che sierra",
            "age" => 23,
            "adress" => "Bafoussam",
            "class" => "LLS2",
        ],
        3 =>
        [
            "name" => "Tsafack jimka",
            "age" => 26,
            "adress" => "Bamenda",
            "class" => "LLA",
        ]
        ];

        // display using foreach
    foreach($students as $i => $item)
    {
        echo " <br>$i: students personal info:<br>";
        foreach($item as $val => $val1)
        {
            echo $val ." :     ". $val1."<br>";

        }
    }

    // use table to display student details
    echo "<table>";
    echo "<tr> <th>NAME</th> <th>AGE</th> <th>ADRESS</th> <th>CLASS</th></tr>";
    foreach($students as $i => $item)
    {
        echo "<tr>";
        foreach($item as $val => $val1)
        {
            echo "<td style = 'border: 3px solid blue';><br> &nbsp &nbsp &nbsp",$val1,"&nbsp &nbsp &nbsp <br></td>";

        }
        echo "</tr>";
    }
    echo "</table>";
    
?>

</body>
</html>