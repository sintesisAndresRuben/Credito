$(document).ready(function(){
  // FUNCION PARA QUE ESCRIBA EL CONTENIDO DEL INPUT CANTIDAD EN EL CAMPO CANTIDAD (FACTURA)
  //AL LEVANTAR LA TECLA
  $("#cantidadTicket").change(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
  });
  // AL CAMBIAR DE NUMERO CON LAS FLECHAS DEL INPUT
  $("#cantidadTicket").keyup(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
  });









  //FUNCION PARA QUE ESCRIBA LA OPCION SELECCIONADA EN EL CAMPO TIPO TIQUET
  $( "select" ).change(function () {
    var str = "";
    var precio =5;
    var cantidad = $("#cantidadTicket").val();
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
      //precio = $(this).attr("id");
      //EL PROBLEMA ESTA EN EL PRECIO, HAY QUE CONVERTIRLO EN INTEGER
    });
    $( "#txtTicket" ).html( str );
    var suma = precio*cantidad;
    $("#valor_ticket").val(suma);
  })
  .change();


// jQuery(document).on('keyup', '#cantidadTicket' function)  
});


