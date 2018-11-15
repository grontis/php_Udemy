<?php

$DBusername = 'admin';
$DBpassword = 'grant5';

$names = ["Grant", "Tom", "Laura", "Matt", "Ryan", "Kelly"];


if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $DBusername && $password == $DBpassword)
    {
        echo "Access Granted";
    }
    else
    {
        echo "Access Denied";
    }


}



