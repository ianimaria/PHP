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
    $_SESSION['guestname']=ucfirst(strtolower($_POST['first_name']))." ".ucfirst(strtolower($_POST['last_name']));
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass']=$_POST['password'];
    $_SESSION['fname']=$_POST['first_name'];
    $_SESSION['lname']=$_POST['last_name'];
    $_SESSION['phone']=$_POST['phone'];
      

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
        echo("$email is not a valid email address");
      }
      
    else if (!preg_match("/^[0-9]*$/", $phone)) {
        echo("$phone is not a valid phone number");
    }

    else
        {// {echo("$email $pass ");
        $check = "SELECT email from manager WHERE email = '$email'";
        $temp = $mysqli->query($check);
        if ($temp->num_rows != 0)
            {echo '<script language="javascript">';
                echo 'alert("You cannot register as a manager!")';		
                echo '</script>';
                echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";
                die(); }
        else 
        {$check = "SELECT email from guest WHERE email='$email'";
        // echo("$check");
        $temp = $mysqli->query($check);
        // echo(" $temp->num_rows");
        if($temp->num_rows == 0)
        {
            
            $checkpass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO guest VALUES (default,'$email', '$checkpass', '$fname','$lname','$phone')";
            $result = $mysqli->query($sql);
            if($result)
            {
                $sql = "SELECT * FROM guest WHERE email = '$email'";
                $rez = $mysqli->query($sql);
                $getid = $rez->fetch_assoc();
                $_SESSION['guestid']=$getid['guest_id'];
                echo '<script language="javascript">';
                echo 'alert("You are successfully registered!")';		
                echo '</script>';
                // header("Location:https://irooom.herokuapp.com/book.php");
                header("Location: https://irooom.herokuapp.com//book.php");
                
                
            }
            else
            {
                // $_SESSION['error_msg']="Database error: Could not register user";
                echo '<script language="javascript">';
                echo 'alert("Error!")';
                echo '</script>';
            }
        }
    
    
        else
        {
                    echo '<script language="javascript">';
                    echo 'alert("Email already in use, Sign up or Register with different Email")';
                    echo '</script>';
                    header("Location: https://irooom.herokuapp.com/register.php");
        }
    }
}
    }
?>