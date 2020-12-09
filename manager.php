<?php
	include 'includes/connect.php';
	session_start();


?>


<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
<body>

<div class="w3-top">
<ul class="w3-navbar w3-black w3-text-white" id="myNavbar">
    <li><a href="#" class="w3-padding-large">HOME</a></li>
    <li><a href="about.php" class="w3-padding-large">ABOUT</a></li>
    <li class="w3-hide-small w3-right">
      <a href="includes/logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
      </ul>
</div>

<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center"><a style="text-decoration: none">Room Details</a></li>
  
  <li class="w3-padding-xlarge w3-center"><a style="text-decoration: none">Customer Details</a></li>
  </p>
  </ul>
  <p>In aceasta pagina, managerul va putea modifica/adauga camere si va putea vedea clientii care au rezervat o camera</p>

</body>
</html>