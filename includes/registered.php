<?php   
    if(isset($_POST["submit"]))
    {
        require 'connect.php';
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $phone=$_POST['phone'];
        
        $sql = "INSERT INTO guest(email, pass, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?);";
        $statement=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statement, $sql)){
            header("Location; ../register.php?error=sqlerror");
            exit();
        }
        $checkpass = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($statement, "sssss", $email, $pass, $first_name, $last_name, $phone);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);
            echo '<script language="javascript">';
            echo 'alert("You are successfully registered!")';
            echo '</script>';
            exit();
                        
                    }

?>
