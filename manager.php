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
  die();
}
?>


<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
<body>

<div class="w3-top">
<ul class="w3-navbar w3-black w3-text-white" id="myNavbar">
    <li><a href="https://irooom.herokuapp.com/index.php" class="w3-padding-large">HOME</a></li>
    <li><a href="https://irooom.herokuapp.com/about.php" class="w3-padding-large">ABOUT</a></li>
    <li class="w3-hide-small w3-right">
      <a href="https://irooom.herokuapp.com/logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
      </ul>
</div>
<h1><p class="w3-center w3-text-black">Welcome, <?php echo $_SESSION['managername'];?></h1></p>
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center"><a href="https://irooom.herokuapp.com/modifyroom.php" style="text-decoration: none">Room Details</a></li>
  
  <li class="w3-padding-xlarge w3-center"><a href="https://irooom.herokuapp.com/customers.php" style="text-decoration: none">Customer Details</a></li>
  </p>
  </ul>
  
</body>
</html>