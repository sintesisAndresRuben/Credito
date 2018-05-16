<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])) {
	header('location: login.php');
}else {
	$tipo_norma=$_POST['norma'];
	$pdf = $_FILES['foto']['name'];
	$fecha= date("Y-n-j");
	$destino_a= './normativa_pdf/'.$tipo_norma.'/'.$pdf;
	$destino_b='/normativa_pdf/'.$tipo_norma.'/';
	// echo "$tipo_norma </br>";
	// echo "$pdf </br>";
	// echo "$destino_a </br>";
	// echo "$destino_b </br>";
	$q = "SELECT * FROM tbl_normativa WHERE nombre_normativa="."'$pdf'";
	// echo "$q </br>";
	$tablaNormativa = mysqli_query($conexion, $q);
	if ($pdf=="") {
		//echo "No hay fichero pdf";
		$_SESSION['error2']="No hay fichero";
		header('location:normativa.php');
	}else if (mysqli_num_rows($tablaNormativa)>0) {
		$_SESSION['error']="Fichero repetido";
		header("location: normativa.php");
	} else {
		$q = "INSERT INTO tbl_normativa (nombre_normativa, tipo_normativa, ruta_normativa, fecha_normativa, id_etapa) VALUES ('$pdf','$tipo_norma', '$destino_a', '$fecha', 16)";
		// echo "</br>";
		// echo $q;
		$subirPdf=mysqli_query($conexion, $q);
	// Mover los ficheros al directorio que nosotros queremos
		$carpeta= "normativa_pdf/".$tipo_norma."/";
		opendir($carpeta);
		$destino= $carpeta.$_FILES['foto']['name'];
		copy($_FILES['foto']['tmp_name'],$destino);
		//echo "ARCHIVO SUBIDO";
		$nombre=$_FILES['foto']['name'];

		//echo $_FILES['foto']['name']."<br>";
		//echo $_FILES['foto']['size']."Bytes";
		//echo $_FILES['foto']['type'];
	//Fin subida de fichero
	//Vuelve a la pagina normativa
	header("location:normativa.php");
	}

}
?>