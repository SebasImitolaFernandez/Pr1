<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
   <?php
echo "<h1>Exercise01</h1>";
$number1 = 4;
$number2 = 5;

echo "the numbers are " . $number1 . " and " . $number2 . "<br>";
$sum = $number1 + $number2;

echo "the sum of ". $number1 . "+" . $number2 . " = " . $sum ."<br>";
$substracion = $number1 - $number2;

echo "the division of". $number1 . "-". $number2 ." = ". $substracion . "<br>";
$division = $number1 / $number2;

echo "the division of " . $number1 . " / " . $number2 . " = " . $division ."<br>";
$mayor = max($number1, $number2);
echo "the number " . $mayor . " is the greatest number" . "<br>";

$area = ($number1 * $number2) / 2;
echo "the triangle area is " . $area ."<br>";
if ($number1 > 1 && $number2 > 1) {
    echo $number1 . " and " . $number2 . " are greater than 1 ";
}
?> 
</body>
</html>
