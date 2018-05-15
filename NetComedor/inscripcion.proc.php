<?php
include("conexion.proc.php");
if(!isset($_SESSION['user'])){
	header("location:principal.php");
		// echo "Hola";
} else {
	$idTicket = $_REQUEST['tipoT'];
	$cantidad = $_REQUEST['cantidadT'];
	$fechaCad = $_REQUEST['fecha'];
	$precioTotal = $_REQUEST['insertPrecio'];
	
	if (isset($_REQUEST['lunes'])) {
		$lunes = $_REQUEST['lunes'];	
	} else {
		$lunes='0';
	}
	
	if (isset($_REQUEST['martes'])) {
		$martes = $_REQUEST['martes'];	
	} else {
		$martes='0';
	}

	if (isset($_REQUEST['miercoles'])) {
		$miercoles = $_REQUEST['miercoles'];	
	} else {
		$miercoles='0';
	} 

	if (isset($_REQUEST['jueves'])) {
		$jueves = $_REQUEST['jueves'];	
	} else {
		$jueves='0';
	} 

	if (isset($_REQUEST['viernes'])) {
		$viernes = $_REQUEST['viernes'];	
	} else {
		$viernes='0';
	}
	
	
	
	

	$q = "INSERT INTO tbl_usuario_ticket (id_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].", $idTicket, '$fechaCad', $cantidad, $precioTotal)";
	$comprarTicket=mysqli_query($conexion, $q);

	if ($q==true) {
		$tbl_dias_reserva="INSERT INTO tbl_dias_reserva (id_usuario_ticket, lunes, martes, miercoles, jueves, viernes) VALUES ('4', $lunes, $martes, $miercoles, $jueves, $viernes)";
		$registrarAsistencia=mysqli_query($conexion,$tbl_dias_reserva);
		// echo $tbl_dias_reserva;
	} else {
		echo "Error al hacer la compra. VOLVER A INTENTAR";
	}
	header("location:home.php");
	}




	?>