$(document).ready(function(){
  //Al cargar la pagina pone el valor de cantidad en el campo cantidad (FACTURA)
  $("#textoCant").html($("#cantidadTicket").val());
  // FUNCION PARA QUE ESCRIBA EL CONTENIDO DEL INPUT CANTIDAD EN EL CAMPO CANTIDAD (FACTURA)
  //AL LEVANTAR LA TECLA
  $("#cantidadTicket").change(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
    var precio = $("#valor_ticket").val();
    var suma = precio*numticket;
    $( "#precio" ).html(suma+"€ ");
  });
  // AL CAMBIAR DE NUMERO CON LAS FLECHAS DEL INPUT
  $("#cantidadTicket").keyup(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
    var precio = $("#valor_ticket").val();
    var suma = precio*numticket;
    $( "#precio" ).html(suma+"€");


  });

  //FUNCION PARA QUE ESCRIBA LA OPCION SELECCIONADA EN EL CAMPO TIPO TIQUET
  $( "select" ).change(function () {
    var str = "";
    var precio;
    var caca;
    var cantidad = $("#cantidadTicket").val();
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
      caca = $(this).text();
      precio = parseFloat($(this).attr("id"));
      //EL PROBLEMA ESTA EN EL PRECIO, HAY QUE CONVERTIRLO EN INTEGER
    });
    // alert(caca);
    
if (caca=='Ticket comedor') {
      $("#cantidadTicket").prop("type","number");
      $("#david").css("visibility", "visible");

    } else {
      $("#cantidadTicket").prop("type","hidden");
      $("#david").css("visibility", "hidden");
      //CAMBIAR EL VALOR DEL INPUT A UNO PARA QUE NO MULTIPLIQUE  
      $("#david").val('1');

    }


    $( "#txtTicket" ).html( str );
    var suma = precio*cantidad;
    $("#valor_ticket").val(suma);
    var total = $("#valor_ticket").val()+"€"
    $( "#precio" ).html(total);

  })
  .change();


// jQuery(document).on('keyup', '#cantidadTicket' function)


// Al seleccionar una opcion diferente a ticket comedor poner en hidden el input cantidad


// -------------------------------------------------------------------------------------------------------------
//             $("#key").click(function(){
//                 if($(this).hasClass("fa-eye")){
//                     $("#pwd").prop("type","text")
//                     $(this).removeClass("fa-eye");
//                     $(this).addClass("fa-eye-slash");
//                 } else  {
//                     $("#pwd").prop("type","password")
//                     $(this).removeClass("fa-eye-slash");
//                     $(this).addClass("fa-eye");
//                 }
//             });
                        
//             $('#Nom').keypress(function () {
//                 $('#mensaje').load('nombreDisponible',
//                     "Nom=" + $('#Nom').val())
// //                    var mensaje= document.getElementById("mensaje").innerHTML
// //                    alert(mensaje);
//             }
//             );
    
//             $('#pwd').focus(function () {
//                     var mensaje= document.getElementById("mensaje").innerHTML
//                     if(mensaje=="nombre si disponible"){
// //                        alert("disponible")
//                     }else{
//                        $('#Button').attr('disabled','disabled');
//                     }
// //                    alert(mensaje);
//             }
//             );
    
    
// FIN DOCUMENT ready 
});


