<?php
require("galerijaHeader.php");
require("navbar.php");

?>
<link rel="stylesheet" href="../css/galerija.css">
<body>
    <div class="Text">

    <p> Par detalja iz našeg prijatnog ambijenta. Vikendom možete uživati uz zvuke tamburaša.
        <br> 
        Kada je lepo vreme , opustite se u hladovini bašte našeg retorana.
    </p> 
</div>


<!--pretraga-->
<div class="pretraga">
<input type="text" id="search"  class=" pretrazi" placeholder="Pretraži">
         </div>

<div  >
    <table class="table" id="table"  >
<tr>
<th>Broj</th>
                    <th>Tip</th>
                    <th>Naziv</th>
                    <th>Količina</th>
                    <th>Cena</th> 
                    </tr>
</thead>
<tbody>
<?php
require "../dbBroker.php";
$query= " SELECT * FROM jelovnik LIMIT 6 OFFSET 0";
$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
while($row= mysqli_fetch_assoc($result)){
?>
<tr>
                        <td></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        </tr>
                        <?php 
}

}
?>
</tbody>
</table>
<thead>
</div>

<div class="galerija">
    <div class="restoran">
    <img  class="img"   src="../images/restoran1.jpg" alt=""width="300" height="250" /> 
    
    </div>
    <div class="restoran">
        
    <img  class="img" src="../images/restoran2.jpg" alt="" width="300" height="250"/>
    
</div>
    <div class="restoran">
        
        <img class="img"  src="../images/restoran3.jpg" alt="" width="300" height="250" />
        
    </div>
    <div class="restoran">
        
        <img class="img"   src="../images/restoran4.jpg" alt=" " width="300" height="250"/>
        
    </div>
    <div class="restoran">
        
        <img  class="img"  src="../images/restoran5.jpg" alt="" width="300" height="250"/>
        
    </div>

        <div class="restoran">
        
            <img class="img"  src="../images/restoran7.jpg" alt="" width="300" height="250"/>
        
        </div>

        <div class="restoran">
        
            <img  class="img" src="../images/restoran8.jpg" alt="" width="300" height="250"/>
            
        </div>

        <div class="restoran">
        
            <img class="img" src="../images/restoran9.jpg" alt="" width="300" height="250"/>
            
        </div>

        <div class="restoran">
        
        <img class="img" src="../images/restoranBasta.jpg" alt="" width="300" height="250"/>
        
    </div>




</div>



</body>
</html>
<?php require "footer.php"; 
    ?>