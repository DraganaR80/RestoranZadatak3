<?php
require "../dbBroker.php";
require "../model/modelMeni.php";
require "headerMeni.php";
require "navbar.php";


$meni= Meni::getAll($conn);

if(!$meni){

    echo "Greška pri upitu";
    exit();
}
?>
<img src="../images/mulberrystreettavern_Instagram_2600_ig_17918312896562125_ed0f59ed-c7ff-4406-9627-3453cf41e2d6.jpg" width="100%" height="5%"  class="2">

<br>
    <div class="meni">
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th>Broj</th>
                    <th>Tip</th>
                    <th>Naziv</th>
                    <th>Količina</th>
                    <th>Cena</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                
            <?php if($meni->num_rows==0){
                echo " Nema ponude";


               } else{

while($red= $meni->fetch_array()){


                
            ?>    
                
                
                
               
                    <tr>
                        <td></td>
                        <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['type'] ?></td>
                        <td><?php echo $red['name'] ?></td>
                        <td><?php echo $red['quantity'] ?></td>
                        <td><?php echo $red['price'] ?></td>
                       
                     




                    
                    
                        <td class="celija">
                            <label class="radio-btn">
                                
                                <input type="radio" class="radio" name="checked-donut" value=<?php echo $red['id'] ?>>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td> <button class="dodaj" id="dodaj" >Poruči</button></td>
                    </tr>
                    <?php
                }


} ?>

















<?php require "footer.php"; ?>