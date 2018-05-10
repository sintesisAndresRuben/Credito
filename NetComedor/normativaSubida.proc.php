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
	// echo "Etapa: </br>";
	// Mover los ficheros al directorio que nosotros queremos
	//http://www.holamundo.es/lenguaje/php/articulos/subir-archivos-con-php.html
	move_uploaded_file($_FILES['archivo']['tmp_name'],'./normativa_pdf/'.$FILES['foto']['name'])
	// 
	$q = "INSERT INTO tbl_normativa (id_normativa, nombre_normativa, tipo_ruta, ruta_normativa, fecha_normativa, id_etapa) VALUES ('', $pdf, '','./normativa_pdf/$pdf', '$fecha', '16')";
	$subirPdf=mysqli_query($conexion, $q);
	echo $q;
	//header("location:normativa.php");
	}
?>