<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

//a foreach loop will only work on arrays.

$numberArray = [0, 1, 3, 5, 60, 44, 3, 10 , 01, 1002, 53];

foreach ($numberArray as $number)
{
    echo $number . "<br>";
}


?>


</body>
</html>