<?php   
$host_name = "eu-cdbr-west-03.cleardb.net";
$user_name = "b7d90ae59c07c3";
$password = "ca987d22";
$database = "heroku_417556086059fa1";

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
        
        $sql = "INSERT INTO guest(email, password, first_name, last_name, phone) VALUES ('$email', '$pass', '$first_name', '$last_name', '$phone');";

        if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">';
            echo 'alert("You are successfully registered!")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
        echo 'alert("An error occurred")';
        echo '</script>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);}
        ?>
        <!-- mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        echo '<script language="javascript">';
        echo 'alert("You are successfully registered!")';
        echo '</script>';
        exit(); -->
