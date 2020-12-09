<?php
    include 'connect.php';
    session_start();
	if(isset($_POST["submit"]))
	{
      
      
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
	$phone=$_POST['phone'];
      

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
        echo("$email is not a valid email address");
      }
      
    else if (!preg_match("/^[0-9]*$/", $phone)) {
        echo("$phone is not a valid phone number");
    }

    else
        {
        $check = "SELECT email from guest WHERE email='$email'";
        $temp = $mysqli->query($check);
        if($temp->num_rows == 0)
        {
            if($mysqli->error == 0)
            {
                $checkpass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO guest VALUES (default,'$email', '$checkpass', '$fname','$lname','$phone')";
                $result = $mysqli->query($sql);
                if($result)
                {
                    echo '<script language="javascript">';
                    echo 'alert("You are successfully registered!")';		
                    echo '</script>';
                    header("Location:https://irooom.herokuapp.com/book.php");
                    
                }
                else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Error!")';
                    echo '</script>';
                }
            }
        }
        
        else
        {
                    echo '<script language="javascript">';
                    echo 'alert("Email already in use, Sign up or Register with different Email")';
                    echo '</script>';
        }
    }
}

?>