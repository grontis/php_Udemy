<?php
    include "db_con.php";
    include "functions.php";


    $query = "SELECT * FROM users"; //select all from users

    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die("Query failed");
    }


?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php

//while ($row = mysqli_fetch_row($result)) //fetches a row as an array
//{
//    print_r($row);
//}

while ($row = mysqli_fetch_assoc($result)) //fetches a row as an assoc array
{
    ?>

    <pre>
        <?php
        print_r($row);
        ?>
    </pre>

<?php

}
?>




</body>
</html>