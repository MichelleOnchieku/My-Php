<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
<?php
echo ("My first time drinking soda");
echo "<br>";
echo strlen('My fist time drinking soda');
echo "<br>";
echo str_replace('coffee','soda','This is my first time drinking soda');
echo "<br>";
echo strrev('This is my first time drinking soda');
echo "<br>";
echo str_shuffle('This is my first time drinking soda');
echo "<br>";
echo str_repeat('This is my first time drinking soda <br>', 2);

?>
</body>
</html>
