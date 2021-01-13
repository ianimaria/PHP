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
  

<div class="w3-col m8 w3-container">
  	
  	<p class="w3-center"><em>Customer Details.....<em></p>  	

	<div class="w3-container">
  

  <table class="w3-table-all w3-card-4">
    <tr>
      <th>Reservation ID</th>
      <th>Guest ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Room Number</th>
      <th>Check-in</th>
      <th>Check-out</th>
      <th>Email</th>
      <th>Phone</th>
      </tr>

      <?php 
     $sql="SELECT r.reservation_id,g.guest_id,g.first_name,g.last_name,r.room_number,r.start_date,r.end_date,g.email,g.phone FROM reservation r, guest g WHERE r.guest_id = g.guest_id";
    
  	$result = $mysqli->query($sql) ;
  	$result1=mysqli_num_rows($result);
  	

      while($row=mysqli_fetch_assoc($result)) 
     { 
    
    	echo'<tr>';
        
        echo '<td>' . $row['reservation_id'] . '</td>';
        echo '<td>' . $row['guest_id'] . '</td>';		
		echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['room_number'] . '</td>';
    echo '<td>' . $row['start_date'] . '</td>';
    echo '<td>' . $row['end_date'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';

      echo'</tr>';
    }
    ?>
    
  </table>
</div>

  	</div>
   </div>      
      	
   </body>
</html> 