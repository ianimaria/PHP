<? php 

$host_name = "eu-cdbr-west-03.cleardb.net";
$user_name = "b7d90ae59c07c3";
$password = "ca987d22";
$database = "iroom";

$conn = mysqli_connect($host_name, $user_name, $password, $database);
if (!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
?>