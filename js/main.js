
// brisanje 
$("#brisi").click(function(event){
    event.preventDefault();
  console.log("Pokrenuto brisanje rezervacije");

    const oznaceno= $("input[type=radio]:checked");
    request=$.ajax({
        url:"../controller/obrisiRezervaciju.php",
        type:"post",
        //citamo vrednost oznacenog polja
        data:{id:oznaceno.val()},
    });
    request.done(function (response, textStatus, jqXHR) {
        if (response == "Success") {
          alert("Rezervacija je obrisana");
          location.reload(true);
        } else {
          console.log("Rezervacija nije obrisana" + response);
        }
      });
    
      request.fail(function (jqXHR, textStatus, error) {
        console.error("Desila se greska: " + textStatus, error);
      }); 
    })


    $(document).ready(function() {
      $("#search").on("keyup", function(e) {
          $("#table").trigger("reset");
          var search_query = $(this).val();
          $.ajax({
              url: "controller/search.php",
              type: "POST",
              data: {
                  search: search_query
              },
              success: function($data) {
                  $("#table").html($data);
              }
          });
      });
  });