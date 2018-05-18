<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QR loco</title>
    <script src="lib/html5_qrcode.min.js"></script>
</head>
<body>
  <!-- PAGINA DEL CODIGO QR -->
  <!-- https://elbruno.com/2014/02/19/html5-howto-escanear-un-codigo-qr-con-javascript/ -->
  <div class="jumbotron">
  </div>

  <div class="row">
    <div class="col-md-12">
     <h2>QR Code</h2>
     <div id="reader" style="width:300px;height:250px">
     </div>
     <h6>Result</h6>
     <span id="read" class="center"></span>
     <br>
   </div>
 </div>

 <script>

   $(document).ready(function () {
     $('#reader').html5_qrcode(function (data) {
      alert(data);
    },
    function (error) {
     console.log(error);
   }, function (videoError) {
     console.log(videoError);
   }
   );
   });    
 </script>


</body>
</html>
