<?php
include "db_con.php";
?>

<?php

function createRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_real_escape_string($connection, $username); //clean username input
    mysqli_real_escape_string($connection, $password);//clean pw input

    $hashFormat = "$2y$10$";
    $salt = "akeijuSiol821034182492";
    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die("Query failed");
    }

}


function showAllData()
{
    global $connection; //need to set up variable as global, because of scope
    $query = "SELECT * FROM users"; //select all from users
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query failed");
    }

    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username' , "; //need a comma in between password and username
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id "; // no quotes around $id because it is integer


    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query failed." . mysqli_error($connection));
    }
}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id "; // no quotes around $id because it is integer


    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query failed." . mysqli_error($connection));
    }
}





