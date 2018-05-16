$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
document.querySelectorAll('.Total').forEach(function (total) {
        if (total.classList.length > 1) {
            var letra = total.classList[1];
            var suma = 0;
            document.querySelectorAll('.Columna' + letra).forEach(function (celda) {
                var valor = parseInt(celda.innerHTML);
                suma += valor;
            });
            total.innerHTML = suma;
        }
    });