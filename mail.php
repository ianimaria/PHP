<?php
session_start();

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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

    $mail = new PHPMailer;
	// $mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='iani.maria09@gmail.com';
	$mail->Password='9februarie';

    $mail->setFrom('iani.maria09@gmail.com');
	$mail->addAddress($_SESSION['email']);
	$mail->addReplyTo('');

	$mail->isHTML(true);
	$mail->Subject='Booking confirmation';
	$mail->Body='<h1 align=center>Your booking has been confirmed. </h1>';
	
	if (!$mail->send())
	{ echo "Message could not be sent!"; 
		echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";}
	else { echo "Message has been sent!";
		echo "<script>setTimeout(\"location.href = 'https://irooom.herokuapp.com/index.php';\",1500);</script>";}
?>
