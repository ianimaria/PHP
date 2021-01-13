<?php 
    echo "<div align='center' style='font-size: 30px;'>iRoom</div>"; 
?>

<html>
<head>
    <link rel="stylesheet" href="style.php" media="screen">
</head>
<body>
<button id="myButton1" class="float-left submit-button" >Log in</button>
<script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "https://irooom.herokuapp.com/login.php";
    };
</script>
<button id="myButton" class="float-left submit-button" >Sign up</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "https://irooom.herokuapp.com/register.php";
    };
</script>
        <div class="container">
        <p class="main-para">
        Am ales aceasta aplicatie pentru a face mai usoara munca detinatorilor de hotel, dar si a celor care isi doresc sa gaseasca rapid o locuinta temporara. Numele aplicatiei va fi "iRoom"</p>

        <img src="db.png" class="center">
        <p class="main-para">In ceea ce priveste baza de date, vor exista doua tipuri de useri (admin si guest). In tabela "reservation" se vor retine
        detaliile pentru fiecare camera rezervata din hotel, iar in "room" vor fi stocate tipul de camera, pretul pentru o seara, nr. maxim de persoane
        care pot rezerva camera, dar si disponibilitatea camerei la momentul respectiv.</p>

        <p class="main-para">Aplicatia va permite autentificarea utilizatorilor, inchirierea camerelor in cazul clientilor in functie de disponibilitate, acceptarea sau refuzarea 
        rezervarilor de catre admin.</p>
</div>  

</body>
</html>