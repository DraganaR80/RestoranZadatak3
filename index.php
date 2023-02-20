<?php

require_once "../view/potvrda.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat:ital@1&family=Open+Sans:ital,wght@1,300&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="images/2611141.png">
    <link rel="stylesheet" href="css/index.css">
    <title>Naša priča</title>
</head>
<body>

<div class="header">
<ul>

<li> O nama</li>
<li> Galerija</li>
<li> Kontakt</li>
<li> <img src="images/2611141.png" width="30px" length="30px" > </li>
<li><h4>NAŠA PRIČA</h4></li>

</ul>
</div>
<div class="form">
<h2> Rezervacija</h2>
<br><br>
<form  method="POST"  action="../view/potvrda.php"  id="posalji">

<input type="text" name="name" placeholder=" Ime i prezime" id="Ime">

<br><br>
<input type="email" name="email" placeholder="Email"   id="email">

<br><br>

<input type="phone " name="phone" placeholder="Telefon "   id="telefon  ">
<br><br>
<input type="date" name="datum" class="datum" >

<br> <br>
<input type="time" name="vreme" class="datum" >

<br><br>
<select name="people" id="people">
<option value="2"> 2 osobe</option>
<option value="3"> 3 osobe</option>
<option value="4"> 4 osobe</option>
<option value="5"> 5 osoba</option>
<option value="6"> 6 osoba</option>
<option value="7"> 7 osoba</option>
<option value="8"> 8 osoba</option>
<option value="9"> 9 osoba</option>
<option value="10"> 10 osoba</option>

</select>
<br><br>
<button type="submit" class="button"> Rezerviši</button>

</form>
</div>

</body>
</html>