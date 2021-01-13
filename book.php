<?php
  include 'connect.php';
  session_start();
  // echo $_SESSION['guestid'];
	if($_SESSION['guestid']==0)
{
  echo '<script language="javascript">';
  echo 'alert("You have to be logged in to access this page!")';		
  echo '</script>';
  echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";
  die();
}
?>
<html>
<head>
<link rel="stylesheet" href="w3.css">
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $(function() {
    var currentdate = new Date()
    $( "#from" ).datepicker({
      minDate: new Date(),
      changeMonth: true,
      numberOfMonths: 1,
      onSelect: function (date) {
            var date2 = $('#from').datepicker('getDate');
            date2.setDate(date2.getDate() + 1);
            $('#to').datepicker('setDate', date2);
            $('#to').datepicker('option', 'minDate', date2);
        }
    });
    $( "#to" ).datepicker({
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function () {
            var dt1 = $('#from').datepicker('getDate');
            var dt2 = $('#to').datepicker('getDate');
            
            if (dt2 <= dt1) {
                var minDate = $('#to').datepicker('option', 'minDate');
                $('#to').datepicker('setDate', minDate);
            }
      }
    });
  });  </script>
</head>

<body style="background-color: #d4d7dd;">

<div class="w3-top">
<ul class="w3-navbar w3-black w3-text-white" id="myNavbar">
    <li><a href="index.php" class="w3-padding-large">HOME</a></li>
    <li><a href="about.php" class="w3-padding-large">ABOUT</a></li>
    <li class="w3-hide-small w3-right">
      <a href="logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
      </ul>
</div>
<br><br>
<h1><p class="w3-center w3-text-black">Welcome, <?php echo $_SESSION['guestname']; ?></h1></p>
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container w3-section" >
  </div>
  	<div class="w3-col m2 w3-container w3-section">
  	</div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul w3-hoverable">
  <li class="w3-padding-large" style="background-color: white;">
  <!-- <form name ="book" method="post" action="https://irooom.herokuapp.com/availability.php"> -->
    <form name ="book" method="post" action="https://irooom.herokuapp.com/availability.php">
  		
        <p><b>Room Type:</b><br>
          <select name="room" id="room" required>
            <option value="Single">Single
            <option value="Double">Double
            <option value="Deluxe">Deluxe
        		<option value="Family Suite">Family Suite
          </select>
        </p>
  </li>

  <li class="w3-padding-large" style="background-color: white;">
  		<p><b>Number of persons:</b>
      <br>
      <input type="number" name="numberguests" required>
       	</p>
   </li>
   
   <li class="w3-padding-large" style="background-color: white;">
   		 <p><b>Check-in - Check-out</b><br>
            <input id="from" name="start_day" required="" type="text" />
            <input id="to" name="end_day" required="" type="text" />
        	
        </p>
    </li>
    </ul>
    
    	<input type="submit" value="Submit" class="w3-btn w3-section w3-center">
    </form>


  
</body>
</html>
