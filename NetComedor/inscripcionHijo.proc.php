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
	$idHijo = $_REQUEST['idHijo'];
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
	// echo "lunes: $lunes</br>";
	// echo "martes: $martes</br>";
	// echo "miercoles: $miercoles</br>";
	// echo "jueves: $jueves</br>";
	// echo "viernes: $viernes</br>";
	// echo "Al principio de la pagina: $tipoTick</br>";
	// echo "$tipoTick";
	$id_usuario_ticket=0;

	if ($tipoTick=="Ticket comedor ") {
		// echo "Estoy entrando por el tipo ticket comedor</br>";
		// echo "Tipo ticket: ".$tipoTick;
		$tcomedor="SELECT * FROM tbl_usuario_ticket WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
		// echo $tcomedor;
		$tickCom=mysqli_query($conexion, $tcomedor);
		if (mysqli_num_rows($tickCom)>0) {
			$actualizar="UPDATE tbl_usuario_ticket SET cantidad_ticket=cantidad_ticket+$cantidad,precio_ticket=precio_ticket+$precioTotal WHERE id_ticket=".$idTicket." AND para_usuario=".$idHijo;
			$sumar=mysqli_query($conexion, $actualizar);
			$primer_tiquet_comedor=false;
			// echo "<br>false";
		} else {
			$primer_tiquet_comedor=true;
			// echo "<br>true";
		}
		// header("location:home.php");
	} 

	if ($tipoTick!="Ticket comedor ") {
		// echo "Estoy entrando por los difernetes servicios de comedor</br>";
		// echo "Tipo ticket: ".$tipoTick;
		// echo "$precioTotal</br>";
		// echo "$idTicket</br>";
		$tcomedor="SELECT * FROM tbl_usuario_ticket WHERE para_usuario=".$idHijo;
		// echo "Consulta para ver el registro del comedor del alumno con su determinado ticket: $tcomedor</br>";
		$tickCom=mysqli_query($conexion, $tcomedor);
		if (mysqli_num_rows($tickCom)>0) {
			$actualizar="UPDATE tbl_usuario_ticket SET cantidad_ticket=1, precio_ticket=".$precioTotal.", id_ticket=" .$idTicket. " WHERE  para_usuario=".$idHijo;
			$dias="UPDATE tbl_dias_reserva SET tbl_dias_reserva.lunes=".$lunes.", tbl_dias_reserva.martes=".$martes.", tbl_dias_reserva.miercoles=".$miercoles.", tbl_dias_reserva.jueves=".$jueves.", tbl_dias_reserva.viernes=".$viernes." WHERE tbl_dias_reserva.id_usuario_ticket=(SELECT tbl_usuario_ticket.id_usuario_ticket FROM tbl_usuario_ticket WHERE para_usuario=".$idHijo.")";
			// echo "Actualizacion registro: $actualizar</br>";
			// echo "Actualizacion dias: $dias</br>";
			$sumar=mysqli_query($conexion, $actualizar);
			$actudias=mysqli_query($conexion, $dias);
			$primer_tiquet_comedor=false;
			// echo "false";
		} else {
			$primer_tiquet_comedor=true;
			// echo "<br>true";
		}
		header("location:home.php");
	} 


	if($primer_tiquet_comedor){
		$q = "INSERT INTO tbl_usuario_ticket (id_usuario,para_usuario,id_ticket,fecha_caducidad,cantidad_ticket,precio_ticket) VALUES (".$_SESSION['user']['id_usuario'].",$idHijo, $idTicket, '$fechaCad', $cantidad, $precioTotal)";
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
	header("location:home.php");
}