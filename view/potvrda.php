

<?php

require "../dbBroker.php";
require "../model/rezervacija.php";
require "potvrdaHeader.php";
require "navbar.php";

$rezervacija= Reservation::getAll($conn);


if(!$rezervacija){
    echo "Greska kod upita";
    exit();
}
?>
<br> <br> <br>
    <h1>VAŠA REZERVACIJA JE USPEŠNO IZVRŠENA!</h1>

    <img src="../images/2-680x596.jpg" class="image">

    <br>
    <div class="main">
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ime i prezime</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Broj osoba</th>
                    <th>Datum</th>
                    <th>Vreme</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                if($rezervacija->num_rows==0){
                  ?>
<h3> Trenutno nema rezervacija</h3>
<?php
                } else{

while($red= $rezervacija->fetch_array()){


                
                
                
                
                
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['fullName'] ?></td>
                        <td><?php echo $red['email'] ?></td>
                        <td><?php echo $red['phone'] ?></td>
                        <td><?php echo $red['noppl'] ?></td>
                        <td><?php echo $red['date'] ?></td>
                        <td><?php echo $red['time'] ?></td>
                     




                    
                    
                        <td class="celija">
                            <label class="radio-btn">
                                
                                <input type="radio" class="radio" name="checked-donut" value=<?php echo $red['id'] ?>>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td> <button class="dugmeBrise" id="brisi" >Obriši</button>    </td>
                    </tr>
                    <?php
                }


} ?>

            </tbody>
        </table>
    </div>
       



    <?php require "footer.php"; 
    ?>