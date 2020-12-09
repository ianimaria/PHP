<?php
	include 'includes/connect.php';
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="w3.css">
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $(function() {
	
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
	  regional: "fi",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });  </script>
</head>

<body style="background-color: #d4d7dd;">

<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-small w3-right">
      <a href="includes/logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
    
  </ul>
</div>

<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container w3-section" >
  </div>
  	<div class="w3-col m2 w3-container w3-section">
  	</div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul w3-hoverable">
  <li class="w3-padding-large" style="background-color: white;">
  <form name ="book" method="post" action="https://irooom.herokuapp.com/availability.php">
  		
        <p><b>Room Type:</b><br><input type="radio" name="roomtype" value="Single">Single<br>
                    <input type="radio" name="roomtype" value="Double">Double<br>
                    <input type="radio" name="roomtype" value="Deluxe">Deluxe<br>
        			<input type="radio" name="roomtype" value="suite">Family Suite<br>
        </p>
  </li>
  <li class="w3-padding-large" style="background-color: white;">
  		<p><b>Number of persons:</b><br><input type="text" name="numberguests"><br>
                    

       	</p>
   </li>
   
   <li class="w3-padding-large" style="background-color: white;">
   		 <p><b>Check-in - Check-out</b><br>
            <input id="from" name="start_day" required="" type="text" />
            <input id="to" name="end_day" required="" type="text" />
        	
        </p>
    </li>
    </ul>
    
    	<input type="submit" value="Submit" class="w3-btn w3-section w3-right">
    </form>


  
</body>
</html>
