<?php
session_start();
if(!isset($_SESSION['user'])){
		header("location:principal.php");
		// echo "Hola";
	} else {
		include("conexion.proc.php");
//tt= tipoTicket
$tt = $_REQUEST['tipoT'];
$cantidad = $_REQUEST['cantidadT'];
$fechaCad = $_REQUEST['fecha'];

// $q = "SELECT * FROM tbl_ WHERE correo_contacto='$id'";
// 		$modificar=mysqli_query($conexion, $q);



echo $tt
?>
<br>
<?php
echo $cantidad;
?>
<br>
<?php
echo $fechaCad;
}


?>