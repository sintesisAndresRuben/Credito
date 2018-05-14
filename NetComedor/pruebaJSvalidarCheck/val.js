//Número máximo de casillas marcadas por cada fila 
var maxi=1; 

//El contador es un arrayo de forma que cada posición del array es una linea del formulario 
var contador=new Array(0,0);

function validar(check,grupo) { 
   //Compruebo si la casilla está marcada 
   if (check.checked==true){ 
      	//está marcada, entonces aumento en uno el contador del grupo 
      	contador[grupo]++; 
      	//compruebo si el contador ha llegado al máximo permitido 
      	if (contador[grupo]>maxi) { 
         	//si ha llegado al máximo, muestro mensaje de error 
         	alert('No se pueden elegir más de '+maxi+' casillas a la vez.'); 
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 
      	} 
   }else { 
      	//si la casilla no estaba marcada, resto uno al contador de grupo 
      	contador[grupo]--; 
   } 
}