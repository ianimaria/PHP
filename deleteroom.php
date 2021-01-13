<?php
	include 'connect.php';
  session_start();
  // echo $_SESSION['managerid'];
	if($_SESSION['manager_id']==0)
{
  echo '<script language="javascript">';
  echo 'alert("You have to be logged in to access this page!")';		
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";
  die();}
?>

<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../w3.css">
<body>

<div class="w3-top">
<ul class="w3-navbar w3-black w3-text-white" id="myNavbar">
    <li><a href="https://irooom.herokuapp.com/index.php" class="w3-padding-large">HOME</a></li>
    <li><a href="https://irooom.herokuapp.com/about.php" class="w3-padding-large">ABOUT</a></li>
    <li class="w3-hide-small w3-right">
      <a href="https://irooom.herokuapp.com/logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
      </ul>
</div>

<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center"><a href="https://irooom.herokuapp.com/modifyroom.php" style="text-decoration: none">Room Details</a></li>
  
  <li class="w3-padding-xlarge w3-center"><a href="https://irooom.herokuapp.com/customers.php" style="text-decoration: none">Customer Details</a></li>
  </p>
  </ul>
  </div>
  <form name ="deleteroom" method="post" action="">
  <p> Are you sure you want to delete this room? </p>
  
  <a href="https://irooom.herokuapp.com/manager.php"><input type="button" name="no" value="No" class="w3-btn w3-section w3-center"></input></a>
  <input type="submit" name="yes" value="Yes" class="w3-btn w3-section w3-center"></input>
</form>
</body>
</html>


<?php
	include 'connect.php';
	session_start();
  $roomno = $_GET['id'];

  $sql = "SELECT * FROM room WHERE room_number=".(int)$roomno;
   
  $result=$mysqli->query($sql);
  // echo $result->num_rows;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  	{

    $sql = "DELETE from room WHERE room_number=" .(int)$roomno;
    $result2 = $mysqli->query($sql);
    echo '<script>';
    echo 'alert("Room deleted successfully");';
    echo '</script>';
      
  }
      
?>