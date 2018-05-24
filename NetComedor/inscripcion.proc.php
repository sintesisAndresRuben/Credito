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
	$tipoTick = $_REQUEST['tipoTick'];
	
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
	
	$id_usuario_ticket=0;



	if ($tipoTick='Ticket comedor') {
		// echo "Tipo ticket: ".$tipoTick;
		$tcomedor="SELECT * FROM tbl_usuario_ticket WHERE id_ticket=".$idTicket." AND para_usuario=".$_SESSION['user']['id_usuario'];
		// echo $tcomedor;
		$tickCom=mysqli_query($conexion, $tcomedor);
		if (mysqli_num_rows($tickCom)>0) {
			$actualizar="UPDATE tbl_usuario_ticket SET cantidad_ticket=cantidad_ticket+$cantidad,precio_ticket=precio_ticket+$precioTotal WHERE id_ticket=".$idTicket." AND para_usuario=".$_SESSION['user']['id_usuario'];
			$sumar=mysqli_query($conexion, $actualizar);
			$primer_tiquet_comedor=false;
			// echo "<br>false";
		} else {
			$primer_tiquet_comedor=true;
			// echo "<br>true";
		}
		// header("location:home.php");
	} 
	
	if(($tipoTick!='Ticket comedor') OR ($primer_tiquet_comedor)){
		echo "<br><b>primerTicket</b>";
		$q = "INSERT INTO tbl_usuario_ticket (id_usuario,para_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].",".$_SESSION['user']['id_usuario'].", $idTicket, '$fechaCad', $cantidad, $precioTotal)";
		$comprarTicket=mysqli_query($conexion, $q);

		if ($_SESSION['user']['tipo_usuario']=='padre' OR 'padre2') {

			if ($q==true) {
				$tbl_ultimo_registro="SELECT * FROM tbl_usuario_ticket ORDER BY id_usuario_ticket DESC LIMIT 1";
				$uRegistro=mysqli_query($conexion,$tbl_ultimo_registro);
				while ($ultimo=mysqli_fetch_array($uRegistro)){

					$id_usu_ticket=$ultimo['id_usuario_ticket'];
			// echo $id_usu_ticket;
				} 

				if ($tbl_ultimo_registro==true) {
					$tbl_dias_reserva="INSERT INTO tbl_dias_reserva (id_usuario_ticket, lunes, martes, miercoles, jueves, viernes) VALUES ($id_usu_ticket, $lunes, $martes, $miercoles, $jueves, $viernes)";
					$registrarAsistencia=mysqli_query($conexion,$tbl_dias_reserva);

		// echo $tbl_dias_reserva;
		// echo $id_usu_ticket;
				}

			} else {
				echo "Error al hacer la compra. VOLVER A INTENTAR";
			}
		}
	}
		// header("location:home.php");
}