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

    if(isset($_POST["submit"]))
    {
        
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $phone=$_POST["phone"];
        
        $sql = "INSERT INTO guest(EMAIL, PASSWORD, FIRST_NAME, LAST_NAME, PHONE) VALUES ('$email', '$pass', '$first_name', '$last_name', '$phone');";

        if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">';
            echo 'alert("You are successfully registered!")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("An error occured")';
            echo '</script>';
        }

        mysqli_close($conn);}
        ?>
      