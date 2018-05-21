<!DOCTYPE html>
<html>
<head>
	<title>respuesta QR</title>
</head>
<body>

<?php
include 'conexion.proc.php';
require 'phpqrcode/qrlib.php';

$contenido=$_POST['codigoQR'];

$sql="INSERT INTO `tbl_qr` (`id_qr`, `codigo`, `fecha`) VALUES (NULL, '$contenido', CURRENT_TIMESTAMP)";
$result = mysqli_query($conexion,$sql);


echo $sql;

$dir = 'temp/';

if(!file_exists($dir))
	mkdir($dir);

$filename = $dir.'test.png';

$tamanio = 15;
$level = 'H';
$frameSize = 1;
// $contenido = 'http://www.codigosdeprogramacion.com';
// $contenido=$_POST['codigoQR'];

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

?>
<div style="text-align: center;">
	<?php
	echo '<img src="'.$filename.'" />';
	?>
</div>


</body>
</html>