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
</body>
</html>

<?php
	include 'connect.php';
	session_start();
  // echo $_SESSION['managerid'];
	if($_SESSION['manager_id']==0)
{
	echo '<script language="javascript">';
  echo 'alert("You have to be logged in as a manager to access this page!")';		
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";
  die();}

	$sql="SELECT * FROM room ";
	$result = $mysqli->query($sql) or die("BOOM");
	$result1=mysqli_num_rows($result);

	echo "<table border='1' cellpadding='10'>";

	echo "<tr> <th>Room number</th> <th>Price</th> <th>Room Type</th> <th>Capacity</th> </th> </tr>";

	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";

		echo '<td>' . $row['room_number'] . '</td>';
		echo '<td>' . $row['price'] . '</td>';
		echo '<td>' . $row['room_type'] . '</td>';
		echo '<td>' . $row['capacity'] . '</td>';
		

		echo '<td><a href="editroom.php?id=' . $row['room_number'] . '">Edit</a></td>';

		echo '<td><a href="deleteroom.php?id=' . $row['room_number'] . '">Delete</a></td>';

	
		echo "</tr>";
	}
	echo "</table>";


?>

