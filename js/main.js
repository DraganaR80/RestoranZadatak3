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

request.done(function(response,textStatus,jqXHR){
if(response=== "Success"){
alert("Primljena rezervacija");

} else {
    alert("Došlo je do greške");
}
})

})

