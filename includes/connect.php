<? php 

$host_name = "eu-cdbr-west-03.cleardb.net";
$user_name = "b7d90ae59c07c3";
$password = "ca987d22";
$database = "iroom";

$conn = mysqli_connect($host_name, $user_name, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO guest (email, password, first_name, last_name, phone)
  VALUES ('maria@yahoo.com', 'blabla', 'maria', 'iani', '23432432')";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>

  Conectare reusita