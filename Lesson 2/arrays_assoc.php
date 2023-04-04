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

$numbers = [24,44,25];

echo $numbers[2] . "<br/>";



$assosiative_array = array("first_name" => "Rene", "last_name" => "Smith");


echo $assosiative_array["first_name"] . " " . $assosiative_array["last_name"];

print_r($assosiative_array);

// Test

$number1 = 10;
$number2 = 20;


$sum = $number1 + $number2;

echo $sum;

$regular_array = [23,43,"Cat"];
$assoc_array = ["number1" => 23, "number2" => 43, "animal" => "Cat"];



?>
</body>
</html>