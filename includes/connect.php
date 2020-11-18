<?php 

$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "iroom";

$conn = mysqli_connect($host_name, $user_name, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else
   {echo "Merge!!!!!!";}

?>