<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<body>
<?php
echo"COMPARISON OPERATORS";
echo"<br>";
$x=100;
$y=100;
var_dump($x==$y);
echo "<br>";
$x=150;
$y=52;
var_dump($x==$y);
echo "<br>";
var_dump($x<>$y);
echo "<br>";
//Arithmetic Operators
echo"ARITHMETIC OPERATORS";
echo"<br>";
$a=50;
$b=15;
echo $a+$b; //addition
echo"<br>";
echo $a-$b; //subtraction
echo"<br>";
echo $a*$b; //multiplication
echo"<br>";
echo $a/$b; //division
echo"<br>";
echo $a%$b; //modulus
echo "<br>";

//Assignment Operators
echo "ASSIGNMENT OPERATORS";
echo"<br>";
$c=10;
$c +=15;
echo $c;
echo "<br>";
$d=10;
$d -=15;
echo $d;
echo "<br>";
$c=20;
$c *=25;
echo $c;
echo"<br>";
$d=5;
$d /=10;
echo $d;
?>
</body>
</html>