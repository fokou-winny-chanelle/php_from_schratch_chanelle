<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html and php</title>
</head>
<body>
    <h1>Embed php in html</h1>
    <?php
        echo "hello chan<br>";

        print "sample 1: this text is printed from php <hr>";
    ?>
    <p>
        <?= "sample2: this text is printed from php";?>
    </p>
    <p style ="color:red">sample 3: this is a red text</p>
    <?=  "<p>"?>
    sample4: hml tags in php 
    <?=  "</p>"?>

</body>
</html>