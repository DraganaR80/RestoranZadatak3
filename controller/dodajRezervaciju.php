<?php

require "../dbBroker.php";
require "../model/rezervacija.php";

if(isset($_POST['rezervisi'])){

if (isset($_POST['fullName']) 
&& isset($_POST['email'])
&& isset($_POST['phone'])
&& isset ($_POST['noppl'])
&& isset ($_POST['date'])
&& isset ($_POST['time'])){

    $status= Reservation::add($_POST['fullName'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['noppl'],
    $_POST['date'],
    $_POST['time'],
    $conn);

    If($status){
        header ("Location:../view/potvrda.php");
    }else{

        echo "Pokusajte ponovo";
         header ("Location:../index.php");
    }

}
}

 
    

    
    

    
    





?>