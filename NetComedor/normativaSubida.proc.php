<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])) {
	header('location: index.php');
}else {
	$pdf = $_REQUEST['archivo'];
	$fecha= date("Y-n-j");
	// echo "Nombre: $pdf </br>";
	// echo "Ruta:./normativa_pdf/$pdf </br>";
	// echo "Fecha: $fecha </br>";
	// echo "Etapa: 16 </br>";

	//$q = "INSERT INTO tbl_normativa (nombre_normativa, ruta_normativa, fecha_normativa, id_etapa) VALUES ('$pdf','./normativa_pdf/$pdf', '$fecha', 16)";
	//$subirPdf=mysqli_query($conexion, $q);
	// Mover los ficheros al directorio que nosotros queremos
	//http://www.holamundo.es/lenguaje/php/articulos/subir-archivos-con-php.html
	move_uploaded_file($_FILES['archivo']['temp_name'],'./normativa_pdf/'.$FILES['foto']['name']);
	chmod('./normativa_pdf/'.$FILES['foto']['name'],0644);
	// header("location:normativa.php");
	}
?>