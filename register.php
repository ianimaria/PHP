<? php include('registered.php') ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<form method="post">
        <p><center><input class="w3-input-group w3-input " type="text" name="email" placeholder="Email" style="width:60%" required><br>
        </p>
        <p><input class="w3-input-group w3-input" type="password" name="password" placeholder="Password" style="width:60%" required><br>		
        </p>
        <p><input class="w3-input-group w3-input" type="text" name="first_name" placeholder="First Name" style="width:60%" required><br>		
        </p>
        <p><input class="w3-input-group w3-input" type="text" name="last_name" placeholder="Last Name" style="width:60%" required><br>		
        </p>
         <p><input class="w3-input-group w3-input" type="text" name="phone" placeholder="Phone Number" style="width:60%" required><br>		
        </p>
        </center>
      
      <input type="submit" action="includes/registered.php" name="submit" value="Submit" class="w3-btn w3-section w3-center"></input>

</form>
</body>
</html>