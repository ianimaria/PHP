<?php
    include 'connect.php';
    if(isset($_POST["submit"]))
    {
        echo "It works";}
        else
        { "it does not work";}
    //     $email=$_POST['email'];
    //     $password=$_POST['password'];
    //     $first_name=$_POST['first_name'];
    //     $last_name=$_POST['last_name'];
    //     $phone=$_POST['phone'];

    //     $check ="SELECT email FROM guest WHERE email ='$email";
    //     $temp=$mysqli->query($check);
    //     if ($temp->num_rows==0)
    //     {
    //         if ($mysqli->error ==0)
    //         {
    //             $sql = "INSERT INTO guest VALUES (default, '$email', '$password', '$first_name', '$last_name', '$phone')";
    //             $result = $mysqli->query($sql);
    //         }

    //         if ($result)
    //         {
    //             echo '<script language="javascript">';
    //             echo 'alert("You are successfully registered!")';
    //             echo '</script>';
    //         }
    //         else
    //         {
    //             echo '<script language="javascript">';
    //             echo 'alert("An error occurred")';
    //             echo '</script>';
    //         }
    //     }
    // }
    // else
    // {
    //     echo '<script language="javascript">';
    //     echo 'alert("Email already registered, register with another email")';
    //     echo '</script>';
    // }
?>

<?php
    include 'connect.php';
?>