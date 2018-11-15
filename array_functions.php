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

$list = [5,4,3,1,6,9,10,11,8];

echo max($list); //max value in array
echo "<br>";

echo min($list); //min array
echo "<br>";

print_r($list);
echo "<br>";

sort($list);

print_r($list);
echo "<br>";



?>


</body>
</html>