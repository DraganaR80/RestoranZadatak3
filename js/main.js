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
}); })

// brisanje 
$("#brisi").click(function(event){
 alert ("Rezervacija je obrisana!")
    const oznaceno= $("input[type=radio]:checked");
    request=$.ajax({
        url:"controller/obrisiRezervaciju.php",
        type:"post",
        //citamo vrednost oznacenog polja
        data:{id:oznaceno.val()},
    }); })
    
    
    