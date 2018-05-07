// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
 
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );


$(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "pro.php",
        "aoColumns": [
              { mData: 'id_usuario' } ,
              { mData: 'nombre_usuario' },
              { mData: 'apellido_usuario' } ,
              { mData: 'mail_usuario' },
              { mData: 'password_usuario' } ,
              { mData: 'tipo_usuario' },
              { mData: 'admin' } ,
              { mData: 'id_etapa' }
            ]
      });  
  });