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

$statement = "Hello World!";

//function with parameter
function say_Something($statement)
{
    echo $statement . "<br>";
}

say_Something("hello");

//a function that returns a value
function getSum($num1, $num2)
{
    return $num1 + $num2;
}

$mySum = getSum(2, 3);
echo $mySum . "<br>";

?>


</body>
</html>