<?php
   
    if(isset($_POST["submit"]))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $phone=$_POST['phone'];

        require_once 'connect.php';
        require_once 'functions.php';

        createUser($conn, $email, $password, $first_name, $last_name, $phone);}     
?>
