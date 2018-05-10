<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])){
	header("location:principal.php");
		// echo "Hola";
} else {
	$idTicket = $_REQUEST['tipoT'];
	$cantidad = $_REQUEST['cantidadT'];
	$fechaCad = $_REQUEST['fecha'];

	$q = "INSERT INTO tbl_usuario_ticket (id_usuario,id_ticket,fecha_caducidad,cantidad_ticket) VALUES (".$_SESSION['user']['id_usuario'].", $idTicket, '$fechaCad', $cantidad)";
	$comprarTicket=mysqli_query($conexion, $q);

	// if ($q==true) {
	// 	$tbl_asistencia="INSERT INTO tbl_asistencia (fecha_asistencia, id_usuario_ticket,contador_asistencia,id_etapa) VALUES ('CURRENT_TIMESTAMP', iD_user_ticket,$cantidad,".$_SESSION['user']['id_etapa'].")";
	// 	$registrarAsistencia=mysqli_query($conexion,$tbl_asistencia);
	// } else {
	// 	echo "Error al hacer la compra. VOLVER A INTENTAR";
	// }
	header("location:home.php");
	}




	?>