$(document).ready(function(){
  //Al cargar la pagina pone el valor de cantidad en el campo cantidad (FACTURA)
  $("#textoCant").html($("#cantidadTicket").val());
  ///////////////////////// FUNCION PARA QUE ESCRIBA EL CONTENIDO DEL INPUT CANTIDAD EN EL CAMPO CANTIDAD (FACTURA) /////////////
  //AL LEVANTAR LA TECLA
  $("#cantidadTicket").change(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
    var precio = $("#valor_ticket").val();
    var suma = precio*numticket;
    $( "#precio" ).html(suma+"€ ");
    $("#insertPrecio").val(suma);
  });
  // AL CAMBIAR DE NUMERO CON LAS FLECHAS DEL INPUT
  $("#cantidadTicket").keyup(function(){
    var numticket = $(this).val();
    $("#textoCant").html(numticket);
    var precio = $("#valor_ticket").val();
    var suma = precio*numticket;
    $( "#precio" ).html(suma+"€");
    $("#insertPrecio").val(suma);

  });

  ////////////////////FUNCION PARA QUE ESCRIBA LA OPCION SELECCIONADA EN EL CAMPO TIPO TIQUET //////////////////////////////
  $( "select" ).change(function () {
    var str = "";
    var precio;
    var caca;
    var cantidad = $("#cantidadTicket").val();
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
      caca = $(this).text();
      precio = parseFloat($(this).attr("id"));
    });
    // alert(caca);
    
    if (caca=='Ticket comedor') {
      $("#cantidadTicket").prop("type","number");
      $("#david").css("visibility", "visible");
      $("#checks").css("visibility", "hidden");

    } else if (caca=='Servicio comedor 5 días') {
      $("#cantidadTicket").prop("type","hidden");
      $("#david").css("visibility", "hidden");
      //CAMBIAR EL VALOR DEL INPUT A UNO PARA QUE NO MULTIPLIQUE  
      $("#david").val('1');
      $("input[type=checkbox]").prop('checked', true);
      $("#cantidad").val('5');
      $("#checks").css("visibility", "visible");


    } else if (caca=='Servicio comedor 4 días') {
      $("#cantidadTicket").prop("type","hidden");
      $("#david").css("visibility", "hidden");
      //CAMBIAR EL VALOR DEL INPUT A UNO PARA QUE NO MULTIPLIQUE  
      $("#david").val('1');
      $("input[type=checkbox]").prop('checked', false);
      $("#cantidad").val('4');
      $("#checks").css("visibility", "visible");

    } else if (caca=='Servicio comedor 3 días') {
      $("#cantidadTicket").prop("type","hidden");
      $("#david").css("visibility", "hidden");
      //CAMBIAR EL VALOR DEL INPUT A UNO PARA QUE NO MULTIPLIQUE  
      $("#david").val('1');
      $("input[type=checkbox]").prop('checked', false);
      $("#cantidad").val('3');
      $("#checks").css("visibility", "visible");

      
    }


    $( "#txtTicket" ).html( str );
    var suma = precio*cantidad;
    $("#valor_ticket").val(suma);
    var total = $("#valor_ticket").val()+"€"
    $( "#precio" ).html(total);
    $("#insertPrecio").val(suma);

  })
  .change();



  /////////////////////////////////////////// EVENTO QUE VALIDA CUANTOS CHECKBOX ESTAN MARCADOS ///////////////////////////////

  // Evento que se ejecuta al soltar una tecla en el input
  $("#cantidad").keydown(function(){
    $("input[type=checkbox]").prop('checked', false);
    $("#seleccionados").html("0");
  });

  // Evento que se ejecuta al pulsar en un checkbox
  $("input[type=checkbox]").change(function(){

    // Cogemos el elemento actual
    var elemento=this;
    var contador=0;

    // Recorremos todos los checkbox para contar los que estan seleccionados
    $("input[type=checkbox]").each(function(){
      if($(this).is(":checked"))
        contador++;
    });

    var cantidadMaxima=parseInt($("#cantidad").val()) || 0;

    // Comprovamos si supera la cantidad máxima indicada
    if(contador>cantidadMaxima)
    {
      alert("Has seleccionado mas dias de los que permite el tipo de ticket");

      // Desmarcamos el ultimo elemento
      $(elemento).prop('checked', false);
      contador--;
    }

    $("#seleccionados").html(contador);
  });




  ///////////////////////////////////////////// CAMBIAR VALOR DE LOS CHECK AL SELECCIONAR //////////////////////////////////////////
  //busca los checks seleccionados y les cambia el valor
  $("#checks").find("input").each(function(){
    $(this).click(function(){
    if($(this).is(":checked")){
      $(this).val('1');
      // alert('seleccionado');
    }else{
      $(this).val('0');
    }
  });
  });



  //FUNCION PARA CAMBIAR EL ICONO OCULTAR/MOSTRAR TABLAS
  $("#key").click(function(){
    if($("#ojo").hasClass("fas fa-eye-slash")){
      $("#ojo").removeClass("fas fa-eye-slash");
      $("#ojo").addClass("fas fa-eye");
    } else  {
      $("#ojo").removeClass("fas fa-eye");
      $("#ojo").addClass("fas fa-eye-slash");
    }
  });
  $("#key1").click(function(){
    if($("#ojo1").hasClass("fas fa-eye-slash")){
      $("#ojo1").removeClass("fas fa-eye-slash");
      $("#ojo1").addClass("fas fa-eye");
    } else  {
      $("#ojo1").removeClass("fas fa-eye");
      $("#ojo1").addClass("fas fa-eye-slash");
    }
  });
    $("#key2").click(function(){
    if($("#ojo2").hasClass("fas fa-eye-slash")){
      $("#ojo2").removeClass("fas fa-eye-slash");
      $("#ojo2").addClass("fas fa-eye");
    } else  {
      $("#ojo2").removeClass("fas fa-eye");
      $("#ojo2").addClass("fas fa-eye-slash");
    }
  });
  //FINALIZA LA FUNCION PARA CAMBIAR EL ICONO OCULTAR/MOSTRAR TABLAS

  // var precio = $("#precio").html();
  // $("#insertPrecio").val(precio);
  // alert(precio);

// FIN DOCUMENT ready 
});


