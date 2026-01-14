<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
            echo "<h1>Exercise04</h1>";

    $number = rand(1,6);
    $square = sqrt($number);

    echo "The square root of ". $number . " is " . $square;
    ?>
</body>
</html>