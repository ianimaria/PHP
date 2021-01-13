<?php
  session_start();
  include 'connect.php';
	if(isset($_POST["submit"]))
	{
     
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $sql = "SELECT * FROM guest WHERE email='$email' AND password='$password'";
      $result = $mysqli->query($sql);
      	if ($result->num_rows == 1) 
      	{
      		$guest = $result->fetch_assoc();
      		$_SESSION["guestname"]= ucfirst(strtolower($guest["first_name"]))." ".ucfirst(strtolower($guest["last_name"]));
         	$_SESSION["email"] = $email;
          $_SESSION["guestid"] = $guest["guest_id"];

          // header("Location:https://irooom.herokuapp.com/book.php");
          header("Location:https://irooom.herokuapp.com//book.php");             
         
      	}
    	
        else 
        {
          $sql = "SELECT * FROM manager WHERE email='$email' AND password='$password'";
          $temp = $mysqli->query($sql);

          if ($temp->num_rows == 1) 
      	{
      	
      		$man = $temp->fetch_assoc();
      		$_SESSION['managername']=ucfirst(strtolower($man['first_name']))." ".ucfirst(strtolower($man['last_name']));
         	$_SESSION['user'] = $email;
         	$_SESSION['manager_id'] = $man['manager_id'];
     	
          // header("Location:https://irooom.herokuapp.com/manager.php");    
          header("Location:https://irooom.herokuapp.com/manager.php");         
          
        }
        
          else 
          {
            echo '<script language="javascript">';
            echo 'alert("Email or Password entered is invalid. Please try again.")';
            echo '</script>';
     
        }	

        }

   }
?>

