<?php

require "../dbBroker.php";
require "../model/rezervacija.php";

if(isset($_POST['id'])){

    echo " Post id";
//if (isset($_POST['fullName']) 
//&& isset($_POST['email'])
//&& isset($_POST['phone'])
//&& isset ($_POST['noppl'])
//&& isset ($_POST['date'])
//&& isset ($_POST['time'])){

    $status= Reservation::deleteById($_POST['id'],$conn);
   // $_POST['email'],
    //$_POST['phone'],
    //$_POST['noppl'],
    //$_POST['date'],
    //$_POST['time'],
   // $conn);

    If($status){
        header ("Location:../view/potvrda.php");
        echo "Vaša rezervacija je obrisana!";
    } else{

        echo "Pokusajte ponovo";
         header ("Location:../view/potvrda.php");
    }

}






?>