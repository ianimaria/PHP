<!DOCTYPE html>
<html>
<title></title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../w3.css">
</head>
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

  <div class="w3-col m2 w3-container w3-section">
    </div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul">
  <li class="w3-padding-large">
  <form name ="editroom" method="post" action="">
      
  <li class="w3-padding-large">
      <p>
        <b>Price</b>
        <input class="w3-input-group w3-input w3-animate-input" type="number" name="price" value="<?php echo $result['price']; ?>">
      </p>
   </li>

   <li class="w3-padding-large">
      <p>
        <b>Room Type</b>
        <select id="type" name="roomtype" class="w3-select" required>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="deluxe">Deluxe</option>
        <option value="suite">Family suite</option>
        </select>
      </p>
   </li>


   <li class="w3-padding-large">
      <p>
        <b>Capacity</b>
        <input class="w3-input-group w3-input w3-animate-input" type="number" name="capacity" value="<?php echo $result['capacity']; ?>">
      </p>
   </li>

   </ul>
      
   <input type="submit" name="submit" value="Submit" class="w3-btn w3-section w3-center"></input>


      </form>
  	</div>
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
    $roomno = $_GET['id'];
    echo $roomno;
    $sql = "SELECT * FROM room WHERE room_number =".(int)$roomno;
    $result=$mysqli->query($sql);
    $result = $result->fetch_assoc();


    if(isset($_POST["submit"]))
  {

    $price = $_POST['price'];
    $roomtype = $_POST['roomtype'];
    $capacity = $_POST['capacity'];
    echo $price . " " . $roomtype  ." " . $capacity;
    $sql = "UPDATE room SET price=$price, room_type ='$roomtype', capacity=$capacity WHERE room_number=".(int)$roomno;
    $result = $mysqli->query($sql);
    echo($mysqli->error);
    echo $result;
    if($result)
    {
        echo "<script>";
        echo 'window.alert("Room details updated successfully!")';
        echo "</script>";
    }

  }

?>