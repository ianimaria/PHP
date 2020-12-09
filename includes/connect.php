<?php

$user_name = "b7d90ae59c07c3";
$password = "ca987d22";
$database = "heroku_417556086059fa1";
$host_name = "eu-cdbr-west-03.cleardb.net"; 

$mysqli = new mysqli($host_name, $user_name, $password, $database);
if ($mysqli->connect_error) 
{
    die("Connection failed: " . $mysqli->connect_error);
} 

?>

