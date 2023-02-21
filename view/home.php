
<?php
require "header.php";
require "navbar.php";

?>



<div class="form">
<h2> Rezervacija</h2>
<br><br>
<form  method="POST"  action="../controller/dodajRezervaciju.php"  id="posalji">

<input type="text" name="fullName" placeholder=" Ime i prezime" id="Ime">

<br><br>
<input type="email" name="email" placeholder="Email"   id="email">

<br><br>

<input type="phone " name="phone" placeholder="Telefon "   id="telefon  ">

<br><br>
<select name="noppl" id="people">
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
<input type="date" name="date" class="datum" >

<br> <br>
<input type="time" name="time" class="datum" >


<br><br>
<button type="submit" class="button"  name="rezervisi"> Rezerviši</button>
 
</form>
</div>

  <?php require "footer.php"; ?>