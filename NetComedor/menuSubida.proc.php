<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])) {
	header('location: login.php');
}else {
	$pdf = $_FILES['foto']['name'];
	$tipo_menu = $_POST['menu'];
	$fecha= date("Y-n-j");
	$destino_a= './menu_pdf/'.$tipo_menu.'/'.$pdf;
	$destino_b='/menu_pdf/'.$tipo_menu.'/';
	$q = "SELECT * FROM tbl_menu WHERE nombre_menu='$pdf'";
	$tablaNormativa = mysqli_query($conexion, $q);
	if ($pdf=="") {
		//echo "No hay fichero pdf";
		$_SESSION['error2']="No hay fichero";
		header('location:menu.php');
	}else if (mysqli_num_rows($tablaNormativa)>0) {
		$_SESSION['error']="Fichero repetido";
		header("location: menu.php");
	} else {

		$q="INSERT INTO `tbl_menu` (`nombre_menu`, `tipo_menu`, `ruta_menu`, `fecha_menu`, `id_etapa`) VALUES ('$pdf', '$tipo_menu', '$destino_a', '$fecha', 16)";
		$subirPdf=mysqli_query($conexion, $q);

	// Mover los ficheros al directorio que nosotros queremos
		$carpeta= "menu_pdf/".$tipo_menu."/";
		opendir($carpeta);
		$destino= $carpeta.$_FILES['foto']['name'];
		//echo "Este es el destino de la carpeta: $carpeta";
		copy($_FILES['foto']['tmp_name'],$destino);
		//echo "ARCHIVO SUBIDO";
		$nombre=$_FILES['foto']['name'];

		//echo $_FILES['foto']['name']."<br>";
		//echo $_FILES['foto']['size']."Bytes";
		//echo $_FILES['foto']['type'];
	//Fin subida de fichero
	//Vuelve a la pagina normativa
		header("location:menu.php");
	}
}
?>
