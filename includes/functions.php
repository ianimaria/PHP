<?php
function createUser($conn, $email, $password, $first_name, $last_name, $phone) {
    $sql = "INSERT INTO guest(email, password, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_init($statement, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("An error occurred")';
        echo '</script>';
        exit();
    }

    $checkpass = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "ssss", $email, $checkpass, $first_name, $last_name, $phone);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    echo '<script language="javascript">';
    echo 'alert("You are successfully registered!")';
    echo '</script>';
    exit();
}