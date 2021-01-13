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
    $roomtype = $_POST['room'];
    $guestno = $_POST['numberguests'];
    $start_date = $_POST['start_day'];
    $end_date = $_POST['end_day'];
    
    if ($guestno < 1 || floor($guestno) != $guestno)
    {echo '<script language="javascript">';
        echo 'alert("Enter minimum one person")';		
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";}
    else if ($roomtype == 'Single' && $guestno != 1)
        {echo '<script language="javascript">';
            echo 'alert("Only one person is allowed in this room")';		
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";}
    else if ($roomtype == 'Double' && $guestno > 2)
        {echo '<script language="javascript">';
        echo 'alert("Maximum two persons are allowed in this room")';		
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";} 
    else if ($roomtype == 'Deluxe' && $guestno > 2)
        {echo '<script language="javascript">';
            echo 'alert("Only two persons are allowed in this room")';		
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";}
    else if ($roomtype == 'Family Suite' && $guestno > 5)
    {echo '<script language="javascript">';
        echo 'alert("Only five persons are allowed in this room")';		
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";}
    // echo $roomtype;
    // echo ("Guest id is: ");
    // echo ($_SESSION['guestid'])."<br>";
    else {
    $sql = "SELECT * FROM reservation res, room r WHERE room_type='$roomtype' AND res.room_number = r.room_number";
    $result = $mysqli->query($sql);
    $ok=1;
    if ($result->num_rows != 0)
    {
    while($row = mysqli_fetch_array($result))
    {
        echo $row['room_number'] . " " . $row['end_date']  ."<br>";
        echo ($start_date) ." ". ($end_date). " ". date('d/m/Y',strtotime($row['start_date'])) ." ". date('d/m/Y',strtotime($row['end_date'])) . "<br>";
        if (($start_date < date('m/d/Y',strtotime($row['start_date'])) && $end_date > date('m/d/Y',strtotime($row['start_date'])))
        || ($start_date > date('m/d/Y',strtotime($row['start_date'])) && $start_date < date('m/d/Y',strtotime($row['start_date']))))
            { $ok=0; break;}
        $roomno = $row['room_number'];
    }
    echo $ok;
    if ( $ok == 1)
        
        {$start_date = date('Y/m/d',strtotime($start_date));
        $end_date = date('Y/m/d',strtotime($end_date));
        $sql = "INSERT INTO reservation VALUES (default, 1, '$_SESSION[guestid]', '$roomno', '$start_date', '$end_date')";
        $result = $mysqli->query($sql);
        // echo $mysqli->error;
        // echo $result;
        if ($result)
            {
                // echo '<script language="javascript">';
                // echo 'alert("Your room is successfully booked!")';		
                // echo '</script>';
                header("Location: https://irooom.herokuapp.com/mail.php");
            }}
        
        else
            {echo '<script language="javascript">';
            echo 'alert("The requested room is unavailable!")';		
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";
            die();}
            }
    else
    {echo '<script language="javascript">';
        echo 'alert("The requested room is already booked for these dates!")';		
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/book.php';\",1500);</script>";
        die();}
    }
?>