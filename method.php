<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method</title>
</head>
<body>
    <?php

// Method: GET
// variable: $_GET[]
http://localhost/MyPHP/method.php?course=PHP-Fullstack&period=06
    echo $_GET['course'];
    echo "<br>";
    echo $_GET['period'];
    echo "<br>";

    foreach($_GET as $key => $value) {
        echo "$key - $value <br>";
    };

    ?>
</body>
</html>