<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    echo "<h1>Exercise02</h1>";

    $number = 5;
    switch ($number) {
        case 1:
            echo "Today is Monday";
            break;
        case 2:
            echo "Today is Tuesday";
            break;
        case 3:
            echo "Today is Wendsday";
            break;
        case 4:
            echo "Today is Thursday";
            break;
        case 5:
            echo "Today is Friday";
            break;
        case 6:
            echo "Today is Saturday";
            break;
        case 7:
            echo "Today is Sunday";
            break;
        default:
            echo "The value does not corresponding with any day";
    }
    ?>
</body>
</html>
