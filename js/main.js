// dodavanje rezervacije
$("#posalji").submit(function(event){

const $form=$(this);
// da bi moglo da se ocita preko Ajaxa, podatke iz forme smo poslali kao citljiv niz, citanje podataka
const serialization=$form.serialize();
//slanje zahteva
request=$.ajax({
    url:"controller/dodajRezervaciju.php",
    type:"post",
    data:serialization,
})
}); 

// brisanje 
$("#brisi").click(function(event){
 event.preventDefault();
 console.log("pokrenuto");
    const oznaceno= $("input[type=radio]:checked");


    request=$.ajax({
        url:"../controller/obrisiRezervaciju.php",
        type:"post",
        //citamo vrednost oznacenog polja
        data:{id:oznaceno.val()},
    });
    request.done(function (response, textStatus, jqXHR) {
        if (response === "Success") {
          alert("Rezervacija je obrisana");
          location.reload(true);
        } else {
          console.log("Rezervacija" + response);
        }
      });
    
      request.fail(function (jqXHR, textStatus, error) {
        console.error("Desila se greska: " + textStatus, error);
      });
    
         
})
    
    