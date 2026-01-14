<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Exercise03.4</h1>";

    $number1 = 12;
    $number2 = 6;
    do {
        echo $number1 . ",";
        $number1 ++;
     } while ($number1 <= $number2);
    ?>
</body>
</html>