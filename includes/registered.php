<!DOCTYPE html>
<html>
    <head>
        <body>
            <?php echo "You have registered successfully! :)" ?>
        </body>
    </head>
</html>
<?php
 
    if(isset($_POST["submit"]))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $phone=$_POST['phone'];
        echo "it works";
        require_once('/includes/connect.php')
        $sql = "SELECT guest_id FROM guest WHERE email=?;";
        global $conn;
        $statement=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statement, $sql)){
            echo "if 1";
            header("Location; ../register.php?error=sqlerror");
            exit();
        }
        else
        {
            echo "else 1";
            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);

            $result = mysqli_stmt_num_rows($statement);
            $id = uniqid($email);

            if ($result > 0)
            {
                echo '<script language="javascript">';
                echo 'alert("There is already an account with this email")';
                echo '</script>';
                exit();
            }
            else
            {
                $checkpass = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO guest(email, password, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?);";
                $statement = mysqli_stmt_init($conn);

                if (!mysqli_stmt_init($conn))
                    {header("Location: ../signup.php?error=sqlerror");
                    exit(); }
                else
                    {
                        mysqli_stmt_bind_param($statement, "sssss", $email, $checkpass, $first_name, $last_name, $phone);
                        mysqli_stmt_execute($statement);
                        mysqli_stmt_store_result($statement);
                        echo '<script language="javascript">';
                        echo 'alert("You are successfully registered!")';
                        echo '</script>';
                        exit();
                        
                    }
            }
        }
        mysqli_stmt_close($statement);
        mysqli_close($conn);
    }
    else
    {
        header("Location: ../index.php");
        exit();
    } 
?>
