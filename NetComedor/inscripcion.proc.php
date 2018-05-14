<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])){
	header("location:principal.php");
		// echo "Hola";
} else {
	$idTicket = $_REQUEST['tipoT'];
	$cantidad = $_REQUEST['cantidadT'];
	$fechaCad = $_REQUEST['fecha'];
	if (isset($_REQUEST['lunes'])) {
		$lunes = $_REQUEST['lunes'];	
	}
	
	$martes = $_REQUEST['martes'];
	$miercoles = $_REQUEST['miercoles'];
	$jueves = $_REQUEST['jueves'];
	$viernes = $_REQUEST['viernes'];

	$q = "INSERT INTO tbl_usuario_ticket (id_usuario,id_ticket,fecha_caducidad,cantidad_ticket) VALUES (".$_SESSION['user']['id_usuario'].", $idTicket, '$fechaCad', $cantidad)";
	$comprarTicket=mysqli_query($conexion, $q);

	if ($q==true) {
		$tbl_dias_reserva="INSERT INTO tbl_dias_reserva (id_usuario_ticket, lunes, martes, miercoles, jueves, viernes) VALUES ('4', $lunes, $martes, $miercoles, $jueves, $viernes)";
		$registrarAsistencia=mysqli_query($conexion,$tbl_dias_reserva);
		// echo $tbl_dias_reserva;
	} else {
		echo "Error al hacer la compra. VOLVER A INTENTAR";
	}
	// header("location:home.php");
	}




	?>